<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inloggen | Syrian Delight</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7fafc;
            margin: 0;
        }
        .login-form-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 150px auto;
            text-align: center;
        }
        h2 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
            color: #5c504b;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            text-align: left;
            font-weight: bold;
        }
        input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
        }
        button {
            padding: 12px;
            background-color: #a67c52;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #8c6845;
        }
        .error {
            color: red;
            font-size: 0.9rem;
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
<div class="login-form-container">
    <h2>Login to Syrian Delight</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('menu.logincheck') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
    <footer>
        © 2025 Syrian Delight. all rights reserved.
    </footer>
</body>
</html>
