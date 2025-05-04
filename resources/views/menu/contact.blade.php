<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact | Syrian Delight</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
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

        /* Contact Page Styling */
        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 80px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-header {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: bold;
            color: #3b2f2f;
            margin-bottom: 30px;
        }

        .contact-form {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        .contact-form label {
            display: block;
            font-size: 1rem;
            margin-bottom: 10px;
            color: #5c504b;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .contact-form textarea {
            height: 150px;
            resize: none;
        }

        .contact-form button {
            padding: 12px 20px;
            background-color: #a67c52;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #8c6845;
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            color: #999;
            margin-top: 50px;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            margin-top: 20px;
            width: 100%;
            max-width: 600px;
            text-align: center;
            font-size: 1rem;
        }

    </style>
</head>
<body>
    @include('menu.navbar')
<!-- Contact Page Content -->
<div class="contact-container">
    <div class="contact-header">
        Contacteer ons
    </div>

    <div class="contact-form">
        <!-- Contact Form -->
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Fill in your name here">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required placeholder="Fill in your email address here">

            <label for="message">Bericht</label>
            <textarea id="message" name="message" required placeholder="write your message here..."></textarea>

            <button type="submit">Send Message</button>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
    © 2025 Syrian Delight. all rights reserved.
</footer>

</body>
</html>
