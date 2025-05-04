<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Our Mission | Syrian Delight</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #fdfaf6;
            color: #1a202c;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1604908554084-6c7884b38ad5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 60px;
        }

        .hero h1 {
            font-size: 3rem;
            color: white;
            font-family: 'Playfair Display', serif;
            background-color: rgba(0,0,0,0.6);
            padding: 20px 40px;
            border-radius: 10px;
            animation: fadeInDown 1.2s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content {
            max-width: 900px;
            margin: -40px auto 60px;
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1.2s ease-in;
        }

        .content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #3b2f2f;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #5c504b;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            color: #999;
        }
    </style>
</head>
<body>
    @include('menu.navbar');
<!-- Hero Section -->
<div class="hero">
    <h1>Our Mission</h1>
</div>

<!-- Mission Content -->
<div class="content">
    <h2>Passion, Culture & Flavour</h2>
    <p>
        At Syrian Delight, our mission is to bring people together through the rich heritage of Syrian cuisine.
        We aim to preserve tradition by preparing authentic dishes that tell stories — from our grandmother’s recipes to modern twists.
        Each plate is a celebration of flavor, hospitality, and culture, made with love and served with pride.
        <br><br>
        Whether you're discovering our food for the first time or it's a taste of home, we welcome you with open arms and full plates.
    </p>
</div>

<!-- Footer -->
<footer>
    © 2025 Syrian Delight. All rights reserved.
</footer>

</body>
</html>
