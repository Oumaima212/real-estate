@extends('app')

@section('content')
    <h1 class="buy_h1">BUY WITH TEAM JarHas</h1>
    <p class="buy_p1">Your buying process (whether for a house, a plot of land, etc.)
        is stressful enough. Especially in <br>this market, you shouldn't feel pressured
       to buy a home you don't love. That's why we do things differently here. <br>
         We will help you find the right home (whether on-market or off-market) according <br> to your schedule and within your budget.</p>

    <button  class="buy_button">Search for Homes  <i class="fas fa-arrow-right"></i></button>
    <a href="{{route('sell')}}" class="buy_a1">Need to Sell, Too?<i class="fas fa-arrow-right"></i></a>

        <br>
        <div class="imagesbuy">
    <img src="{{ asset('images/buy3.jpg') }}" alt="Looking to buy?" class="buy3_img">

    <img src="{{ asset('images/buy2.jpg') }}" alt="Looking to buy?" class="buy2_img">
    <img src="{{ asset('images/buy3.jpg') }}" alt="Looking to buy?" class="buy3_img">
</div>


    <div class="process-container">



        <!-- Étapes de droite -->
<!-- Conteneur principal -->
<section class="process-steps-section">
    <h2 class="section-title" >Your Home Buying Process <span class="underline1">with us</span></h2><br>
    <div class="process-steps">
        <!-- Étape 01 -->
        <div class="step">
            <div class="step-header">
                <h3 class="step-number">01</h3>
                <h4 class="step-title">Finding the Perfect Options:</h4>
            </div>
            <p class="step-description">
                Once you’ve shared your budget, needs, and non-negotiables, we’ll send you listings that match,<br> including off-market properties, and act quickly if <br> needed.
            </p>
            <img src="{{ asset('images/buy4.jpg') }}" alt="Step image" class="step-image">
        </div>

        <!-- Étape 02 -->
        <div class="step">
            <div class="step-header">
                <h3 class="step-number">02</h3>
                <h4 class="step-title">Touring and Refining Your Choice:</h4>
            </div>
            <p class="step-description">
                When you find a home you want to see, we’ll arrange a tour ASAP. We’ll provide expert insights about the neighborhood and give honest advice until you find the home you love.
            </p>
            <img src="{{ asset('images/buy5.jpg') }}" alt="Step image" class="step-image">
        </div>

        <!-- Étape 03 -->
        <div class="step">
            <div class="step-header">
                <h3 class="step-number">03</h3>
                <h4 class="step-title">Closing and Celebrating:</h4>
            </div>
            <p class="step-description">
                We’ll craft a winning offer and handle all steps to closing (inspection, appraisal, and scheduling). Once everything’s perfect, we’ll celebrate your new home and remain your trusted advisors for the future.
            </p>
            <img src="{{ asset('images/buy6.jpg') }}" alt="Step image" class="step-image">
        </div>
    </div>
</section>

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


@endsection
<script>
    function redirectToWhatsApp(event) {
        event.preventDefault(); // Empêche le rechargement de la page
        const phone = document.getElementById("phone").value.trim();
        const message = encodeURIComponent(document.getElementById("message").value.trim());

        if (phone && message) {
            const whatsappURL = `https://wa.me/${0615-120614}?text=${message}`;
            window.open(whatsappURL, "_blank"); // Ouvre dans un nouvel onglet
        } else {
            alert("Please fill in all fields!");
        }
    }
</script>
