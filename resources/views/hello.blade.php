<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_pc.css" rel="stylesheet" media="screen and (min-width: 768px)">

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
      <img class="header-logo-img" src="/img/sumple_log.png">
      <span class="header-logo-text">サブタイトル。</span>
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
          <a class="nav-link js-nav-link" href="https://www.welleg.co.jp/recruit">NEWS</a>
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
</header> 
    <main>
     <div class="main_toppic"></div>
        <div class="index-about">
            <div class="index-about-wrapper">
                <div class="index-about-content">

                </div>
                <div class="index-about-text-content">
                    <h2 class="index-about-heading">
                        ここに何かスローガン的なの入れる
                    </h2>

                </div>
            </div>
        </div> 
       <div class="index_news">
         <div class="index-news-wrapper wrapper">
      <div class="index-news-heading-wrap">
        <h2 class="index-news-heading">新着情報</h2>
        <a class="index-news-btn" href="https://www.welleg.co.jp/news">お知らせ一覧</a>
      </div>
      <ul class="index-news-list js-index-news-list js-observe">
        <li class="gutter-sizer"></li>
        <li class="news-block">            
        <article class="news-article news-article-181">
            <div id="news-181" class="article-modal js-modal">
                <div class="article-modal-content js-modal-content">
                <div class="article-modal-overlay js-article-modal-overlay"></div>
                    <div class="single-wrap">
                        <div class="single-wrapper">
                            <div class="single-heading">
                            <h2 class="single-title">ホームページリニューアルのお知らせ</h2>
                            <time class="single-date" datetime="2021-04-23">2021.04.23</time>
                        </div>
                        <div class="single-content">
                            <figure class="single-content-img-wrap">
                            <img class="single-content-img" src="/img/sumple_log.png" alt=""/>
                            </figure>
                            <p>日頃より、株式会社⚪︎⚪︎のホームぺージをご利用いただき、誠にありがとうございます。<br />
                            この度、ホームページを全面リニューアルいたしました。<br />
                            
                    </div>
                    <div class="single-share">
                        <p class="single-share-heading">記事をシェアする</p>
                        <ul class="social-icon-list">
                        <li class="social-icon-item">
                            <a target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u=https://www.welleg.co.jp/news/181/" class="sns-link"><i class="social-icon-icon icon-facebook"></i></a>
                        </li>
                        <li class="social-icon-item">
                            <a class="sns-link" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://twitter.com/share?url=https://www.welleg.co.jp/news/181/" data-show-count="false"><i class="social-icon-icon icon-twitter"></i>
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        </ul>
                    </div>
                    <div class="single-btn">
                        <div class="button-svg-wrap js-single-news-btn">
                            <svg class="button-circle button-circle-gray" viewBox="0 0 200 200">
                                <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="#e5e5e5" stroke-width="1.5" fill="none" />
                            </svg>
                            <svg class="button-circle button-circle-blue" viewBox="0 0 200 200">
                                <path d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" stroke="#84ADC3" stroke-width="1.5" fill="none" />
                            </svg>
                            <p class="button-circle-text">一覧に戻る</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="article-modal-close-btn js-modal-close"></div>
            </div>
        </article>          
        </li>
        </ul>
    </div>
    </div>
    </div>
    </main>
    <footer id="downfooter" style="top: 0px;">
            <ul class="nav">
                
            </ul>
            <div class="footer_bottom">
                <div class="in_bdy">
                    <h5>株式会社⚪︎⚪︎</h5>
                    <div class="address">
                        <p style="padding: 1%;">住所記入 <br>ビル名記入</p>
                        <p>Tel. </p>
                    </div>
                    <!-- <div class="copyright">Copyright © 2018 EKICHIKE</div> -->
                </div>
            </div>
    </footer>
  </div>
    </body>
</html>
