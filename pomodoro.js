let timer;
let isRunning = false;
const workTime = 25 * 60;
let currentTime = workTime;

function displayTime(seconds) {
  const mins = Math.floor(seconds / 60);
  const secs = seconds % 60;
  document.getElementById("timer").innerText = `${mins}:${
    secs < 10 ? "0" : ""
  }${secs}`;
}

document.getElementById("start-btn").addEventListener("click", function () {
  if (!isRunning) {
    isRunning = true;
    timer = setInterval(function () {
      currentTime -= 1;
      displayTime(currentTime);
      if (currentTime <= 0) {
        clearInterval(timer);
        alert("Pomodoro complete! Take a break.");
        currentTime = workTime;
        displayTime(currentTime);
      }
    }, 1000);
  }
});

document.getElementById("stop-btn").addEventListener("click", function () {
  isRunning = false;
  clearInterval(timer);
});

document.getElementById("reset-btn").addEventListener("click", function () {
  isRunning = false;
  clearInterval(timer);
  currentTime = workTime;
  displayTime(currentTime);
});
