@extends('app')

@section('content')
<section class="contact-page">
    <div class="cnt_bg">

        <div class="contact-header">
            <h2>Contact Us</h2>
            <p>We’re here to help. Choose your preferred method of contact, and we’ll get back to you as soon as possible.</p>
        </div>

        <div class="contact-options">
            <!-- WhatsApp contact -->
            <div class="contact-option">
                <h3>Contact via WhatsApp</h3>
                <p>If you need quick assistance or have a question, feel free to send us a message on WhatsApp.</p>
                <a href="https://wa.me/+yourphonenumber" target="_blank" class="whatsapp-btn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" class="whatsapp-icon">
                    Message us on WhatsApp
                </a>
            </div>

            <!-- Email contact -->
            <div class="contact-option">
                <h3>Contact via Email</h3>
                <p>Alternatively, you can send us an email, and we'll respond as soon as possible.</p>
                <a href="mailto:your-email@example.com" class="email-btn">Send Email</a>
            </div>
        </div>

    </div>

    <div class="email-form">
        <h3>Or Fill Out the Contact Form</h3>
        <form action="your-form-handler.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>
@endsection
