// get session time
var sessionLifetimeInMinutes = <?php echo json_encode(config('session.lifetime')); ?>;
console.log('Session Lifetime:', sessionLifetimeInMinutes);

// lifetime update
function updateCountdown() {
    var countdownElement = document.getElementById('countdown');
    var timeRemaining = sessionLifetimeInMinutes * 60; 
    countdownElement.textContent = 'Time remaining: ' + timeRemaining + ' seconds';

    setInterval(function () {
        timeRemaining--;
        countdownElement.textContent = 'Time remaining: ' + timeRemaining + ' seconds';
    }, 1000);
}

// update DOM
document.addEventListener('DOMContentLoaded', function () {
    updateCountdown();
});
