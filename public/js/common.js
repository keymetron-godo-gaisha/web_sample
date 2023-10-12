document.addEventListener("DOMContentLoaded", function () {
    // // ロゴ要素を取得
    // var logo = document.querySelector(".header-logo-img");

    // // ロゴがクリックされたときの処理を定義
    // logo.addEventListener("click", function (event) {
    //     event.preventDefault(); // リンクのデフォルトの動作を無効にする
    //     window.location.href = "/"; // トップページのURLを指定
    // });

    // ページ内リンクがクリックされたときの処理
   var navLinks = document.querySelectorAll(".js-nav-link");

   navLinks.forEach(function (link) {
       link.addEventListener("click", function (event) {
           event.preventDefault();
           var targetId = this.getAttribute("href").substring(1); // href属性から#を削除してIDを取得
           var targetElement = document.getElementById(targetId);

           if (targetElement) {
               // 要素が見つかった場合は、スクロールして表示
               window.scrollTo({
                   top: targetElement.offsetTop,
                   behavior: "smooth",
               });
           } else {
               // 要素が存在しない場合は、トップページに遷移
               var baseUrl = window.location.origin;

               // ベースURLをトップページに制限
               if (baseUrl.endsWith("/")) {
                   baseUrl = baseUrl.slice(0, -1);
               }
               window.location.href = baseUrl + "#" + targetId;
           }
       });
   });
});
