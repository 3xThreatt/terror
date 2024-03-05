<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terror</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-color: black; /* Set a background color */
        }

        #header {
            background: url('cover.jpg') center/cover; /* Placeholder texture */
            padding: 20px; /* Increased padding */
            text-align: center;
            font-size: 48px; /* Increased font size */
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            border: 2px solid black; /* Black border */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for 3D effect */
            color: white;
        }

        #header img {
            height: 40px;
            margin-right: 10px;
        }

        #abomination {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 3px;
            animation: rotate 20s linear infinite;
            z-index: 2; /* Adjust z-index to be below the header */
        }

        .trashy-animation {
            animation: blink 1s ease infinite;
            color: #ff0000;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }

        .slideshow {
        overflow: hidden;
        width: 100%;
        height: 400px;
        position: relative;
        opacity: 0.25;
            z-index: 1; /* Ensure slideshow is below header */
        }

        .slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            animation: rotate 20s linear infinite;
            z-index: 1;
        }

        .slide:nth-child(1) {
            display: block;
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            animation-delay: 5s;
        }

        .slide:nth-child(3) {
            animation-delay: 10s;
        }

        .slide:nth-child(4) {
            animation-delay: 15s;
        }

        .slide:nth-child(5) {
            animation-delay: 20s;
        }

        /* Add more slide styles as needed */

        @keyframes rotate {
            0%, 100% {
                opacity: 0;
            }
            5%, 95% {
                opacity: 1;
            }
            25%, 75% {
                opacity: 0;
            }
            30%, 70% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }

        .btc-counter {
            position: fixed;
            bottom: 80px; /* Increased distance from the bottom */
            right: 20px; /* Moved to the right side */
            font-size: 24px;
            font-weight: bold;
            color: #ffcc00;
            background-color: black;
            padding: 10px;
            border: 2px solid black;
            z-index: 2; /* Ensure Bitcoin miner is above slideshow */
        }

        #background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            animation: strobe 1s infinite;
        }

        @keyframes strobe {
            0% {
                background-color: rgb(255, 0, 0);
            }
            25% {
                background-color: rgb(0, 255, 0);
            }
            50% {
                background-color: rgb(0, 0, 255);
            }
            75% {
                background-color: rgb(255, 255, 0);
            }
            100% {
                background-color: rgb(255, 0, 255);
            }
        }

        /* Footer Styles */
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #3498db; /* Blue color */
            color: white;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            border-top: 2px solid #2980b9; /* Darker blue border */
            box-shadow: 0px -5px 15px 0px #000000; /* Blue bevel shadow */
            z-index: 1; /* Ensure footer is below other elements */
        }

        .marquee {
            overflow: hidden;
            white-space: nowrap;
            animation: marquee 5s linear infinite; /* Increased speed of travel */
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        /* Jump Scare Image Styles */
        #jumpScare {
            position: fixed;
            bottom: 150px; /* Increased distance from the bottom */
            left: 20px;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            width: 500px; /* Increased width */
            height: 500px; /* Increased height */
            z-index: 2; /* Ensure jump scare is above footer */
        }

        /* Right Cube Slider */
        #cubeSlider {
            position: fixed;
            bottom: 150px; /* Increased distance from the bottom */
            right: 20px; /* Moved to the right side */
            width: 300px; /* Adjusted width */
            height: 300px; /* Adjusted height */
            perspective: 1000px;
            z-index: 2; /* Ensure cube slider is above footer */
        }

        .cube {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transform: rotateY(30deg);
            animation: rotateCube 20s linear infinite; /* Rotating animation */
            transition: transform 1s ease; /* Smooth transition for cube rotation */
        }

        .face {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #00ff00; /* Green color */
            border: 1px solid black;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .face:nth-child(2) {
            background-color: #ff0000; /* Red color */
        }
        /* ... (Your existing styles) ... */

        /* Cookie Disclaimer Pop-up Styles */
        .popup {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 300px;
            padding: 10px;
            background-color: #fff;
            border: 2px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 9999;
            transform: scale(1);
            transition: transform 0.3s ease; /* Added transition for size change */
        }

        .popup p {
            margin-bottom: 10px;
        }

        .popup button {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
        }
        .popup.accepted {
        transform: scale(1.1); /* Adjust the scale factor for the accepted state */
    }


        /* ... (Rest of the styles remain the same) ... */
    </style>
</head>
<body>
    <div id="background"></div>

        <div id="cookieDisclaimer" class="popup">
        <p>This website may use cookies to enhance user experience. By using this site, you agree to our use of cookies.</p>
        <div>
            <button>I Accept</button>
            <button>I Accept</button>
        </div>
    </div>
    <div id="header">
        <img src="logo.jpg" alt="Logo" width="200px" height="600px">
        Welcome to Jamey's Website. Please Enjoy!
    </div>

    <div id="abomination" class="trashy-animation" style="opacity: 0.25">someone help</div>

    <div class="slideshow">

        <img src="slide1.png" alt="Trashy Image 1" class="slide" style="display: block; animation-delay: 1s; animation-duration: 40s;">
        <img src="slide2.jpg" alt="Trashy Image 2" class="slide" style="animation-delay: 2s; animation-duration: 40s;">
        <img src="slide3.jpg" alt="Trashy Image 3" class="slide" style="animation-delay: 3s; animation-duration: 40s;">
        <!-- Add more images as needed -->
    </div>

    <p style="font-size: 24px; position: relative; z-index: 2;">More random text with a larger font size!</p>

    <!-- Jump Scare Image -->
    <img src="jump.jpg" alt="Jump Scare Image" id="jumpScare">

    <!-- Right Cube Slider -->
    <div id="cubeSlider">
        <div class="cube">
            <div class="face" style="transform: rotateY(90deg) translateZ(150px);"><img src="happy.jpg" width="300px" height="300px"></div>
            <div class="face" style="transform: rotateY(180deg) translateZ(150px);">Face 3</div>
            <div class="face" style="transform: rotateY(270deg) translateZ(150px);"><img src="sad.jpg" width="300px" height="300px"></div>
            <div class="face" style="transform: rotateX(90deg) translateZ(150px);">Face 5</div>
            <div class="face" style="transform: rotateX(-90deg) translateZ(150px);">Face 6</div>
        </div>
    </div>

    <div id="footer">
        <div class="marquee">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>

    <div class="btc-counter" id="btcCounter">Bitcoin Mined: <span id="btcValue">0</span> BTC</div>
        <p style=" color: white; align-content: center;"> than k you fo r giving fre e comp ut er resourc es</p>
    <script>
        window.onload = () => new Audio('bg.mp3').play().loop = true;

        // Trashy JavaScript animations
        setInterval(() => {
            document.getElementById('abomination').classList.toggle('trashy-animation');
        }, 1000);

        // Play sound when image comes into view
        const sound = document.getElementById('sound');
        const slides = document.querySelectorAll('.slide');

        slides.forEach((slide, index) => {
            slide.addEventListener('animationiteration', () => {
                if (slide.style.transform === 'translate(-25%, -50%) rotateX(360deg) rotateY(360deg) rotateZ(0deg)') {
                    sound.play();
                }
            });
            slide.style.animationDelay = `${1 + index * 0.5}s`; // Adjust delay for each image
        });

        // Bitcoin Mined Counter
        let btcValue = 0;
        const btcValueSpan = document.getElementById('btcValue');

        setInterval(() => {
            btcValue += 0.0001; // Increment BTC value (Adjust as needed)
            btcValueSpan.textContent = btcValue.toFixed(4);
        }, 500);

        // Jump Scare Image
        const jumpScare = document.getElementById('jumpScare');
        
        setInterval(() => {
            const randomOpacity = Math.random();
            new Audio('boom.mp3').play()
            jumpScare.style.opacity = randomOpacity;
            if (randomOpacity > 0.4) {
                setTimeout(() => {
                }, 2000);
            }
        }, 5000); // Adjust the interval for the jump scare
        // Cube Rotation Animation
        const cube = document.querySelector('.cube');

        setInterval(() => {
            cube.style.transform = `rotateY(${Math.random() * 360}deg)`;
        }, 2000); // Adjust the interval for cube rotation
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slide');
        let currentSlideIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function rotateSlides() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex);
        }

        setInterval(rotateSlides, 5000); // Adjust the interval for slide rotation (5000 milliseconds = 5 seconds)
    });
</script>
<head>
  <!-- Other head content -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

</body>
</html>
