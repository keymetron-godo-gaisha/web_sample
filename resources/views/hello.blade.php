<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('headList')
        <title>ファストライン合同会社｜トップ</title>
        <meta name="description" content="ファストライン合同会社は、古物の取引に特化した企業です。新幹線チケット代理購入サービス’とどきっぷ’を提供し、お客様に特別な体験をお届けします。">
    </head>
    <body>
        <div class="wrapper">
            <header class="header js-header">
                <div class="header-logo">
                    <a href="/" class="header-logo-link">
                        <img class="header-logo-img" src="/img/fastline_logo.png">
                    </a>
                </div>

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
                <div class="main_toppic">
                    <h2 class="main_title">巡る季節が、旅を彩る。</h2>
                </div>
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
                <!-- ▲企業概念 -->
                <!-- ▼新着情報 -->
                <div id="info" class="section">
                    <div class="in_bdy">
                        <h2>■NEWS</h2>
                        <ul class="new_info">
                            <li class="info_list">
                                <div class="info_title">
                                    <div class="schedule">2023/11/1</div>
                                    <div class="info_detail">
                                        <details class="qa-006">
                                            <summary>新幹線予約サイト「とどっきっぷ」リリース！</summary>
                                            <p>購入後すぐにチケットが手元に届く新幹線代理購入サービス「とどきっぷ」をリリースいたしました。<br>
                                                ▼ 業界最安値！操作もシンプルで簡単！<br>
                                                <a href="https://todokippu.com/top.php">詳しくはこちら</a>
                                            </p>
                                        </details>
                                    </div>
                                </div>
                                <div class="info_title">
                                    <div class="schedule">2023/10/1</div>
                                    <div class="info_detail">
                                        <details class="qa-006">
                                            <summary>サイトを公開しました</summary>
                                            <p>ファストライン合同会社のHPを公開いたしました。今後自社の新サービスや採用情報をアップデート予定です。</p>
                                        </details>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ▲新着情報 -->
                <!-- ▼会社概要 -->
                <div class="index-about section" id="index-about">
                    <div class="index-about-content">
                        <h2 class="index-about-heading">
                            会社概要
                        </h2>
                        <p class="index-about-detail">
                        <table>
                            <tr>
                                <th>会社名</th>
                                <td>ファストライン合同会社</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>〒171-0014 東京都豊島区池袋2-17-8</td>
                            </tr>
                            <tr>
                                <th>代表者</th>
                                <td>楊　波</td>
                            </tr>
                            <tr>
                                <th>事業内容</th>
                                <td>小売業</td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>080-1742-0698</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>fastline.llcompany@gmail.com</td>
                            </tr>
                            <tr>
                                <th>資本金</th>
                                <td>500,000円</td>
                            </tr>
                            <tr>
                                <th>設立年月</th>
                                <td>令和5年4月3日</td>
                            </tr>
                        </table>
                        </p>
                    </div>
                </div>
                <!-- ▲会社概要 -->
                <!-- ▼採用情報 -->
                <div class="index-recruit section" id="index-recruit">
                    <div class="recruit_bg"></div>
                    <div class="index-recruit-content">
                        <h2 class="index-recruit-heading">
                            採用情報
                        </h2>
                        <P class="index-recruit-detail">私たちと一緒に新たな挑戦を楽しむ仲間を募集しています。
                            <br>あなたの才能と情熱を活かし、一緒に素晴らしい仕事をしましょう!
                            <br>興味がある方はぜひご応募ください。
                        </p>
                        <p class="recruit-detail-more">
                            <a href="{{ route('recruit.index') }}" class="recruit-detail-action">
                                <span class="recruit-action-push">More</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- ▲採用情報 -->
                <!-- ▼商品紹介 -->
                <div class="products_index section" id="products_index">
                    <div class="products">
                        <h1 class="products_index_title" style="translate: none;rotate: none;scale: none;transform: translate(0px, 0px);opacity: 1;">
                            ■製品について</h1>
                        <div class="products-about">
                            <div class="products_bg"></div>
                            <div class="products-about-content">
                                <h2 class="products-about-heading">とどきっぷ</h2>
                                <P class="products-about-detail">
                                    「とどきっぷ」は、全国の新幹線・特急列車のきっぷを手軽に購入できる便利なサイトです！<br>
                                    会員登録は一切不要！選べるお支払方法！<br>
                                    購入したきっぷは、指定の住所へお届けいたします。<br>
                                    いつでもどこでも、簡単に予約できます。<br>
                                    「とどきっぷ」を利用して、快適でスムーズな旅行を楽しんでください！<br>
                                    当サイトでのご予約は、新幹線や特急列車の旅をさらに楽しいものにします！
                                </p>
                                <p class="recruit-detail-more">
                                    <a href="https://todokippu.com/top.php" class="recruit-detail-action">
                                        <span class="products-action-push">詳しくはこちらから！</span>
                                    </a>
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
                <!-- ▲商品紹介 -->
                <!-- ▼お問い合わせフォーム -->
                <div class="enquiry_index section" id="enquiry_index">
                    <div class="enquiry">
                        <p class="enquiry_text">お問い合わせフォーム</p>
                        <div class="enquiry_content">
                            <a href="{{ route('inquiry.index') }}" class="enquiry_contact">
                                <span class="enquiry_title">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ▲お問い合わせフォーム -->
            </main>
            @include('footer')
        </div>
    </body>
</html>
