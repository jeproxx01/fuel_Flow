<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Flow - Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: #1e3a8a;
            font-family: Arial, sans-serif;
            color: white;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 1rem 2rem;
        }

        .navbar-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-center {
            display: flex;
            gap: 2rem;
            margin: 0 1rem;
        }

        .nav-center a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
            white-space: nowrap;
        }

        .nav-center a:hover {
            opacity: 1;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 2rem;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        .nav-links .auth-button {
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
            transition: all 0.3s;
        }

        .nav-links .login {
            border: 1px solid white;
        }

        .nav-links .signup {
            background-color: white;
            color: #1e3a8a;
        }

        .nav-links .auth-button:hover {
            transform: translateY(-2px);
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            text-align: center;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin-bottom: 2rem;
        }

        .cta-button {
            background-color: white;
            color: #1e3a8a;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
        }

        .features {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 4rem 2rem;
        }

        .features-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">Fuel Flow</div>
            <div class="nav-center">
                <a href="/fuels">Our Fuels</a>
                <a href="/services">Services</a>
                <a href="/news">News & Promos</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contact Us</a>
            </div>
            <div class="nav-links">
                <a href="/auth" class="auth-button login">Login</a>
                <a href="/auth" class="auth-button signup">Signup</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <h1>Welcome to Fuel Flow</h1>
        <p>Your comprehensive solution for efficient fuel management and tracking. Take control of your fuel consumption and costs today.</p>
        <a href="/auth" class="cta-button">Register Now</a>
    </section>

    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <h3>Track Consumption</h3>
                <p>Monitor and analyze your fuel consumption patterns with detailed insights.</p>
            </div>
            <div class="feature-card">
                <h3>Cost Management</h3>
                <p>Keep track of your fuel expenses and optimize your spending.</p>
            </div>
            <div class="feature-card">
                <h3>Real-time Analytics</h3>
                <p>Get instant insights into your fuel usage and efficiency metrics.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Fuel Flow. All rights reserved.</p>
    </footer>
</body>
</html>
