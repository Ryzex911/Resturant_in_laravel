<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ons Menu | Syrian Delight</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        /* Reuse nav styles from the other page */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7fafc;
            color: #1a202c;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            padding: 120px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 300px;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.2);
        }

        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu-card-content {
            padding: 20px;
        }

        .menu-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #5c504b;
            display: flex; /* Use flexbox to align elements in a row */
            justify-content: space-between; /* Space between name and category */
            align-items: center; /* Align vertically */
        }

        .dish-name {
            font-weight: bold; /* You can add more styling for the dish name */
        }

        .category {
            font-size: 1rem;
            color: #888; /* You can style the category differently */
            margin-left: 10px; /* Space between name and category */
        }

        .menu-card p {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 10px;
        }

        .price {
            font-weight: bold;
            color: #a67c52;
            margin-bottom: 15px;
        }

        .cta-button {
            padding: 12px 20px;
            background-color: #a67c52;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #8c6845;
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
@include('menu.navbar')

<!-- Menu Cards -->
<div class="content">
    @foreach($items as $item)
        <div class="menu-card">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->gericht_naam }}">
            <div class="menu-card-content">
                <h3>
                    <span class="dish-name">{{ $item->gericht_naam }}</span>
                    <span class="category">{{ $item->categorie }}</span>
                </h3>
                <p>{{ $item->beschrijving }}</p>
                <p class="price">€{{ $item->prijs }}</p>
                <button class="cta-button">Order Now</button>
            </div>
        </div>
    @endforeach
</div>

<!-- Footer -->
<footer>
    © 2025 Syrian Delight. All rights reserved.
</footer>

</body>
</html>
