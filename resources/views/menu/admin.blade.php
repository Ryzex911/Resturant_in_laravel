<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Georgia', serif;
        }

        .btn-add-item {
            @apply inline-block px-4 py-2 rounded-md text-sm font-semibold transition;
            background-color: #bfa46f;
            color: white;
        }

        .btn-add-item:hover {
            background-color: #a0894f;
        }

        .btn-action {
            @apply px-3 py-1 rounded-md text-sm font-semibold border transition;
            border-color: #bfa46f;
            color: #bfa46f;
        }

        .btn-action:hover {
            background-color: #bfa46f;
            color: white;
        }

        .card-shadow {
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .page-container {
            max-width: 7xl;
            margin: 0 auto;
            padding: 6rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3b2f2f;
            margin-bottom: 2rem;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .menu-card {
            background: #fff;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            border: 1px solid #e9e4d4;
        }

        .menu-card img {
            height: 10rem;
            width: 100%;
            object-fit: cover;
            border-bottom: 1px solid #e9e4d4;
        }

        .menu-card-content {
            padding: 1rem;
        }

        .menu-card-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2d2d2d;
        }

        .menu-card-content p {
            font-size: 1rem;
            color: #5c504b;
            margin-bottom: 1rem;
        }

        .menu-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .menu-card-footer span {
            font-size: 1.25rem;
            font-weight: 600;
            color: #388e3c;
        }

        .btn-contact-messages {
            @apply inline-block px-4 py-2 rounded-md text-sm font-semibold transition;
            background-color: #388e3c; /* green */
            color: white;
        }

        .btn-contact-messages:hover {
            background-color: #2e7d32; /* darker green */
        }
    </style>
</head>
@include('menu.navbar');
<body class="bg-[#fefdf9] text-gray-800 min-h-screen">
<!-- Top navbar removed as per your request -->

<!-- Page container -->
<div class="page-container">
    <!-- Add Menu Button -->
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('menu.create') }}" class="btn-add-item">➕ Add New Menu Item</a>

        <a href="{{ route('contactmessages.index') }}" class="btn-contact-messages">📨 View Contact Messages</a>
    </div>

    <div class="section-title">Menu Items</div>

    <!-- Menu Items Grid -->
    <div class="menu-grid">

        @foreach($items as $item)
            <div class="menu-card">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->gericht_naam }}">

                <div class="menu-card-content">
                    <h3>{{ $item->gericht_naam }}</h3>
                    <p class="text-sm italic">{{ $item->beschrijving }}</p>
                </div>

                <div class="menu-card-footer">
                    <span>€{{ number_format($item->prijs, 2, ',', '.') }}</span>

                    <!-- Edit Button -->
                    <form action="{{ route('menu.edit', $item->id) }}" method="GET">
                        <button type="submit" class="btn-action">✏️ Edit</button>
                    </form>

                    <!-- Delete Button -->
                    <form action="{{ route('menu.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action">🗑️ Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
</div>
</body>
</html>
