@extends('app')

@section('content')

<section class="about-us">
    <div class="text">
        <h1>About <span class="underline1">Us</span></h1>
        <p>Welcome to our Real Estate Agency. We specialize in helping you find your dream home. Our team of experienced professionals is dedicated to providing top-notch services to meet all your real estate needs.</p>
        <p>Whether you are looking to buy, sell, or rent, we offer a comprehensive range of services to assist you at every step. Our goal is to make your real estate experience as smooth and successful as possible.</p>
        <p>Contact us today to learn more about how we can help you achieve your real estate goals.</p>
    </div>
    <div class="vertical-line"></div>
    <div class="images">
        <img src="{{ asset('images/home1.jpeg') }}" alt="Real Estate Image 1" class="img1">
        <img src="{{ asset('images/meet.jpeg') }}" alt="Real Estate Image 2" class="img2">
        <img src="{{ asset('images/family.jpeg') }}" alt="Real Estate Image 3" class="img3">
    </div>
</section>

<section class="services">
    <div class="header">
        <h2>OUR <span class="underline2">SERVICES</span></h2>
        <h3>We'll help you buy and sell on <span>your</span> schedule, not ours</h3>
        <p>We know your situation might be different, and we're ready for it. Whether you need to move quickly, fix up your home before you sell, find a very particular buyer – whatever it is, we've got a plan for you.</p>
    </div>
    <div class="service-items">
        <div class="service-item">
            <img src="{{ asset('images/buy.jpg') }}" alt="Looking to buy?">
            <div class="service-text green-bg">
                <h4>Looking to buy?</h4>
                <p>We know everything about the market. From neighborhood stats to recent sales to the nearest Starbucks to taxes to off-market listings, we'll help you find the right home.</p>
                <a href="{{ route('buy') }}">
                    <button>Learn More →</button>
                </a>

            </div>
        </div>
        <div class="service-item">
            <img src="{{ asset('images/sell.jpg') }}" alt="Looking to sell?">
            <div class="service-text purple-bg">
                <h4>Looking to sell?</h4>
                <p>Our goal is the same as yours: Get you the most money for your home. We'll bring in our professional stagers and photographers, and advertise your home to thousands of potential buyers.</p>
                <a href="{{ route('sell') }}">
                <button>Learn More →</button></a>
            </div>
        </div>

    </div>

</section>
<section class="services2">
    <div class="service-items">
        <div class="service-item">
            <img src="{{ asset('images/looking.jpeg') }}" alt="Looking to rent?">
            <div class="service-text purple-bg">
                <h4>Looking to rent?</h4>
                <p>Our goal is the same as yours: Find the perfect place to rent. We'll assist you in every step of the way to make sure you get the best deal.</p>
                <button>Learn More →</button>
            </div>
        </div>
        <div class="service-item">
            <img src="{{ asset('images/writerr.jpg') }}" alt="Looking for a public writer?">
            <div class="service-text green-bg">
                <h4>Looking for a public writer?</h4>
                <p>We specialize in finding experienced public writers who can craft compelling content. Whether it's for blogs, articles, or promotional material, we have the right writer for you.</p>
                <button>Learn More →</button>
            </div>
        </div>
    </div>
</section>

<section class="get-started">
    <div class="get-started-container">
        <div class="get-started-text">
            <h5>GET STARTED TODAY</h5>
            <h2>If buying and selling were smooth sailing, you wouldn't need an agent</h2>
            <p>
                In a time when the market is shifting, you need a team who's seen it all, and can
                help you solve any problem. That's Team Tammi.
            </p>
            <button class="talk-button">Let's Talk →</button>
        </div>
        <div class="get-started-image">
            <img src="{{ asset('images/callc.jpg') }}" alt="Agent Image">
        </div>
    </div>
</section>
<section class="statistics">
    <div class="stats-item">
        <i class="material-icons">attach_money</i>
        <h2>200M+</h2>
        <p>Total Sales (2021 - 2024)</p> <!-- Texte mis à jour -->
        <hr />
    </div>
    <div class="stats-item">
        <i class="material-icons">groups</i>
        <h2>298+</h2>
        <p>Clients Served (2021 - 2024)</p> <!-- Texte mis à jour -->
        <hr />
    </div>
    <div class="stats-item">
        <i class="material-icons">favorite</i>
        <h2>298+</h2>
        <p>5-Star Reviews (2021 - 2024)</p> <!-- Texte mis à jour -->
        <hr />
    </div>

</section>


<section class="about">
    <h3>
        We are <b>JarHas</b>, your trusted real estate agency.
    </h3>
    <p>
        With over 12 years of expertise in the real estate market, we are here to guide you every step of the way.
        Whether you’re looking to buy or sell, we’re committed to making your vision a reality.
        Our dedicated team is ready to meet your needs, on your schedule.
    </p>
</section>


  <section class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.206675637172!2d-122.41941608468283!3d37.77492977975915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064f1059d3b%3A0x2e0b60f5f812b1b4!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sus!4v1696351227462!5m2!1sen!2sus"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

@endsection
