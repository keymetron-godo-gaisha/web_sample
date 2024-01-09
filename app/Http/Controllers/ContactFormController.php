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

        $recaptcha = $_POST['g-recaptcha-response'];
        if (isset($recaptcha)) {
            $captcha = $recaptcha;
        } else {
            $captcha = '';
        }
        $secretKey = "6LejpUopAAAAAO9S9HTovSILDArnzLgslVfFdALa";
        $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $resp_result = json_decode($result, true);
        if (intval($resp_result["success"]) !== 1) {
            // reCAPTCHA承認失敗時の処理
            header('Location: https://fastline-llc.com');
            exit;
        }

        // 認証成功時の処理
        // メールを送信
        Mail::to('fastline.llcompany@gmail.com')->send(new ContactFormMail($request->all()));
        // メール送信後のリダイレクトなどの処理
        return redirect()->route('top');
    }
}
