<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendInquiry(Request $request)
    {
        if (isset($_POST["recaptchaToken"]) && !empty($_POST["recaptchaToken"])) {
            $secret = "6Le5hkopAAAAAGVvpKIplMkOFchmX7esZkVdmf2Q";
            $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["recaptchaToken"]);
            $reCAPTCHA = json_decode($verifyResponse);
            if ($reCAPTCHA->success) {
              echo "認証成功";
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
                  // メールを送信
                  Mail::to('fastline.llcompany@gmail.com')->send(new ContactFormMail($data));
                  // メール送信後のリダイレクト
                  return redirect()->route('top');
            } else {
              echo "認証エラー";
              return;
            }
        } else {
            echo "不正アクセス";
            return;
        }
    }
}
