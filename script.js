function updateCountdown() {
    // Set the date we're counting down to
    var countDownDate = new Date("April 21, 2024 00:00:00").getTime();

    // Get the current date and time
    var now = new Date().getTime();

    // Find the distance between now and the countdown date
    var distance = countDownDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result
    document.getElementById("days").innerHTML = "<span class='countdown-number'>" + days + "</span><br><span class='countdown-text'>days</span>";
    document.getElementById("hours").innerHTML = "<span class='countdown-number'>" + hours + "</span><br><span class='countdown-text'>hours</span>";
    document.getElementById("minutes").innerHTML = "<span class='countdown-number'>" + minutes + "</span><br><span class='countdown-text'>minutes</span>";
    document.getElementById("seconds").innerHTML = "<span class='countdown-number'>" + seconds + "</span><br><span class='countdown-text'>seconds</span>";

    // If the countdown is over, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "The event is over!";
    }
}

// Initial call to update countdown when page loads
updateCountdown();

// Update the countdown every 1 second
var x = setInterval(updateCountdown, 1000);

// FOR TRANSITIONNNN
var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // Trigger when 50% of the element is visible
};

// Function to observe elements
function observeElements() {
    for (var i = 1; i <= 11; i++) {
        var target = document.getElementById('content-' + i);
        if (target && !target.classList.contains('active')) {
            observer.observe(target);
        }
    }
}

// Create IntersectionObserver
var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        } else {
            entry.target.classList.remove('active');
        }
    });
}, options);

// Initial observation when the page loads
observeElements();

// Track scroll direction
var lastScrollTop = 0;
window.addEventListener('scroll', function () {
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll > lastScrollTop) {
        // Scrolling down
        observeElements(); // Reobserve elements to trigger transition
    } else {
        // Scrolling up
        // No need to do anything here, as the IntersectionObserver will handle removing 'active' class
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});



// TESTING
const modalUcapan = document.getElementById('modalUcapan');
const modalRSVP = document.getElementById('modalRSVP');

// Function to open modal
function openModal(modal) {
    modal.classList.remove('hidden');
    setTimeout(() => {
        document.querySelector('.bg-gray-900').classList.remove('opacity-0');
        modal.querySelector('.bg-white').classList.remove('translate-y-full');
    }, 50);
}

// Function to close modal
function closeModal(modal) {
    const backdrop = document.querySelector('.bg-gray-900');
    const content = modal.querySelector('.bg-white');

    backdrop.classList.add('opacity-0');
    content.classList.add('translate-y-full');
    setTimeout(() => {
        modal.classList.add('hidden');
        // document.getElementById('home').click();
    }, 300);
}

// Event listeners for opening modals
document.getElementById('ucapan').addEventListener('click', () => {
    openModal(document.getElementById('modalUcapan'));
});
document.getElementById('rsvp').addEventListener('click', () => {
    openModal(document.getElementById('modalRSVP'));
});

document.getElementById('closeModalUcapan').addEventListener('click', () => {
    closeModal(document.getElementById('modalUcapan'));
});

document.getElementById('closeModalRSVP').addEventListener('click', () => {
    closeModal(document.getElementById('modalRSVP'));
});