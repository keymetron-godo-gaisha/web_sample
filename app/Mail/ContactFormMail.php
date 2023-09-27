<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData; // フォームデータを保持するプロパティを追加

    /**
     * Create a new message instance.
     *
     *  @param array $formData
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData; // フォームデータをコンストラクタで受け取ります
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact') // メールのビューを指定します
                    ->subject('お問い合わせフォームからのメッセージ'); // メールの件名を設定します
    }
}
