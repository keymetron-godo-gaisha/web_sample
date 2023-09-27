<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_pc.css" rel="stylesheet" media="screen and (min-width: 768px)">
        <link href="/css/style_sp.css" rel="stylesheet" media="screen and (max-width: 767px)">
        <script src="{{ asset('js/product_info.js') }}"></script>
        <script src="{{ asset('js/info_more.js') }}"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        <title>FAST LINE</title>
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

        <link rel="icon" href="/img/fastline_logo.png" type="image/x-icon">

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
    <div class="header-content">
  <div class="header-nav">
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="#index-about">会社概要</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="#products_index">製品について</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="#index-recruit">採用情報</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link js-nav-link" href="#enquiry_index">お問い合わせ</a>
        </li>
      </ul>
    </nav>
  </div>
</header> 

<main>
<!-- ▼トップ画面 -->
<div class="main_toppic"><h2 class="main_title">巡る季節が、旅を彩る。</h2></div>
<!-- ▲トップ画面 -->
<!-- ▼企業概念 -->
<div class="index-management">
          <div class="index-management-content">
            <h2 class="index-management-title">経営理念</h2>
            <P class="index-management-detail">「人と人との出会い」、
              そこから生まれる「コミュニケーション」を大切にし、より豊かな未来の発展に貢献します。</p>
            <P class="index-management-detail2"> 
              私たちは、人との繋がりの中で共に成長し、夢あふれる未来を創り上げていきます。</p>
          </div>
    </div>
          </div>
        </div>
    </div> 
<!-- ▲企業概念 -->
<!-- ▼新着情報 -->
<div id="info">
  <div class="in_bdy">
    <h2>■NEWS</h2>
    <ul class="new_info">
      <li class="info_list">
        <div class="info_title">
          <div class="schedule">2023/8/1</div>
          <div class="info_detail">
            <details class="qa-006">
              <summary>システムメンテナンス情報</summary>
              <p>■定例システムメンテナンス（毎日）
                23時50分～0時10分、1時50分～5時00分


                ■臨時システムメンテナンス
                2023年
                7月27日（木）23時50分～7月28日（金）5時00分
                7月31日（月）23時50分～8月 1日（火）5時00分
               </p>
            </details>
          </div>
        </div>
        <div class="info_title">
          <div class="schedule">2023/8/1</div>
          <div class="info_detail">
            <details class="qa-006">
              <summary>夏季休業期間のキャンセルのお問合せにつきまして</summary>
              <p>夏季休業期間のキャンセルのお問合せにつきましては、チケットと一緒に同封させていただきました説明に従ってキャンセル手続きをお願いいたします。
                休業期間中につきましてはお電話での対応が出来ませんのでご了承願います。
                またメールにつきましても8月16日以降に対応させていただきますのでどうぞよろしくお願いいたします。</p>
            </details>
          </div>
        </div>
        <div class="info_title">
          <div class="schedule">2023/8/1</div>
          <div class="info_detail">
            <details class="qa-006">
              <summary>夏季休業のお知らせ</summary>
              <p>弊社は8月10日～8月15日まで夏季休業期間となります。この期間にお申込みをいただきましたご注文につきましては8月16日以降のメールでのご案内、及び発送となります。ご了承願います。</p>
            </details>
            
          </div>
        </div>
        <div class="info_title">
          <div class="schedule">2023/8/1</div>
            <div class="info_detail">
              <details class="qa-006">
                <summary>配送先の住所に建物名(マンション名・アパート名)の記載をお願いいたします。</summary>
                <p>
                  弊社よりレターパック、ヤマト宅急便で配送させていただいておりますが、住所に建物名(マンション名・アパート名)の記載なく、配送先が不明で戻って来てしまうケースが増えてきております。お手数ではございますが配送先住所は必ず建物名・部屋番号(マンション・アパートなど)がある場合は必ず記載願います。
                </p>
              </details>
            </div>
          </div>
          <div class="info_title">
          <div class="schedule">2023/8/1</div>
          <div class="info_detail">
            <details class="qa-006">
              <summary>夏季休業のお知らせ</summary>
              <p>弊社は8月10日～8月15日まで夏季休業期間となります。この期間にお申込みをいただきましたご注文につきましては8月16日以降のメールでのご案内、及び発送となります。ご了承願います。</p>
            </details>
            
          </div>
        </div>
        <div class="info_title">
          <div class="schedule">2023/8/1</div>
          <div class="info_detail">
            <details class="qa-006">
              <summary>夏季休業のお知らせ</summary>
              <p>弊社は8月10日～8月15日まで夏季休業期間となります。この期間にお申込みをいただきましたご注文につきましては8月16日以降のメールでのご案内、及び発送となります。ご了承願います。</p>
            </details>
          </div>
        </div>
        <div id="load-more-container">
           <button id="load-more-button">もっと見る</button>
           <button id="close-more-button" style="display: none;">閉じる</button>
        </div>
        </div>
        </li>
        </ul>
        <!-- <div id="load-more-container">
           <button id="load-more-button">もっと見る</button>
           <button id="close-more-button" style="display: none;">閉じる</button>
        </div> -->
      
      </div>
    </div>
