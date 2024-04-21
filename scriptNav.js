const trigger = document.querySelectorAll('nav li');
trigger.forEach((menu) => menu.addEventListener('click', toggle));

// JavaScript to handle opening and closing modal
const openModalCalendar = document.getElementById('calendar');
const openModalLocation = document.getElementById('location');
const modalCalendar = document.getElementById('modalCalendar');
const modalLocation = document.getElementById('modalLocation');

const closeModalButton = document.getElementById('closeModalButton');
const backdrop = document.querySelector('.bg-gray-900');
const homeLink = document.getElementById('home');

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
        document.getElementById('home').click();
    }, 300);
}


// Event listeners for opening modals
document.getElementById('calendar').addEventListener('click', () => {
    openModal(document.getElementById('modalCalendar'));
});

document.getElementById('location').addEventListener('click', () => {
    openModal(document.getElementById('modalLocation'));
});

document.getElementById('contact').addEventListener('click', () => {
    openModal(document.getElementById('modalContact'));
});

// Event listener for closing modal
document.getElementById('closeModalCalendar').addEventListener('click', () => {
    closeModal(document.getElementById('modalCalendar'));
});

document.getElementById('closeModalLocation').addEventListener('click', () => {
    closeModal(document.getElementById('modalLocation'));
});

document.getElementById('closeModalContact').addEventListener('click', () => {
    closeModal(document.getElementById('modalContact'));
});

function toggle() {
    trigger.forEach((item) => item != this ? item.classList.remove('active') : null);

    if (this.classList != 'active') {
        this.classList.toggle('active');
    }
}

//For calendar purpose
function redirectToGoogleCalendar() {
    // Constructing the URL for Google Calendar
    var url = 'https://www.addevent.com/event/qy20775355+google';

    // Open Google Calendar in a new tab
    window.open(url, '_blank');
}

function redirectToAppleCalendar() {
    // Constructing the URL for Google Calendar
    var url = 'https://www.addevent.com/event/qy20775355+apple';

    // Open Google Calendar in a new tab
    window.open(url, '_blank');
}

//For Location purpose
document.getElementById('directionGMaps').addEventListener('click', function() {
    // Replace the latitude and longitude with the desired destination coordinates
    // var destination = "5.402807068654028, 100.3185499562271";
    // Construct the Google Maps URL for directions
    // var mapsUrl = "https://www.google.com/maps/dir/?api=1&destination=" + destination;
    var gmapsUrl = "https://maps.app.goo.gl/FJSXhCwiafiNAeRZ9";

    // Open the URL in a new tab/window
    window.open(gmapsUrl, '_blank');
});

document.getElementById('directionAMaps').addEventListener('click', function() {
    // var latitude = "5.402807068654028"; 
    // var longitude = "100.3185499562271"; 

    // Construct the Apple Maps URL for directions
    // var mapsUrl = "https://maps.apple.com/?q=" + latitude + "," + longitude;
    var mapsUrl = "https://shorturl.at/fyEY2";

    // Open the URL in a new tab/window
    window.open(mapsUrl, '_blank');
});

document.getElementById('directionWaze').addEventListener('click', function() {
    // var latitude = "5.402807068654028";
    // var longitude = "100.3185499562271";
    wazeUrl = "https://ul.waze.com/ul?preview_venue_id=65732662.657457692.5123689&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location";

    // Construct the Waze URL for directions
    // var wazeUrl = "https://www.waze.com/ul?ll=" + latitude + "," + longitude + "&navigate=yes";

    // Open the URL in a new tab/window
    window.open(wazeUrl, '_blank');
});
