<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendInquiry(Request $request)
    {
        // フォームデータを受け取り、バリデーションを行う

        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'company' => 'nullable',
            'department' => 'nullable',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'nullable',
            'recaptchaToken' => 'required', // 新しく追加
        ]);

        // reCAPTCHA トークンの検証
        $recaptchaToken = $request->input('recaptchaToken');
        $recaptchaSecret = config('services.recaptcha.secret'); // config/services.php に設定しておくと良い

        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaToken}");
        $reCAPTCHA = json_decode($verifyResponse);
dd($reCAPTCHA);
        if ($reCAPTCHA->success) {
            // 認証成功時の処理
            // メールを送信
            Mail::to('fastline.llcompany@gmail.com')->send(new ContactFormMail($request->all()));
            // メール送信後のリダイレクトなどの処理
            return redirect()->route('top');
        } else {
            // 認証エラー時の処理
            return redirect()->route('error');
        }
    }
}
