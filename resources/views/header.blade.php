
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_pc.css" rel="stylesheet" media="screen and (min-width: 768px)">
        <link href="/css/style_sp.css" rel="stylesheet" media="screen and (max-width: 767px)">
        <script src="{{ asset('js/product_info.js') }}"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>

    <body>
        <div class="wrapper">
          <header class="header js-header">
           <div class="header-logo">
             <a href="https://www.welleg.co.jp" class="header-logo-link">
             </a>
           <img class="header-logo-img" src="/img/fastline_logo.png">
           </div>
           <div class="header-content show-pc">
              <div class="header-nav">
                <nav class="nav">
                  <ul class="nav-list">
                   <li class="nav-item ">
                     <a class="nav-link js-nav-link" href="https://www.welleg.co.jp/making">会社概要</a>
                   </li>
                   <li class="nav-item ">
                     <a class="nav-link js-nav-link" href="https://www.welleg.co.jp/about">製品について</a>
                   </li>
                   <li class="nav-item ">
                     <a class="nav-link js-nav-link" href="https://www.welleg.co.jp/news">採用情報</a>
                   </li>
                   <li class="nav-item ">
                     <a class="nav-link js-nav-link" href="https://www.welleg.co.jp/contact">お問い合わせ</a>
                   </li>
                  </ul>
                </nav>
                <!-- <a class="header-nav-img show-pc" href="https://www.welleg.co.jp/contact">
                <img alt="" src="https://www.welleg.co.jp/wp-content/themes/welleg/assets/images/header-img.svg"/>
                </a> -->
              </div>
            </div>
          </header> 
        </div>
        @endsection