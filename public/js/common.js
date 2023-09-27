document.addEventListener('DOMContentLoaded', function() {
    // ロゴ要素を取得
    var logo = document.querySelector('.header-logo-img');

    // ロゴがクリックされたときの処理を定義
    logo.addEventListener('click', function(event) {
        event.preventDefault(); // リンクのデフォルトの動作を無効にする
        window.location.href = 'http://127.0.0.1:8000/hello'; // トップページのURLを指定
    });
});






