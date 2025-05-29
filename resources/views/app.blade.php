<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JarHas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="{{ asset('js/scripts.js') }}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Bannière type ruban adhésif avec texte défilant -->
    <div class="sticky-banner">
        <div class="marquee">
            Horaires d'ouverture de l'agence JarHas : Lundi - Vendredi : 9h - 17h30 et 17h30 - 22h (uniquement sur rdv) | Samedi - Dimanche : 9h - 22h (uniquement sur rdv)
        </div>
    </div>

    <!-- Section navigation -->
    @if(request()->is('/')) <div class="background-image"></div>  @endif
    <nav class="navbar">
        <div class="logo">Logo</div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/buy">Buy</a></li>
            <li><a href="/sell">Sell</a></li>
            <li><a href="/rent">Rent</a></li>
            <li><a href="/writing">Writing</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    @if(request()->is('/'))
    <div class="text-overlay">
        <p class="text-overlay-p1">Find a Home to Suit Your Lifestyle</p>
        <p class="text-overlay-p2">
            If you’re looking for a new home, an investment property, or to explore the area,
            we’ll help you find exactly what you’re looking for.
        </p>
    </div>
    @endif

    <!-- Bouton fixe -->
    <a href="tel:+212776205455" class="phone-button" title="Appeler le directeur">
        <span class="phone-icon"><i class="fas fa-phone"></i>
        </span>
        <span class="phone-number">(+212) 7 76 20 54 55</span>
    </a>

    <!-- Contenu dynamique -->
    @yield('content')

    <footer class="footer">
        <div class="footer-container">
            <!-- Logo et description -->
            <div class="footer-about">
                <h2>JarHas</h2>
                <p>Votre partenaire de confiance pour trouver, vendre ou louer des propriétés partout en Louisiane. Avec nous, vos rêves immobiliers deviennent réalité.</p>
            </div>

            <!-- Liens utiles -->
            <div class="footer-links">
                <h3>Liens utiles</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('buy') }}">Buy</a></li>
                    <li><a href="{{ route('sell') }}">Sell</a></li>
                    <li><a href="{{ route('rent') }}">Rent</a></li>
                    <li><a href="{{ route('writing') }}">writing</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>

                </ul>
            </div>

            <!-- Contact et réseaux sociaux -->
            <div class="footer-contact">
                <h3>Contactez-nous</h3>
                <p><i class="fas fa-phone"></i> Téléphone : (+212) 7 76 20 54 55</p>
                <p><i class="fas fa-envelope"></i> Email : info@jarhas.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Adresse : 123, Rue des Immeubles, Louisiane</p>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!-- Mention légale -->
        <div class="footer-bottom">
            <p>&copy; 2024 JarHas. Tous droits réservés. | Designé avec ❤️ par l'équipe JarHas.</p>
        </div>
    </footer>


    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.querySelector('.nav-links');

        // Ajouter ou supprimer la classe "active" sur les liens de navigation
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        document.addEventListener("DOMContentLoaded", function () {
    // Sélectionne la section "about-us"
    const aboutUsSection = document.querySelector('.about-us');
    const textElements = document.querySelectorAll('.text');

    // Fonction de détection de l'élément dans la fenêtre
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2 // Quand 50% de l'élément est visible
    });

    // Observe la section About Us
    observer.observe(aboutUsSection);
    textElements.forEach(el => observer.observe(el));
});



    </script>
</body>
</html>
