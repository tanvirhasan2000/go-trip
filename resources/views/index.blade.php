<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Go Trip</title>
</head>

<body>

    <!--===========Header (Nav Bar)=================-->
    <header class="nav-bar">
        <div class="logo">Go Trip</div>
        <nav>
            <ul class="menu">
            <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/tours') }}">Tours</a></li>
                <li><a href="{{ url('/packages') }}">Package</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!--===============Banner================-->
    <section class="banner">
        <div class="banner-text-item">
            <div class="banner-heading">
                <h1>Find your Next Tour!</h1>
            </div>
            <form class="form">
                <input type="text" list="mylist" placeholder="Where would you like to go?">
                <datalist id="mylist">
                    <option>London</option>
                    <option>Canada</option>
                    <option>Monaco</option>
                    <option>France</option>
                    <option>Japan</option>
                    <option>Switzerland</option>
                    <option>Seoul</option>
                </datalist>
                <input type="date" class="date">
                <a href="#" class="book">Book</a>
            </form>
        </div>
    </section>

    <!--=========Services Section===============-->
    <section class="services">
        <div class="service-item">
            <img src="image/pauline-loroy-A9U0cMNsxwY-unsplash.jpg" alt="Local Guides">
            <h2>8000+ Our Local Guides</h2>
        </div>
        <div class="service-item">
            <img src="image/pic1.jpg" alt="Trusted Tour Agency">
            <h2>100% Trusted Tour Agency</h2>
        </div>
        <div class="service-item">
            <img src="image/pic2.jpg" alt="28+ Years of Travel Experience">
            <h2>28+ Years of Travel Experience</h2>
        </div>
        <div class="service-item">
            <img src="image/pic3.jpg" alt="98% Our Travelers are Happy">
            <h2>98% Our Travelers are Happy</h2>
        </div>
    </section>

    <!--==============Featured Places===================-->
    <section class="places">
        <div class="places-text">
            <small>FEATURED TOURS PACKAGES</small>
            <h2>Favourite Places</h2>
        </div>

        <div class="cards">
            <!-- Card 1 -->
            <div class="card">
                <div class="zoom-img">
                    <img src="image/dimitri-kolpakov-H5WmMuArZyE-unsplash.jpg" alt="The Dark Forest Adventure">
                </div>
                <div class="text">
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                    <h2>The Dark Forest Adventure</h2>
                    <p class="cost">$1640 / Per Person</p>
                    <div class="card-box">
                        <p class="time">🕓 3 Days</p>
                        <p class="location">✈ Vancouver, Canada</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <div class="zoom-img">
                    <img src="image/yovan-verma-8FastCJ6y30-unsplash.jpg" alt="The Eiffel Tower">
                </div>
                <div class="text">
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                    <h2>The Eiffel Tower</h2>
                    <p class="cost">$2000 / Per Person</p>
                    <div class="card-box">
                        <p class="time">🕓 3 Days</p>
                        <p class="location">✈ Paris, France</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <div class="zoom-img">
                    <img src="image/zoshua-colah-Ao7U_MIBA3o-unsplash.jpg" alt="Red Hill">
                </div>
                <div class="text">
                    <span class="rating">⭐⭐⭐⭐⭐</span>
                    <h2>Red Hill</h2>
                    <p class="cost">$1490 / Per Person</p>
                    <div class="card-box">
                        <p class="time">🕓 3 Days</p>
                        <p class="location">✈ Monaco, Monaco</p>
                    </div>
                </div>
            </div>

            <!-- More Cards -->
            <!-- Add other cards here similarly -->
        </div>
    </section>

    <!--===========About Us===============-->
    <section class="about">
        <div class="about-img">
            <img src="image/polina-kuzovkova-w8UhdHDGjJg-unsplash.jpg" alt="About Our Company">
        </div>
        <div class="about-text">
            <small>ABOUT OUR COMPANY</small>
            <h2>We are Go Trip Travel Support Company</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <label><input type="checkbox" checked>Lorem ipsum dolor sit amet</label>
            <label><input type="checkbox" checked>Consectetur adipisicing elit</label>
            <label><input type="checkbox" checked>Architecto atque consequuntur</label>
            <label><input type="checkbox" checked>Cupiditate doloremque ducimus</label>
            <a href="#">Learn More About Us</a>
        </div>
    </section>

    <!--===========Footer=================-->
    <footer class="footer">
        <div class="links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Offers & Discounts</a></li>
                <li><a href="#">Get Coupon</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="links">
            <h3>New Products</h3>
            <ul>
                <li><a href="#">Women’s Clothing</a></li>
                <li><a href="#">Fashion Accessories</a></li>
                <li><a href="#">Men’s Accessories</a></li>
                <li><a href="#">Rubber Made Toys</a></li>
            </ul>
        </div>
        <div class="links">
            <h3>Support</h3>
            <ul>
                <li><a href="#">Frequently Asked Questions</a></li>
                <li><a href="#">Report a Payment Issue</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>
