<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Menu Item</title>
    <style>
        /* Styling for the edit form */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f0f0f0, #d9d9d9); /* Light gradient for the body */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 70px; /* Add space to avoid navbar */
        }

        .form-container {
            background: linear-gradient(to right, #d4c2a1, #a59c81, #7f7154); /* Softer gradient */
            padding: 15px;  /* Reduced padding */
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 130%;
            max-width: 400px; /* Further reduce form container width */
            transition: all 0.3s ease;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
            font-size: 1.5rem; /* Smaller heading */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #ffffff;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;  /* Reduced padding */
            margin-bottom: 15px;  /* Reduced margin */
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;  /* Smaller font size */
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #5c504b;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #5c504b;
            color: white;
            border: none;
            font-size: 14px;  /* Smaller button text */
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #004d40;
        }


        /* Image Styling */
        .image-preview {
            width: 80px;  /* Smaller size */
            height: auto;
            margin-top: 10px;
            margin-bottom: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
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
<div class="form-container">
    <div style="position: absolute; top: 20px; right: 20px;">
        <a href="{{ route('admin') }}" class="btn-contact-messages">🔙 Back to Admin Panel</a>
    </div>
    <h1>Edit Menu Item</h1>
    <form method="POST" action="{{ route('menu.update', $menu) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="gericht_naam">Dish Name</label>
        <input type="text" name="gericht_naam" id="gericht_naam" value="{{ $menu->gericht_naam }}" required>

        <label for="prijs">Price (€)</label>
        <input type="number" name="prijs" id="prijs" value="{{ $menu->prijs }}" step="0.01" min="0" required>

        <label for="beschrijving">Description</label>
        <textarea name="beschrijving" id="beschrijving" rows="4" required>{{ $menu->beschrijving }}</textarea>

        <label for="categorie">Category</label>
        <select name="categorie" id="categorie" required>
            <option value="Voorgerecht" {{ $menu->categorie == 'Voorgerecht' ? 'selected' : '' }}>Starter</option>
            <option value="Hoofdgerecht" {{ $menu->categorie == 'Hoofdgerecht' ? 'selected' : '' }}>Main Course</option>
            <option value="Nagerecht" {{ $menu->categorie == 'Nagerecht' ? 'selected' : '' }}>Dessert</option>
            <option value="Drank" {{ $menu->categorie == 'Drank' ? 'selected' : '' }}>Beverage</option>
        </select>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <!-- Image Preview -->
        <img src="{{ asset('storage/' . $menu->image) }}" alt="Current Image" class="image-preview" />

        <button type="submit">Save Changes</button>
    </form>
</div>

</body>
</html>
