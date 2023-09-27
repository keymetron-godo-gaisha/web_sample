





document.addEventListener('DOMContentLoaded', function () {
    const sliderContainer = document.querySelector('.products_index_detail');
    const sliderItems = document.querySelectorAll('.products_detail');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    let currentIndex = 0;
    const itemWidth = sliderItems[0].offsetWidth; // 商品詳細の幅を取得
    const displayCount = 4; // 常に表示する商品詳細の数

    // 最初の4つの商品詳細を表示
    for (let i = 0; i < displayCount; i++) {
        sliderItems[i].style.display = 'block';
    }

    // 次へボタンのクリックイベントを処理
    nextButton.addEventListener('click', () => {
        if (currentIndex < sliderItems.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    // 前へボタンのクリックイベントを処理
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // スライダーの表示を更新する関数
    function updateSlider() {
        const newPosition = -currentIndex * itemWidth;
        sliderContainer.style.transform = `translateX(${newPosition}px)`;

        // 商品詳細の表示を制御
        for (let i = 0; i < sliderItems.length; i++) {
            if (i >= currentIndex && i < currentIndex + displayCount) {
                sliderItems[i].style.display = 'block'; // 表示
            } else {
                sliderItems[i].style.display = 'none'; // 非表示
            }
        }

        // スライドが最初または最後の項目に達した場合にボタンを無効化
        if (currentIndex === 0) {
            prevButton.disabled = true;
        } else {
            prevButton.disabled = false;
        }

        if (currentIndex === sliderItems.length - 1) {
            nextButton.disabled = true;
        } else {
            nextButton.disabled = false;
        }
    }
});





// document.addEventListener('DOMContentLoaded', function () {
//     const sliderContainer = document.querySelector('.products_index_detail');
//     const sliderItems = document.querySelectorAll('.products_detail');
//     const prevButton = document.getElementById('prev-button');
//     const nextButton = document.getElementById('next-button');
//     let currentIndex = 0;
//     const itemWidth = sliderItems[0].offsetWidth; // 商品詳細の幅を取得
//     const displayCount = 1; // スマートフォンの場合は常に1つの商品詳細を表示

//     // 最初の1つの商品詳細を表示
//     sliderItems[0].style.display = 'block';

//     // 次へボタンのクリックイベントを処理
//     nextButton.addEventListener('click', () => {
//         if (currentIndex < sliderItems.length - displayCount) {
//             currentIndex++;
//             updateSlider();
//         }
//     });

//     // 前へボタンのクリックイベントを処理
//     prevButton.addEventListener('click', () => {
//         if (currentIndex > 0) {
//             currentIndex--;
//             updateSlider();
//         }
//     });

//     // スライダーの表示を更新する関数
//     function updateSlider() {
//         const newPosition = -currentIndex * itemWidth;
//         sliderContainer.style.transform = `translateX(${newPosition}px)`;

//         // 商品詳細の表示を制御
//         for (let i = 0; i < sliderItems.length; i++) {
//             if (i >= currentIndex && i < currentIndex + displayCount) {
//                 sliderItems[i].style.display = 'block'; // 表示
//             } else {
//                 sliderItems[i].style.display = 'none'; // 非表示
//             }
//         }

//         // スライドが最初または最後の項目に達した場合にボタンを無効化
//         if (currentIndex === 0) {
//             prevButton.disabled = true;
//         } else {
//             prevButton.disabled = false;
//         }

//         if (currentIndex === sliderItems.length - displayCount) {
//             nextButton.disabled = true;
//         } else {
//             nextButton.disabled = false;
//         }
//     }
// });