<!-- ▲新着情報 -->
<!-- ▼会社概要 -->
<a id="index-about"></a>
    <div class="index-about">
        <div class="index_bg"></div>
          <div class="index-about-content">
            <h2 class="index-about-heading">
                会社概要
            </h2>
            <P class="index-about-detail">
            <table>
        <!-- <tr>
            <th>列1の見出し</th>
            <th>列2の見出し</th>
        </tr> -->
        <tr>
            <td>会社名</td>
            <td>FASTLINE</td>
        </tr>
        <tr>
            <td>所在地</td>
            <td>〒xxx-xxxx  住所</td>
        </tr>
        <tr>
            <td>代表者</td>
            <td>代表取締役　名前</td>
        </tr>
        <tr>
            <td>事業内容</td>
            <td>○○</td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td>xx-xxxx-xxxx</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>○○</td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>○○</td>
        </tr>
        <tr>
            <td>資本金</td>
            <td>¥¥¥¥</td>
        </tr>
        <tr>
            <td>取引銀行</td>
            <td>○○</td>
        </tr>
        <tr>
            <td>取引先企業名</td>
            <td>○○</td>
        </tr>
        <tr>
            <td>設立年月</td>
            <td>○○</td>
        </tr>
        
        <!-- 追加の行を必要に応じて続けることができます -->
    </table>
            </p>
          </div>
    </div>
          </div>
        </div>
    </div> 
<!-- ▲会社概要 -->
<!-- ▼採用情報 -->
<a id="index-recruit"></a>
<div class="index-recruit">
        <div class="recruit_bg"></div>
          <div class="index-recruit-content">
            <h2 class="index-recruit-heading">
                採用情報
            </h2>
            <P class="index-recruit-detail">私たちと一緒に新たな挑戦を楽しむ仲間を募集しています。
              <br>あなたの才能と情熱を活かし、一緒に素晴らしい仕事をしましょう!
              <br>興味がある方はぜひご応募ください。</p>
            <p class="recruit-detail-more">
              <a href="{{ route('recruit.index') }}" class="recruit-detail-action">
                <span class="recruit-action-push">More</span>
              </a>
            </p>
          </div>
    </div>
          </div>
        </div>
    </div> 
<!-- ▲採用情報 -->
<!-- ▼商品紹介 -->
<a id="products_index"></a>
<div class="products_index">
  <div class="products">
    <h1 class="products_index_title" style="translate: none;rotate: none;scale: none;transform: translate(0px, 0px);opacity: 1;">
      ■製品について</h1>
    <div class="products-about">
        <div class="products_bg"></div>
          <div class="products-about-content">
            <h2 class="products-about-heading">とどきっぷ</h2>
            <P class="products-about-detail">
              詳細
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </div>
        </div>
    </div>
        </div>
    </div> 
    <!-- <div class="products_index_detail">
      <div class="products_detail_format">
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products.png">
            </div>
            <p class="products_title">商品名</p>
            <br>
            <h3 class="products_subtitle">商品詳細</h3>
            <br>
            <br>
            <br>
          </a>
        </div>
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products1.png">
            </div>
            <p class="products_title">商品名</p>
            <br>
            <h3 class="products_subtitle">商品詳細</h3>
            <br>
            <br>
            <br>
          </a>
        </div>
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products2.png">
            </div>
            <p class="products_title">商品名</p>
            <br>
            <h3 class="products_subtitle">商品詳細</h3>
            <br>
            <br>
            <br>
          </a>
        </div>
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products.png">
            </div>
            <p class="products_title">商品名</p>
            <br>
            <h3 class="products_subtitle">商品詳細</h3>
            <br>
            <br>
            <br>
          </a>
        </div>
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products1.png">
            </div>
            <p class="products_title">商品</p>
            <br>
            <h3 class="products_subtitle">商品詳細</h3>
            <br>
            <br>
            <br>
          </a>
        </div>
        <div class="products_detail">
          <a class="products_link" href="">
            <div class="products_pic">
              <img class="products_image" src="../img/products2.png">
            </div>
            <p class="products_title">商品名</p>
            <br>
            <h3 class="products_subtitle">商品</h3>
            <br>
            <br>
            <br>
          </a>
        </div>  
      </div>
    </div>
        <div class="product_slide">
          <button id="prev-button">前へ</button>
          <button id="next-button">次へ</button>
        </div> -->
  </div>
</div>
<!-- ▲商品紹介 -->
<!-- ▼お問い合わせフォーム -->
<a id="enquiry_index"></a>
<div class="enquiry_index">
  <div class="enquiry">
    <p class="enquiry_text">お問い合わせフォーム</p>
      <div class="enquiry_content">
        <a href="{{ route('inquiry.index') }}" class="enquiry_contact">
          <span class="enquiry_title">Contact</span>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- ▲お問い合わせフォーム -->
    </div>
    </div>
    </div>
</main>
<!-- ▼フッター -->
<footer class="footer">
    <div class="footer_frame">
      <div class="footer_company">
        <div class="footer_menu">
          <div class="footer_menu_service">
            <!-- <img class="footer-logo-img" src="/img/fastline_logo.png"> -->
            <h5>FAST LINE</h5>
                <div class="address">
                <p>〒xxx-xxx <br>xx県xx市xxx町xxxx-x-x</p>
                        <p>Tel：xxx-xxxx </p>
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
                      <li class="footer_text"><a class="footer_a_text" href="privacy-policy.html">個人情報保護方針について</a></li>
                  </ul>
              </div>
              </div>
          <!-- </div> -->
          <!-- <div class="copyright">Copyright © 2023 TABILIA</div> -->
        </div>
      </div>
    </div>
</footer>
<!-- ▲フッター -->
  </div>
 </body>
</html>
