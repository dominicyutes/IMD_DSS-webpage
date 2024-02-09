<script>
let macro_SubParameter;
let resolveFunction;
let pauseFlag = false;
let countdownInterval;

let Light_l05_;

let playerTextElement = document.getElementById("playerText");
let countingElement = document.getElementById("counting");

function startCountdown() {
    if (playerTextElement.innerHTML.trim() !== "") {
        let count = 5;

        countdownInterval = setInterval(function() {
            if (!pauseFlag) {
                countingElement.innerHTML = count;

                if (count === 0) {
                    clearInterval(countdownInterval);
                    console.log("count = 0;");
                } else {
                    count--;
                    console.log(count, "count --");
                }
            }
        }, 1000);
    }
}

function pauseCountdown() {
    pauseFlag = true;
}

function resumeCountdown() {
    pauseFlag = false;
}
async function playMacro(macroGroupName) {
    let macro = savedMacro.find(x => x.macroGroupName === macroGroupName);

    if (macro) {
        clearInterval(countdownInterval);
        for (let macroDetails of macro.listOfMacro) {
            macro_SubParameter = macroDetails.mac_sub_parameter;
            document.getElementById("macroDetails").style.display = "block";

            if (subParametersList.some(subParam => subParam.name === macro_SubParameter)) {
                if (macro_SubParameter === "Last 00-05 min") {
                    await new Promise(resolve => {
                        resolveFunction = resolve;
                        Light_l05_ = setTimeout(function() {
                            if (!pauseFlag) {
                                map.addLayer(mywmsIITM);
                                playerText.innerHTML = 'Last 00-05 min';
                                startCountdown();
                            }
                        });

                        setTimeout(function() {
                            if (!pauseFlag) {
                                map.removeLayer(mywmsIITM);
                                clearTimeout(Light_l05_);
                                resolve();
                                playerText.innerHTML = '';
                                startCountdown();
                            }
                            console.log("1-Last 00-05 min");
                        }, 6000);
                    });
                }
            }

            document.getElementById("macroDetails").style.display = "none";

        }
    }

}


document.querySelector('.playBtnClas').addEventListener('click', () => {
    resumeCountdown();
});

document.querySelector('.pauseBtnClas').addEventListener('click', () => {
    pauseCountdown();
});
when pauseCountdown();
is triggered setTimeout is paused and when resumeCountdown();
is triggered setTimeout is not working properly
</script>