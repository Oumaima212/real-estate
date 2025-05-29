@extends('app')

@section('content')
<div class="sell_bg">
    <div class="text_overlay">
        <h1 class="sell_h1">SELL WITH TEAM JarHas</h1>
        <p class="sell_p1">
            Your selling process (whether it's for a house, a plot of land, etc.)
            should be smooth and rewarding. With <br>our expertise in the market,
            we ensure you get the best value for your property. <br>
            Our team will guide you through every step, from listing to closing.
        </p>
        <button class="sell_button">Search for Homes <i class="fas fa-arrow-right"></i></button>
        <a href="{{ route('buy') }}" class="buy_a1">Need to Buy, Too? <i class="fas fa-arrow-right"></i></a>
    </div>
</div>
    <div class="process-container">
<section class="process-steps-section">
    <h2 class="section-title">Your Home Selling Process <span class="underline1">with us</span></h2><br>
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
            <img src="{{ asset('images/sell3.jpg') }}" alt="Step image" class="step-image">
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
            <img src="{{ asset('images/sell4.jpg') }}" alt="Step image" class="step-image">
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
            <img src="{{ asset('images/sell5.jpg') }}" alt="Step image" class="step-image">
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
        event.preventDefault();
        const phone = document.getElementById("phone").value.trim();
        const message = encodeURIComponent(document.getElementById("message").value.trim());
        if (phone && message) {
            const whatsappURL = `https://wa.me/${0615-120614}?text=${message}`;
            window.open(whatsappURL, "_blank");
        } else {
            alert("Please fill in all fields!");
        }
    }
</script>
