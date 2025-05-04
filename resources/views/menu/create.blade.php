<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Add New Dish</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f0f0f0, #d9d9d9); /* Light gradient for the body */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }



        .page-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 60px);
            padding: 20px;
        }

        .form-container {
            background: linear-gradient(to right, #d4c2a1, #a59c81, #7f7154); /* Softer gradient */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Reduced width for a more compact form */
            width: 100%;
            color: white;
            transition: all 0.3s ease;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #ffffff;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
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
            font-size: 14px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #403933;
        }

        /* Image Preview */
        #preview {
            max-width: 100%;
            margin-top: 10px;
            display: none;
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

<!-- Navbar -->


<!-- Form Wrapper -->
<div class="page-wrapper">
    <div style="position: absolute; top: 20px; right: 20px;">
        <a href="{{ route('admin') }}" class="btn-contact-messages">🔙 Back to Admin Panel</a>
    </div>

    <div class="form-container">
        <h1>Add New Dish</h1>
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="dishName">Dish Name</label>
            <input type="text" id="dishName" name="gericht_naam" required>

            <label for="description">Description</label>
            <textarea id="description" name="beschrijving" rows="4" required></textarea>

            <label for="price">Price (€)</label>
            <input type="number" id="price" name="prijs" step="0.01" min="0" required>

            <label for="category">Category</label>
            <select id="category" name="categorie" required>
                <option value="">-- Select a category --</option>
                <option value="Starter">Starter</option>
                <option value="Main Course">Main Course</option>
                <option value="Dessert">Dessert</option>
                <option value="Drink">Drink</option>
            </select>

            <label for="image">Image</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <img id="preview" />

            <button type="submit">Save</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>
