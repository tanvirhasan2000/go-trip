<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/tours.css') }}" />
    <title>Tours</title>
</head>

<body>
    <!--===========Nav Bar=================-->
    <section class="nav-bar">
        <div class="logo">Go Trip</div>
        <ul class="menu">
        <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/tours') }}">Tours</a></li>
                <li><a href="{{ url('/packages') }}">Package</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
        </ul>
    </section>

    <!--================= Tours Page Content =================-->
    <section class="tours">
        <div class="tours-header">
            <h1>Our Amazing Tours</h1>
            <p>Explore the world with us. Choose your next adventure!</p>
        </div>

        <div class="tour-list">
            <!-- Example Tour 1 -->
            <div class="tour-item">
            <img src="{{ asset('image/tour1.jpg') }}" alt="Tour Image">


                <h3>The Dark Forest Adventure</h3>
                <p>Location: Vancouver, Canada</p>
                <p>Price: $1640</p>
                <a href="#" class="book">Book Now</a>
            </div>

            <!-- Example Tour 2 -->
            <div class="tour-item">
                <img src="{{ asset('image/tour2.jpg') }}" alt="Tour 2">
                <h3>The Eiffel Tower</h3>
                <p>Location: Paris, France</p>
                <p>Price: $2000</p>
                <a href="#" class="book">Book Now</a>
            </div>

            <!-- Example Tour 3 -->
            <div class="tour-item">
                <img src="{{ asset('image/tour3.jpg') }}" alt="Tour 3">
                <h3>Red Hill</h3>
                <p>Location: Monaco, Monaco</p>
                <p>Price: $1490</p>
                <a href="#" class="book">Book Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="links">
            <h3>Quick Links</h3>
            <ul>
                <li>Offers & Discounts</li>
                <li>Get Coupon</li>
                <li>Contact Us</li>
                <li>About</li>
            </ul>
        </div>
    </footer>

</body>

</html>
