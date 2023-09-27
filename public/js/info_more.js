
document.addEventListener("DOMContentLoaded", function () {
    const loadMoreButton = document.getElementById("load-more-button");
    const closeMoreButton = document.getElementById("close-more-button");
    const announcements = document.querySelectorAll(".info_title");
    let visibleAnnouncements = 4; // 最初は4つのお知らせが表示されている
  
    // もっと見るボタンのクリックイベント
    loadMoreButton.addEventListener("click", function () {
        for (let i = visibleAnnouncements; i < announcements.length; i++) {
            announcements[i].style.display = "block"; // 5つ目以降のお知らせを表示
            if (window.innerWidth > 768) {
              announcements[i].style.display = "flex"; // 5つ目以降のお知らせを横並びにする
            } else {
              announcements[i].style.display = "block"; // スマホサイズの場合は block に変更
            }
          }
  
      loadMoreButton.style.display = "none"; // もっと見るボタンを非表示
      closeMoreButton.style.display = "block"; // 閉じるボタンを表示
    });
  
    // 閉じるボタンのクリックイベント
    closeMoreButton.addEventListener("click", function () {
      for (let i = 4; i < announcements.length; i++) { // 4から始めることで、最初の4つのお知らせは非表示にしない
        announcements[i].style.display = "none"; // 5つ目以降のお知らせを非表示
      }
  
      loadMoreButton.style.display = "block"; // もっと見るボタンを表示
      closeMoreButton.style.display = "none"; // 閉じるボタンを非表示
    });
  });

loadMoreButton.addEventListener("click", function () {
    if (isProcessing) return; // 処理中はクリックを無効化
  
    isProcessing = true; // 処理中フラグを立てる
  
    for (let i = visibleAnnouncements; i < announcements.length; i++) {
      announcements[i].style.display = "block"; // 5つ目以降のお知らせを表示
    }
  
    loadMoreButton.style.display = "none"; // もっと見るボタンを非表示
    closeMoreButton.style.display = "block"; // 閉じるボタンを表示
  
    isProcessing = false; // 処理中フラグを解除
  });
  
  // 閉じるボタンのクリックイベント
  closeMoreButton.addEventListener("click", function () {
    if (isProcessing) return; // 処理中はクリックを無効化
  
    isProcessing = true; // 処理中フラグを立てる
  
    for (let i = visibleAnnouncements; i < announcements.length; i++) {
      announcements[i].style.display = "none"; // 5つ目以降のお知らせを非表示
    }
  
    loadMoreButton.style.display = "block"; // もっと見るボタンを表示
    closeMoreButton.style.display = "none"; // 閉じるボタンを非表示
  
    isProcessing = false; // 処理中フラグを解除
  });



  
