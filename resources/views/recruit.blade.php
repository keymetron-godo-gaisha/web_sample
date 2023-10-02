<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_pc.css" rel="stylesheet" media="screen and (min-width: 768px)">
        <link href="/css/style_sp.css" rel="stylesheet" media="screen and (max-width: 767px)">
        <script src="{{ asset('js/common.js') }}"></script>
        <link rel="icon" href="/img/fastline_logo.png" type="image/x-icon">

        <title>ファストライン合同会社</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
    @yield('header')
        <div class="wrapper">
    <header class="header js-header">
    <div class="header-logo">
      <a href="http://127.0.0.1:8000/hello" class="header-logo-link">
      </a>
      <img class="header-logo-img" src="/img/fastline_logo.png">
    </div>
    <div class="header-content show-pc">
  <div class="header-nav">
    <nav class="nav">
      <ul class="nav-list">
      <li class="nav-item ">
          <a class="nav-link js-nav-link" href="/#company">会社概要</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="/#products_index">弊社サービス</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="/#index-recruit">採用情報</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="/#enquiry_index">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    <a class="header-nav-img show-pc" href="http://127.0.0.1:8000/hello"> </a>
  </div>
</header>
<div class="vision">
    <div class="vision-mainpic">
        <div class="vision-maintext">
            <h2 class="vision-maintitle">FASTLINE RECRUITMENT</h2>
        </div>
    </div>
    <div class="job">
        <div class="job-aout">
            <h2 class="job-about-title">
                採用情報
            </h2>
            <div class="job-about-detail">
                <div class="job-card">
                    <h3 class="job-card-title">
                        ファストライン合同会社
                    </h3>
                    <div class="job-card-detail">
                        <p class="">現在採用情報はありません。</p>
                    </div>
                    <div class="job-card-info">
                        <p class="">          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ▼フッター -->
<footer class="footer">
    <div class="footer_frame">
      <div class="footer_company">
        <div class="footer_menu">
          <div class="footer_menu_service">
            <!-- <img class="footer-logo-img" src="/img/fastline_logo.png"> -->
            <h5>ファストライン合同会社</h5>
                <div class="address">
                <p>〒171-0014 <br>東京都豊島区池袋2-17-8</p>
                        <p>Tel：080-1742-0698 </p>
                </div>
          </div>
          <!-- <div class="footer_rigth"> -->
              <div class="footer_top">
                  <ul class="nav">
                      <li class="footer_text"><a class="footer_a_text" href="#index-about">会社概要</a></li>
                      <li class="footer_text"><a class="footer_a_text" href="#products_index">製品について</a></li>
                      <li class="footer_text"><a class="footer_a_text" href="#index-recruit">採用情報</a></li>
                  <!-- </ul>
              </div> -->

              <!-- <div class="footer_bottom">
                  <ul class="nav"> -->
                      <li class="footer_text"><a class="footer_a_text" href="#enquiry_index">お問い合わせ</a></li>
                  </ul>
              </div>
          <!-- </div> -->
          <!-- <div class="copyright">Copyright © 2023 TABILIA</div> -->
        </div>
      </div>
    </div>
</footer>
<!-- ▲フッター -->
</body>
</html>
