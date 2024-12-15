<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bstyle.css') }}" />
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

    <!-- Blog Section -->
    <section class="blog">
        <div class="container">
            <h1 class="section-title">Our Latest Blog Posts</h1>
            <div class="blog-cards">
                <!-- Loop through each blog post -->
                @foreach ($blogs as $blog)
                    <div class="blog-card">
                        <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" />
                        <h2 class="blog-title">{{ $blog['title'] }}</h2>
                        <p class="blog-date">{{ $blog['date'] }}</p>
                        <p class="blog-description">{{ $blog['description'] }}</p>
                        <a href="#" class="btn">Read More</a>
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
