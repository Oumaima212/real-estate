@extends('app')

@section('content')
<div class="grid-container">

    <div class="left2-part">
        <h2 class="section2-title">Your Home Selling Process <span class="underline1">with us</span></h2><br>

        <div class="process1-steps">
            <div class="step1">
                <div class="step1-header">
                    <h3 class="step1-number">01</h3>
                    <h4 class="step1-title">Finding the Perfect Options:</h4>
                </div>
                <p class="step1-description">
                    Once you’ve shared your budget, needs, and non-negotiables,<br> we’ll send you listings that match,including off-market properties,<br>  and act quickly if needed.
                </p>
            </div>
            <div class="step1">
                <div class="step1-header">
                    <h3 class="step1-number">02</h3>
                    <h4 class="step1-title">Touring and Refining Your Choice:</h4>
                </div>
                <p class="step1-description">
                    When you find a home you want to see, we’ll arrange a tour <br> ASAP. We’ll provide expert insights about the neighborhood <br> and give honest advice until you find the home you love.
                </p>
            </div>
            <div class="step1">
                <div class="step1-header">
                    <h3 class="step1-number">03</h3>
                    <h4 class="step1-title">Closing and Celebrating:</h4>
                </div>
                <p class="step1-description">
                    We’ll craft a winning offer and handle all steps to closing <br> (inspection, appraisal, and scheduling). Once everything’s perfect,<br>  we’ll celebrate your new home and remain your trusted advisors for<br>  the future.
                </p>
            </div>
        </div>
    </div>
    <div class="right-part">
        <img src="{{ asset('images/rent3.jpg') }}" alt=" image" class="rent3-image">
        <img src="{{ asset('images/rent6.jpg') }}" alt=" image" class="rent3-image">
    </div>
</div>
<h1 class="buy_h1">RENT WITH TEAM JarHas</h1>
<p class="buy_p1">Your renting process (whether for a house, a plot of land, etc.)
    is stressful enough. Especially in <br>this market, you shouldn't feel pressured
    to rent a home you don't love. That's why we do things differently here. <br>
    We will help you find the right home (whether on-market or off-market) according <br> to your schedule and within your budget.</p>
<br>
<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-slide active">
            <img src="{{ asset('images/rent7.jpg') }}" alt="Image 4" class="carousel-image">
            <img src="{{ asset('images/rent14.jpg') }}" alt="Image 5" class="carousel-image">
            <img src="{{ asset('images/rent9.jpg') }}" alt="Image 6" class="carousel-image">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/rent5.jpg') }}" alt="Image 2" class="carousel-image">
            <img src="{{ asset('images/rent4.jpg') }}" alt="Image 1" class="carousel-image">
            <img src="{{ asset('images/rent6.jpg') }}" alt="Image 3" class="carousel-image">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/rent11.jpg') }}" alt="Image 2" class="carousel-image">
            <img src="{{ asset('images/rent10.jpg') }}" alt="Image 1" class="carousel-image">
            <img src="{{ asset('images/rent16.jpg') }}" alt="Image 3" class="carousel-image">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/rent12.jpg') }}" alt="Image 2" class="carousel-image">
            <img src="{{ asset('images/rent13.jpg') }}" alt="Image 1" class="carousel-image">
            <img src="{{ asset('images/rent15.jpg') }}" alt="Image 3" class="carousel-image">
        </div>
    </div>
    <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
</div>


<div class="grid-container">
    <h2 class="section-title" >How can you  <span class="underline1">contact</span>  us?</h2><br>

    <div class="left-part">
        <img src="{{ asset('images/buy7.png') }}" alt=" image" class="buy7-image">

    </div>


    <div class="right-part">
        <h2 class="form-title">Contact Us via WhatsApp</h2>

        <form id="whatsappForm" onsubmit="redirectToWhatsApp(event)">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" class="phone" placeholder="Enter your phone number" required pattern="[0-9]{10}">

            <label for="message">Your Message:</label>
            <textarea id="message" class="message" name="message" rows="4" placeholder="Type your message here..." required></textarea>

            <button type="submit" class="submit-button">Send on WhatsApp</button>
        </form>
    </div>
</div>

<script>
let currentIndex = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    slides[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
    slides[currentIndex].classList.add('active');

    const carouselInner = document.querySelector('.carousel-inner');
    carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Défilement automatique toutes les 3 secondes
setInterval(() => moveSlide(1), 9000);
const carousel = document.querySelector('.carousel');
let autoSlide = setInterval(() => moveSlide(1), 9000);

carousel.addEventListener('mouseover', () => clearInterval(autoSlide));
carousel.addEventListener('mouseout', () => autoSlide = setInterval(() => moveSlide(1), 9000));


</script>
<style>
.carousel {
    position: relative;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease-in-out; /* Effet de transition plus fluide */
}


.carousel-slide {
    display: flex;
    justify-content: space-between;
    flex-shrink: 0;
    width: 100%;
}

.carousel-image {
    width: calc(100% / 3); /* Divise chaque slide en 3 parties */
    object-fit: cover;
    padding: 5px;
}

.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.192);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}

.carousel-control.prev {
    left: 10px;
}

.carousel-control.next {
    right: 10px;
}
</style>
@endsection
