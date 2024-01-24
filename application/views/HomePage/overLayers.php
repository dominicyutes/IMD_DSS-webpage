<script>
let countdownInterval;
let isCountdownPaused = false;
let count = 7;

function startCountdown() {
    if (playerTextElement.innerHTML.trim() !== "") {
        countdownInterval = setInterval(function() {
            if (!isCountdownPaused) {
                countingElement.innerHTML = count;

                if (count === 0) {
                    clearInterval(countdownInterval);
                } else {
                    count--;
                }
            }
        }, 1000);
    }
}

// Pause button click event
const pauseButton = document.querySelector('.pauseBtnClas');
pauseButton.addEventListener('click', function() {
    isCountdownPaused = true;
});

// Play button click event
const playButton = document.querySelector('.playBtnClas');
playButton.addEventListener('click', function() {
    isCountdownPaused = false;
    startCountdown();
});
</script>