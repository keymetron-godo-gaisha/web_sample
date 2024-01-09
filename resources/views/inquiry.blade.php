<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('headList')
        <title>ファストライン合同会社｜お問い合わせ</title>
        <meta name="description" content="自社サービスに関することなどお気軽にお問い合わせください。">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @include('header')
        <form id="myForm" method="POST" action="{{ route('send.inquiry') }}">
            @csrf
            <div class="inquiry">
                <h2 class="inquiry-title">
                    お問い合わせフォーム<br>
                    気軽にお問い合わせください。
                </h2>
                <div class="inquiry-form">
                    <div class="inquiry-content">
                        <div class="inquiry-lastname">
                            <label id="label-lastname">
                                <span>姓</span>
                                <span class="lastname-required">*<span>
                            </label>
                            <div class="required-input">
                                <input class="input-text required" type="text" name="lastname" required>
                            </div>
                        </div>
                        <div class="inquiry-firstname">
                            <label id="label-firstname">
                                <span>名</span>
                                <span class="firstname-required">*<span>
                            </label>
                            <div class="required-input">
                                <input class="input-text required" type="text" name="firstname" required>
                            </div>
                        </div>
                        <div class="inquiry-lastname">
                            <label id="label-lastname">
                                <span>会社名</span>
                                <span class="lastname-required"><span>
                            </label>
                            <div class="required-input">
                                <input class="input-text" type="text" name="company">
                            </div>
                        </div>
                        <div class="inquiry-firstname">
                            <label id="label-firstname">
                                <span>部署名</span>
                                <span class="firstname-required"><span>
                            </label>
                            <div class="required-input">
                                <input class="input-text" type="text" name="department">
                            </div>
                        </div>
                        <div class="inquiry-lastname">
                            <label id="label-lastname">
                                <span>E-mail</span>
                                <span class="lastname-required">*<span>
                            </label>
                            <div class="required-input">
                                <input class="input-text required" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="inquiry-firstname">
                            <label id="label-firstname">
                                <span>電話番号</span>
                                <span class="firstname-required"><span>
                            </label>
                            <div class="required-input">
                                <input class="input-text" type="tel" name="phone">
                            </div>
                        </div>
                        <div class="required-message">
                            <label class="label-message">
                                <span>備考欄</span>
                                <span class="lastname-required">*<span>
                            </label>
                            <div class="required-input-message">
                                <textarea class="input-text-message required" type="message" name="message"cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="required-consent-frame">
                        <div class="required-privacy">
                            <br>
                            <h2 class="required-privacy-title">プライバシーポリシー</h2>
                            <p>ファストライン合同会社以下「当社」）は、個人情報を適切に取り扱うことが社会的責務であると認識しております。
                                当社は、個人情報に関する法令を遵守し、個人情報の適切な取り扱いを実現致します。</p>
                            <br>
                            <section>
                                <section>
                                    <h3 class="required-privacy-subtitle">個人情報の定義</h3>
                                    <p>個人情報とは、当該本人に関する全ての情報であって、かつ具体的に特定の当該本人の氏名、
                                        連絡先もしくは住所等の明らかとなる事項（識別情報）の事であるとします。</p>
                                </section>
                                <br>
                                <section>
                                    <h3 class="required-privacy-subtitle">個人情報の利用目的</h3>
                                    <p>当社は個人情報の取扱にあたっては利用目的をできる限り特定し、ご本人の事前の同意なしに、
                                        利用目的を超えて個人情報を取得、利用しません。また、偽り、その他不正の手段により個人情報を取得しません。</p>
                                </section>
                                <br>
                                <section>
                                    <h3 class="required-privacy-subtitle">個人情報の管理</h3>
                                    <p>当社は取得した個人情報の漏えい、紛失、改ざん等の防止のため適切な措置を講じます。</p>
                                </section>
                                <br>
                                <section>
                                    <h3 class="required-privacy-subtitle">個人情報保護の適用範囲</h3>
                                    <p>本プライバシーポリシーは、当ウェブサイト（アドレス.comドメイン）においてのみ適用されます。</p>
                                </section>
                                <br>
                                <section>
                                    <h3 class="required-privacy-subtitle">個人情報の苦情、相談</h3>
                                    <p>当社は、ご本人から個人情報の開示、訂正、追加、削除または利用停止を求められた場合には、法令等にしたがい適切な措置を講じます。</p>
                                </section>
                                <br>
                                <section>
                                    <h3 class="required-privacy-subtitle">お問い合わせ窓口</h3>
                                    <p>個人情報のお取り扱いに関するお問い合わせは、下記担当までお願い致します。
                                        <br>
                                        〒171-0014 東京都豊島区池袋2-17-8
                                        <br>
                                        ファストライン合同会社プライバシーポリシー管理担当
                                        <br>
                                        Email : fastline.llcompany@gamil.com
                                    </p>
                                </section>
                            </section>
                            <br>
                        </div>
                    </div>
                    <div class="send-submit">
                        <div class="send-submit-action">
                            <div class="g-recaptcha" data-sitekey="6LejpUopAAAAAA2aOzApocXRi7vGT6lDhCpoUfrU"></div>
      <br/>
                            <input type="submit" class="send-submit-push" value="プライバシーポリシーに同意して送信する">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @include('footer')
    </body>
    <script>
        $(document).ready(function () {
                    $("form").submit(function (event) {
                        var isValid = true;

                        // 必須フィールドをチェック
                        $(".required").each(function () {
                            if (!$(this).val()) {
                                isValid = false;
                                $(this).addClass("error");
                            }
                        });

                        // エラーメッセージ表示
                        if (!isValid) {
                            event.preventDefault(); // フォームのデフォルトの送信を抑制
                            $(".error").first().focus();
                            alert("必須項目が未入力です。フォームを正しく記入してください。");

                        }
                    });
                });
    </script>
    <script>
        $(document).ready(function() {
                    $(".js-nav-link").click(function() {
                    var target = $(this).attr("href");
                    $("html, body").animate({
                        scrollTop: $(target).offset().top
                    }, 1000);
                    });
                });
    </script>
    <script>
        document.getElementById("myForm").addEventListener('submit', onSubmit);
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
            'sitekey' : '6LejpUopAAAAAA2aOzApocXRi7vGT6lDhCpoUfrU'
            });
        };
       function onSubmit(e)
       {
         e.preventDefault();
        // How this code snippet works:
        // This logic overwrites the default behavior of `grecaptcha.ready()` to
        // ensure that it can be safely called at any time. When `grecaptcha.ready()`
        // is called before reCAPTCHA is loaded, the callback function that is passed
        // by `grecaptcha.ready()` is enqueued for execution after reCAPTCHA is
        // loaded.
        if(typeof grecaptcha === 'undefined') {
            grecaptcha = {};
        }
        grecaptcha.ready = function(cb){
            if(typeof grecaptcha === 'undefined') {
            // window.__grecaptcha_cfg is a global variable that stores reCAPTCHA's
            // configuration. By default, any functions listed in its 'fns' property
            // are automatically executed when reCAPTCHA loads.
            const c = '___grecaptcha_cfg';
            window[c] = window[c] || {};
            (window[c]['fns'] = window[c]['fns']||[]).push(cb);
            } else {
            cb();
            }
        }
         grecaptcha.ready(function()
         {
           grecaptcha.execute('6LejpUopAAAAAA2aOzApocXRi7vGT6lDhCpoUfrU', {action: 'submit'}).then(function(token)
           {
             var recaptchaToken = document.getElementById('recaptchaToken');
             recaptchaToken.value = token;
             document.getElementById("myForm").submit();
           });
         });
       }
        // function onClick(e) {
        //   e.preventDefault();
        //   grecaptcha.enterprise.ready(async () => {
        //     const token = await grecaptcha.enterprise.execute('6Le5hkopAAAAAGVvpKIplMkOFchmX7esZkVdmf2Q', {action: 'send.inquiry'});
        //   });
        // }
        // grecaptcha.ready(function () {
        //   grecaptcha.execute("6Le5hkopAAAAAGVvpKIplMkOFchmX7esZkVdmf2Q", {action: "send.inquiry"}).then(function(token) {
        //     var recaptchaResponse = document.getElementById("recaptchaResponse");
        //     recaptchaResponse.value = token;
        //   });
        // });

      </script>
</html>
