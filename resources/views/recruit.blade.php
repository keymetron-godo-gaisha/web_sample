<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('headList')
        <title>ファストライン合同会社</title>
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
                                    <p class=""> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')
    </body>
</html>
