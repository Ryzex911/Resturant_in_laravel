<!-- Navbar.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Navbar and Mobile Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 50;
            background: linear-gradient(to right, #3b2f2f, #6d4c41, #a1887f);

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
            color: #fceabb;
        }

        .login-btn {
            margin-left: auto;
            background-color: #5c4540;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-btn:hover {
            background-color: #8d6e63;
            transform: scale(1.05);
            text-decoration: none;
        }

        #burger {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #burger svg {
            width: 28px;
            height: 28px;
            stroke: #fceabb;
        }

        #mobileMenu {
            display: none;
            position: fixed;
            top: 64px;
            left: 0;
            width: 30%;
            height: 100%;
            background: transparent linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(44, 40, 40));
            backdrop-filter: blur(10px);
            padding: 1rem 1.5rem;
            color: white;
            z-index: 40;
        }

        #mobileMenu ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #mobileMenu li a {
            text-decoration: none;
            font-size: 40px;
            color: white;
        }

        #mobileMenu li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav>
    <button id="burger">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    <div class="brand">Syrian Delight</div>

    <a href="/login" class="login-btn">Login</a>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/mission">Our Mission</a></li>
        <li><a href="/locations">Locations{soon}</a></li>
    </ul>
</div>

<!-- Scripts -->
<script>
    // Toggle mobile menu
    document.getElementById('burger').addEventListener('click', () => {
        const menu = document.getElementById('mobileMenu');
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    });
</script>

</body>
</html>
