document.addEventListener('DOMContentLoaded', function() {
    var confirmButton = document.getElementById('confirmButton');
    var backButton = document.getElementById('backButton');
    var realSubmitButton = document.getElementById('realSubmitButton');

    // 最初に実際の送信ボタンを非表示にする
    if (realSubmitButton) {
        realSubmitButton.style.display = 'none';
    }

    confirmButton.addEventListener('click', function() {
        toggleFields(true);
    });

    backButton.addEventListener('click', function() {
        toggleFields(false);
    });

    function toggleFields(isConfirm) {
        // .wrap 内のフィールドをトグルする
        document.querySelectorAll('.wrap').forEach(function(wrapper) {
            var input = wrapper.querySelector('.contents input, .contents select');
            var confirmField = wrapper.querySelector('.confirm-field');

            if (input) {
                if (isConfirm) {
                    confirmField.textContent = input.value;
                    input.style.display = 'none';
                    confirmField.style.display = 'inline';
                } else {
                    input.style.display = 'inline';
                    confirmField.style.display = 'none';
                }
            }
        });

        // .wpcf7-form-control-wrap の表示/非表示を制御、data-name="textarea" を除外
        document.querySelectorAll('.wpcf7-form-control-wrap:not([data-name="textarea"])').forEach(function(element) {
            if (isConfirm) {
                element.style.display = 'none'; // 確認画面では非表示
            } else {
                element.style.display = 'block'; // 戻るボタンを押すと表示
            }
        });

        // ボタンの表示/非表示を制御
        backButton.style.display = isConfirm ? 'inline-block' : 'none';
        confirmButton.style.display = isConfirm ? 'none' : 'inline-block';
        realSubmitButton.style.display = isConfirm ? 'inline-block' : 'none';
    }
});

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('wpcf7mailsent', function(event) {
        var applicationForm = document.querySelector('.form');
        if (applicationForm) {
            applicationForm.style.display = 'none';
        }

        var nameValue = document.getElementById('name') ? document.getElementById('name').value : 'Unknown';

        var customerNameElement = document.getElementById('customerName');
        if (customerNameElement) {
            customerNameElement.textContent = nameValue;
            document.getElementById('thankYouMessage').style.display = 'flex';

            // カウントダウン処理を追加
            var countdownElement = document.getElementById('countdown');
            var countdownValue = 5; // 5秒カウントダウン
            countdownElement.textContent = countdownValue;

            var countdownInterval = setInterval(function() {
                countdownValue--;
                countdownElement.textContent = countdownValue;

                if (countdownValue <= 0) {
                    clearInterval(countdownInterval);
                    window.location.reload(); // ページを再読み込み
                }
            }, 1000);
        }
    }, false);
});

