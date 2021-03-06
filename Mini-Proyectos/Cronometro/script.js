const stopwatch = document.getElementById('stopwatch');
const playPauseButton = document.getElementById('play-pause');
const secondsSphere = document.getElementById('seconds-sphere');

let stopwatchInverval;
let runningTime = 0;

const playPause = () => {
    const isPaused = !playPauseButton.classList.contains('running');
    if (isPaused) {
        playPauseButton.classList.add('running');
        start();
    } else {
        playPauseButton.classList.remove('running');
        pause();
    }
}

const pause = () => {

}

const start = () => {
    secondsSphere.style.animation = 'rotation 60s linear infinite';
    let startTime = Date.now() - runningTime;
    secondsSphere.style.animationPlayState = 'running';
    stopwatchInverval = setInterval( () => {
        runningTime = Date.now() - startTime;
        stopwatch.textContent = calculateTime(runningTime);
    }, 1000)
}

