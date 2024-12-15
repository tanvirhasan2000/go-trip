<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tour Packages</title>
    <link rel="stylesheet" href="{{ asset('css/pstyle.css') }}" />
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

    <!-- Packages Section -->
    <section class="packages">
        <div class="container">
            <h1 class="section-title">Our Popular Packages</h1>
            <div class="package-cards">
                <!-- Loop through each package -->
                @foreach ($packages as $package)
                    <div class="package-card">
                        <img src="{{ asset($package['image']) }}" alt="{{ $package['title'] }}" />
                        <h2 class="package-title">{{ $package['title'] }}</h2>
                        <p class="package-price">{{ $package['price'] }}</p>
                        <p class="package-description">{{ $package['description'] }}</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                @endforeach
            </div>
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
