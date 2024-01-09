<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendInquiry(Request $request)
    {
        $secretKey =  '生成された Scecret Key をこちらに貼り付け';
        $captchaResponse = $_POST['g-recaptcha-response'];

        // APIリクエスト
        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");

        // APIレスポンス確認
        $responseData = json_decode($verifyResponse);
        // フォームデータを受け取り、バリデーションを行う
        $data = $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'company' => 'nullable',
            'department' => 'nullable',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'nullable',
        ]);
        if ($responseData->success) {
            // メールを送信
            Mail::to('fastline.llcompany@gmail.com')->send(new ContactFormMail($data));
            // メール送信後のリダイレクト
            return redirect()->route('top');
        } else {
            echo '<h1 class="text-center">Sorry unexpected error occurred, please try again later.</h1>'; // 失敗
        }
    }
}
