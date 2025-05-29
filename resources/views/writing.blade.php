@extends('app')

@section('content')
<div class="writing">
    <video autoplay muted loop playsinline class="background-video">
        <source src="../videos/writing1.mp4" type="video/mp4">
    </video>
    <div class="content">
        <h2  class="content1">Looking for a Public Clerk?</h2>
        <p  class="content2">
            Need assistance with official documents or legal formalities? <br> Our professional public clerks are here to help. From drafting  legal documents to notarizing<br> important papers, we ensure accuracy, efficiency, and compliance with all regulations.
            <br>
            Whether you're selling property or require expert public clerk services, <br>Team JarHas is your trusted partner.</p>
    </div>
</div>
<section class="public-clerk-services">
    <div class="service-description">
        <h3>Our Public Clerk Services</h3>
        <p>Team JarHas offers a wide range of services to assist with all your legal and notarial needs. Whether you're handling property sales, drafting official contracts, or requiring notarization, our professional public clerks are here to help.</p>
    </div>

    <div class="service-items-writing">
        <div class="service-item-writing">
            <img src="{{ asset('images/writing2.jpg') }}"  alt="Legal Documentation" class="service-img-writing">
            <h4>Legal Documentation</h4>
            <p>We specialize in creating and managing legal documents. From contracts to agreements, we ensure your paperwork is drafted with precision and legality.</p>
        </div>
        <div class="service-item-writing">
            <img src="{{ asset('images/writing3.jpg') }}"  alt="Notarization" class="service-img-writing">
            <h4>Notarization</h4>
            <p>Our clerks provide expert notarization services, ensuring that all your documents are legally authenticated with the appropriate certifications.</p>
        </div>
        <div class="service-item-writing">
            <img src="{{ asset('images/writing4.jpg') }}"  alt="Property Sales Assistance" class="service-img-writing">
            <h4>Property Sales Assistance</h4>
            <p>We offer complete support throughout the property selling process, including the preparation of legal documents and ensuring the transaction is completed smoothly and securely.</p>
        </div>
    </div>
</section>

<section class="why-choose-us">
    <div class="why-content">
        <h3>Why Choose Team JarHas?</h3>
        <p>We understand the importance of having trustworthy and efficient public clerk services. Our team is committed to providing:</p>
        <ul>
            <li>Expert legal knowledge and experience</li>
            <li>Accuracy and attention to detail in all documents</li>
            <li>Fast and reliable service to ensure your needs are met quickly</li>
            <li>Full confidentiality and security for your sensitive documents</li>
        </ul>
    </div>
</section>

<section class="get-in-touch">
    <div class="contact-info">
        <h3>Get In Touch with Our Public Clerks</h3>
        <p>If you need assistance with any legal formalities or public notary services, our team is just a call or click away. We are here to help you navigate all the official paperwork with ease.</p>
        <a href="/contact" class="contact-btn">Contact Us Today</a>
    </div>
</section>
@endsection

