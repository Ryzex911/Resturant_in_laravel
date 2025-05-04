<!-- MainPage.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Syrian Delight</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7fafc;
            color: #1a202c;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            padding-top: 64px;
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .active-slide {
            opacity: 1;
            z-index: 10;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(75%);
        }

        .slide-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            padding: 0 1rem;
        }

        .slide-text h1 {
            font-size: 2.5rem;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
        }

        .slide-text p {
            font-size: 1.1rem;
            margin-top: 1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 768px) {
            .slide-text h1 {
                font-size: 3rem;
            }

            .slide-text p {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    @include('menu.navbar');
    @include('menu.logincheck');
<!-- Slideshow -->
<div class="hero">
    <div class="slide active-slide">
        <img src="/images/fine-dining-1.jpg" alt="Slide 1" />
        <div class="slide-text">
            <h1>Welcome to Syrian Delight</h1>
            <p>Fine Syrian dining made with love and tradition.</p>
        </div>
    </div>
    <div class="slide">
        <img src="/images/fine-dining-2.jpg" alt="Slide 2" />
        <div class="slide-text">
            <h1>Authentic Flavors</h1>
            <p>Every dish tells a story from the heart of Syria.</p>
        </div>
    </div>
    <div class="slide">
        <img src="/images/fine-dining-3.jpg" alt="Slide 3" />
        <div class="slide-text">
            <h1>Exquisite Ambiance</h1>
            <p>Experience elegant dining and warm hospitality.</p>
        </div>
    </div>
</div>

<!-- Scripts for Slideshow -->
<script>
    // Slideshow logic
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active-slide');
            if (i === index) slide.classList.add('active-slide');
        });
    }

    setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }, 5000);
</script>

</body>
</html>
