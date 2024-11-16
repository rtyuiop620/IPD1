// Select all video elements and progress bars
const videos = document.querySelectorAll('.video');
const progressBars = document.querySelectorAll('.progress');
const percentageElements = document.querySelectorAll('[id^="percentage"]');
const timeLeftElements = document.querySelectorAll('[id^="time-left"]');

// Initialize video progress from localStorage if available
window.onload = function() {
    videos.forEach((video, index) => {
        const savedProgress = localStorage.getItem(`video${index + 1}-progress`);
        if (savedProgress) {
            updateProgress(index, savedProgress); // Restore progress if available
        }
    });
};

// Event listener to track progress of each video
videos.forEach((video, index) => {
    video.addEventListener('timeupdate', () => {
        updateVideoProgress(index, video);
    });
});

// Update progress for a video
function updateVideoProgress(index, video) {
    const currentTime = video.currentTime;
    const duration = video.duration;

    // Calculate percentage watched
    const percentageWatched = (currentTime / duration) * 100;
    const timeLeft = duration - currentTime;

    // Update progress bar width and text
    updateProgress(index, percentageWatched, timeLeft);
    
    // Save progress to localStorage
    localStorage.setItem(`video${index + 1}-progress`, percentageWatched);
}

// Update the progress bar and text elements
function updateProgress(index, percentageWatched, timeLeft = null) {
    const progressBar = progressBars[index];
    const percentageElement = percentageElements[index];
    const timeLeftElement = timeLeftElements[index];

    // Set progress bar width
    progressBar.style.width = percentageWatched + '%';
    
    // Update percentage text
    percentageElement.textContent = Math.round(percentageWatched) + '%';
    
    // Update time left text
    if (timeLeft !== null) {
        const minutesLeft = Math.floor(timeLeft / 60);
        const secondsLeft = Math.floor(timeLeft % 60);
        timeLeftElement.textContent = `Time Left: ${minutesLeft}:${secondsLeft < 10 ? "0" + secondsLeft : secondsLeft}`;
    }
}
