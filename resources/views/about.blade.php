<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $aboutUs['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/astyle.css') }}" />
</head>

<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="logo">
            <a href="#">Go Trip</a>
        </div>
        <nav>
            <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/tours') }}">Tours</a></li>
                <li><a href="{{ url('/packages') }}">Package</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- About Us Section -->
    <section class="about">
        <div class="container">
            <h1>{{ $aboutUs['title'] }}</h1>
            <p>{{ $aboutUs['description'] }}</p>

            <h2>Our Vision</h2>
            <p>{{ $aboutUs['vision'] }}</p>

            <h2>Our Mission</h2>
            <p>{{ $aboutUs['mission'] }}</p>

            <h2>Meet the Team</h2>
            <ul>
                @foreach ($aboutUs['team'] as $name => $position)
                    <li><strong>{{ $name }}</strong> - {{ $position }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Go Trip. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
