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
        return redirect()->route('top'); // 'top' を実際のトップ画面のルート名に変更

        // メール送信後の処理を追加できます
    }
}
