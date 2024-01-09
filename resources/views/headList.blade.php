<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="H4a8hHuA5Fvj13bqzODRlUjj43JAJFB7zKFWWbTCPbo" />
<link href="css/style_pc.css" rel="stylesheet" media="screen and (min-width: 768px)">
<link href="/css/style_sp.css" rel="stylesheet" media="screen and (max-width: 767px)">
{{-- <script src="{{ asset('js/product_info.js') }}"></script> --}}
<script src="{{ asset('js/info_more.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
              $(".js-nav-link").click(function(event) {
                  event.preventDefault(); // リンクのデフォルトの動作を無効化
                  var target = $(this).attr("href");
                  var offset = $(target).offset().top;
                  $("html, body").animate({
                      scrollTop: offset
                  }, 1000); // 1000ミリ秒（1秒）でスクロール
                });
              });
</script>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Le5hkopAAAAAGVvpKIplMkOFchmX7esZkVdmf2Q"></script>
