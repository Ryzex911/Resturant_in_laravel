<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Messages | Syrian Delight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7fafc;
            color: #1a202c;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #3b2f2f;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        /* Flip Card Styles */
        .flip-card {
            background-color: transparent;
            width: 250px;
            height: 350px;
            perspective: 1000px;
            font-family: sans-serif;
            margin: 0 auto;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border: 1px solid coral;
            border-radius: 1rem;
        }

        .flip-card-front {
            background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%, rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
            color: coral;
            padding: 20px;
        }

        .flip-card-back {
            background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%, bisque 40%, rgb(255, 185, 160) 78%);
            color: white;
            transform: rotateY(180deg);
            padding: 20px;
        }

        .flip-card .title {
            font-size: 1.5em;
            font-weight: 900;
            text-align: center;
            margin: 0;
        }

        .flip-card .content {
            font-size: 1rem;
            color: #333;
        }

        .flip-card .message-date {
            font-size: 0.9rem;
            color: #ddd;
        }
        .btn-contact-messages {
            padding: 10px 16px;
            border-radius: 8px;
            background-color: #388e3c; /* green */
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn-contact-messages:hover {
            background-color: #2e7d32;
        }
    </style>
</head>
<body>
<div style="position: absolute; top: 20px; right: 20px;">
    <a href="{{ route('admin') }}" class="btn-contact-messages">🔙 Back to Admin Panel</a>
</div>
<div class="container">
    <h1>Contact Messages</h1>

    @if($messages->isEmpty())
        <p class="text-center text-gray-600">No messages found.</p>
    @else
        <div class="grid">
            @foreach($messages as $message)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Front of the card -->
                        <div class="flip-card-front">
                            <p class="title">{{ $message->name }}</p>
                            <p class="content">{{ $message->email }}</p>
                        </div>
                        <!-- Back of the card -->
                        <div class="flip-card-back">
                            <p class="title">Message</p>
                            <p class="content">{{ $message->message }}</p>
                            <p class="message-date">{{ $message->created_at->format('d-m-Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>
