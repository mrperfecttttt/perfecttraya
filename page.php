<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open House Kak Ma</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div style="z-index: 2000; position: fixed">
        <?php include 'navBar.html'; ?>
    </div>

    <section>
        <div class="fullscreen-image"></div>
    </section>

    <!-- Separator -->
    <div class="border-t-2 border-gray-200"></div>

    <div class="content">
        <div class="reveal" id="content-1">
            <img src="img/header.png" class="inset-0 m-auto max-w-full max-h-full w-30 h-30 -mt-5">
        </div>

        <div class="reveal" id="content-2">
            <h1 class="dancing-script-normal text-center mt-5">Dengan seikhlas hati kami</h1>
            <p class="mate-sc-regular mt-3 text-center">Wan Fauzi bin Wan Yusoff</p>
            <p class="mate-sc-regular text-center mt-3">&</p>
            <p class="mate-sc-regular mt-3 text-center">Salmiza binti Mohd Zain</p>
        </div>

        <div class="reveal" id="content-3">
            <p class="dancing-script-normal mt-3 text-center">ingin menjemput anda sekeluarga ke majlis</p>
            <p class="satisfy-regular mt-3 text-center">Rumah Terbuka Raya Aidilfitri</p>
            <p class="satisfy-regular mt-2 text-center">2024</p>
            <p class="dancing-script-normal mt-3 text-center">yang bakal diadakan pada</p>
        </div>
    </div>

    <div class="content-2 -mt-6 ">
        <div class="flex flex-col items-center reveal" id="content-4">
            <svg class="color-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" >
                <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z">
                </path>
            </svg>
            <p class="mate-sc-regular mt-0 text-center">Rabu, 10 April 2024</p>
            <p class="mate-sc-italic -mt-1 text-center">1 Syawal 1445H</p>
        </div>

    </div>

    <div class="content-2 -mt-14">
        <div class="flex flex-col items-center reveal" id="content-5">
            <svg class="color-edit mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                </path>
            </svg>
            <p class="mate-sc-regular mt-0 text-center">9:00 pagi - 6:00 petang</p>
        </div>

    </div>


    <div class="content-2 -mt-14">
        <div class="flex flex-col items-center reveal" id="content-6">
            <svg class="color-edit mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path d="M11 19.9451C6.50005 19.4476 3 15.6326 3 11C3 6.02944 7.02944 2 12 2C16.9706 2 21 6.02944 21 11C21 15.6326 17.5 19.4476 13 19.9451V24H11V19.9451ZM12 18C15.866 18 19 14.866 19 11C19 7.13401 15.866 4 12 4C8.13401 4 5 7.13401 5 11C5 14.866 8.13401 18 12 18Z">
                </path>
            </svg>
            <p class="mate-sc-regular mt-0 text-center">Rumah Kak Ma</p>
            <p class="mate-sc-italic -mt-1 text-center">Kampung Paloh Hilir</p>
        </div>
    </div>

    <div class="countdown">
        <div class="reveal" id="content-7">
            <h1 class="dancing-script-normal text-center mt-4">Countdown Timer</h1>
            <div class="timer" id="timer">
                <div class="unit" id="days"><span class="color-text countdown-number">0</span><br><span class="countdown-text">days</span></div>
                <div class="separator">:</div>
                <div class="unit" id="hours"><span class="color-text countdown-number">0</span><br><span class="countdown-text">hours</span></div>
                <div class="separator">:</div>
                <div class="unit" id="minutes"><span class="color-text countdown-number">0</span><br><span class="countdown-text">minutes</span></div>
                <div class="separator">:</div>
                <div class="unit" id="seconds"><span class="color-text countdown-number">0</span><br><span class="countdown-text">seconds</span></div>
            </div>
        </div>
    </div>

    <div class="rsvp">
        <div class="reveal" id="content-8">
            <h1 class="dancing-script-normal text-center mt-4 mb-2">Pengesahan Kehadiran</h1>
            <div class="alert alert-warning d-flex align-items-center mx-4" role="alert">
                <svg class="color-edit mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                    <path d="M4.00001 20V14C4.00001 9.58172 7.58173 6 12 6C16.4183 6 20 9.58172 20 14V20H21V22H3.00001V20H4.00001ZM6.00001 20H18V14C18 10.6863 15.3137 8 12 8C8.6863 8 6.00001 10.6863 6.00001 14V20ZM11 2H13V5H11V2ZM19.7782 4.80761L21.1924 6.22183L19.0711 8.34315L17.6569 6.92893L19.7782 4.80761ZM2.80762 6.22183L4.22183 4.80761L6.34315 6.92893L4.92894 8.34315L2.80762 6.22183ZM7.00001 14C7.00001 11.2386 9.23858 9 12 9V11C10.3432 11 9.00001 12.3431 9.00001 14H7.00001Z">
                    </path>
                </svg>
                <div class="rsvp-msg mate-sc-regular">
                    Sila sahkan kehadiran anda dengan menekan butang di bawah
                </div>
            </div>
            <a href="#" class="btn-color mt-3 m-3 mb-2 d-flex align-items-center mate-sc-regular" id="rsvp"><span>RSVP</span></i></a>
        </div>
    </div>

    <div class="pantun">
        <div class="reveal" id="content-10">
            <h1 class="dancing-script-normal text-center -mt-7">Bermain mercun sambil menari,</h1>
            <h1 class="dancing-script-normal text-center mt-2">Di dalam gelap menangkap ikan,</h1>
            <h1 class="dancing-script-normal text-center mt-2">Kami menyusun sepuluh jari,</h1>
            <h1 class="dancing-script-normal text-center mt-2">Salah dan silap harap maafkan</h1>
            <img src="img/crown.png" class="m-auto" alt="border-top">
        </div>
        
    </div>

    <div class="ucapan-book">
        <div class="reveal" id="content-9">
            <h1 class="dancing-script-normal text-center -mt-2 mb-2">Ucapan Raya</h1>
            <div class="border-color recept-box">
                <?php include 'display_ucapan.php'; ?>
            </div>
            <a href="#" class="btn-color mt-3 m-3 mb-2 d-flex align-items-center mate-sc-regular" id="ucapan"><span>Ucapan
                    Anda</span></i></a>
            <img src="img/crown.png" class="m-auto" alt="border-top">
            <p class="mate-sc-regular mt-2 text-center">Jangan lupa datang dan memeriahkan</p>
            <p class="mate-sc-regular -mt-0 text-center">majlis rumah terbuka sempena</p>
            <p class="mate-sc-regular -mt-0 mb-10 text-center">Hari Raya Aidilfitri 2024</p>
        </div>
    </div>

    <div class="content">
        <div class="reveal" id="content-11">
            <p class="mate-sc-regular mt-3 text-center">Berminat untuk dapatkan e-card untuk aidilfitri 2024?</p>
            <p class="mate-sc-regular -mt-1 text-center">Tekan pautan di bawah: </p>
            <div class="d-flex justify-center align-items-center">
                <a href="https://wa.link/vmjzow" target="_blank">
                    <svg class="color-edit mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@fiknakstream" target="_blank">
                    <svg class="color-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M16 8.24537V15.5C16 19.0899 13.0899 22 9.5 22C5.91015 22 3 19.0899 3 15.5C3 11.9101 5.91015 9 9.5 9C10.0163 9 10.5185 9.06019 11 9.17393V12.3368C10.5454 12.1208 10.0368 12 9.5 12C7.567 12 6 13.567 6 15.5C6 17.433 7.567 19 9.5 19C11.433 19 13 17.433 13 15.5V2H16C16 4.76142 18.2386 7 21 7V10C19.1081 10 17.3696 9.34328 16 8.24537Z">
                        </path>
                    </svg>
                </a>

            </div>

        </div>
    </div>

    <br><br><br><br><br>

    <!-- MODAL SECTION -->
    <div id="modalUcapan" class="fixed inset-0 flex items-center justify-center hidden transition-opacity duration-300 modal-index">
        <div class="bg-gray-900 opacity-70 absolute inset-0 transition-opacity duration-300"></div>
        <div class="bg-white rounded-t-lg p-6 max-w-lg w-full bottom-0 left-0 right-0 fixed transform translate-y-full transition-transform duration-300">
            <div class="flex justify-end">
                <!-- Close Button -->
                <button id="closeModalUcapan" class="text-gray-700 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="text-center">
                <h2 class="text-lg font-bold mb-2 -mt-6 mate-sc-regular">Ucapan anda</h2>
                <p class=" -my-0 alegreya-bold text-emerald-700">Selamat Hari Raya Aidilfitri 2024</p>
                <p class="alegreya-normal">~21 March 2024~</p>

                <br>
                <form action="ucapan.php" method="POST">
                    <div class="modal-content">
                        <div class="input-container">
                            <div class="input-wrapper">
                                <input name="nameInput" class="delius-regular" type="text" id="nameInput" placeholder=" " required>
                                <label class="delius-regular" for="nameInput">Nama Anda</label>
                            </div>
                            <div class="input-wrapper">
                                <textarea name="wishesInput" class="delius-regular" id="wishesInput" rows="4" cols="50" placeholder=" " required></textarea>
                                <label class="delius-regular" for="wishesInput">Ucapan Anda</label>
                            </div>
                        </div>
                        <button type="submit" name="submitWishesButton" id="submitWishesButton" class="btn-color submit-btn mate-sc-regular">Hantar ucapan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalRSVP" class="fixed inset-0 flex items-center justify-center hidden transition-opacity duration-300 modal-index">
        <div class="bg-gray-900 opacity-70 absolute inset-0 transition-opacity duration-300"></div>
        <div class="bg-white rounded-t-lg p-6 max-w-lg w-full bottom-0 left-0 right-0 fixed transform translate-y-full transition-transform duration-300">
            <div class="flex justify-end">
                <!-- Close Button -->
                <button id="closeModalRSVP" class="text-gray-700 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="text-center">
                <h2 class="text-lg font-bold mb-2 -mt-6 mate-sc-regular">RSVP</h2>
                <p class=" -my-0 alegreya-bold text-emerald-700">Selamat Hari Raya Aidilfitri 2024</p>
                <p class="alegreya-normal">~21 March 2024~</p>

                <br>
                <form action="rsvp.php" method="POST">
                    <div class="modal-content">
                        <div class="input-container-main">
                            <div class="input-wrapper">
                                <input name="RSVP-name" class="delius-regular-normal" type="text" id="RSVP-name" placeholder=" " required></textarea>
                                <label class="delius-regular" for="RSVP-name">Nama Anda</label>
                            </div>
                            <div class="input-wrapper">
                                <input name="RSVP-phone" class="delius-regular-normal" type="text" id="RSVP-phone" placeholder=" " required></textarea>
                                <label class="delius-regular" for="RSVP-phone">Phone Number</label>
                            </div>
                        </div>

                        <!-- Add the question about attendance -->
                        <div class="input-wrapper">
                            <label class="delius-regular-normal" for="attendanceInput">Will you be able to attend?</label><br>
                            <input type="radio" id="yes" name="attendance" value="yes" onclick="showForm()">
                            <label for="yes" class="mt-1 mb-3 mr-3">Yes</label>
                            <input type="radio" id="no" name="attendance" value="no" onclick="hideForm()">
                            <label for="no" class="mt-1 mb-3">No</label><br>
                        </div>

                        <div id="RSVPForm" style="display: none;">

                            <div class="input-container">
                                <div class="input-wrapper">
                                    <input name="RSVP-email" class="delius-regular-normal" type="text" id="RSVP-email" placeholder=" "></textarea>
                                    <label class="delius-regular" for="RSVP-email">Email Address</label>
                                </div>
                                <div class="input-wrapper">
                                    <input name="RSVP-pax" class="delius-regular-normal" type="text" id="RSVP-pax" placeholder=" "></textarea>
                                    <label class="delius-regular" for="RSVP-pax">Number of pax</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submitRSVPButton" id="submitRSVPButton" class="btn-color submit-btn-rsvp mate-sc-regular" disabled>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    // Check if success message is present in URL
    if (isset($_GET['success']) && $_GET['success'] == '1') {
        // Generate JavaScript code to trigger a basic alert
        echo '<script>';
        echo 'alert("Your wishes have been submitted successfully!");';
        echo 'window.location.href = "page.php";'; // Redirect to page.php after clicking OK
        echo '</script>';
    } else if (isset($_GET['success']) && $_GET['success'] == '2') {
        echo '<script>';
        echo 'alert("Your attendance have been submitted successfully!");';
        echo 'window.location.href = "page.php";'; // Redirect to page.php after clicking OK
        echo '</script>';
    }
    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var button = document.querySelector('.modal-button');
            var buttonText = document.querySelector('.scroll-text');
            var buttonWidth = button.offsetWidth;
            var textWidth = buttonText.offsetWidth;
            var animationDuration = (textWidth / buttonWidth) * 10; // Adjust the speed accordingly
            buttonText.style.animationDuration = animationDuration + 's';
        });
    </script>

    <script>
        function showForm() {
            var form = document.getElementById("RSVPForm");
            form.style.display = "block";

            var submitButton = document.getElementById("submitRSVPButton");
            submitButton.disabled = false;
        }

        function hideForm() {
            var form = document.getElementById("RSVPForm");
            form.style.display = "none";

            var submitButton = document.getElementById("submitRSVPButton");
            submitButton.disabled = false;
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var homeLink = document.querySelector('.navbar a[href="#"]');
            if (homeLink) {
                homeLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Scroll to the top of the page.php page
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>


<!-- SOUNDDDDDD -->
    <audio id="backgroundMusic" autoplay loop volume="0.5">
        <source src="suasana.mp3" type="audio/mp3">
    </audio>
</body>

</html>