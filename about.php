
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/about.css">

        <?php
            include 'header.php';
        ?>
<body class="container-fluid">
    <header class="hero">
        <h1>About Us</h1>
        <p>Discover Vaniverse - Where Your Commute Meets Innovation</p>
    </header>

    <main class="container-fluid content-section">
        <div class="content-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSddGD2SGk_EeQNNt27R9D-4p5vruDnREZJtw&s" alt="Mission">
            <h3>Our Mission</h3>
            <p>Vaniverse is dedicated to simplifying transportation for Assumption University students by providing an efficient and reliable van booking service.</p>
        </div>
        <div class="content-item">
            <img src="https://img.freepik.com/free-photo/retinal-biometrics-technology-with-man-s-eye-digital-remix_53876-108518.jpg" alt="Vision">
            <h3>Our Vision</h3>
            <p>We aim to revolutionize campus travel by connecting students with safe, affordable, and technology-driven commuting solutions.</p>
        </div>
        <div class="content-item">
            <img src="https://img.freepik.com/premium-photo/text-our-story-typed-retro-typewriter_132358-2772.jpg" alt="Story">
            <h3>Our Story</h3>
            <p>Founded by AU alumni, Vaniverse grew from a small project into a community-focused platform enhancing daily student commutes.</p>
        </div>
    </main>

    <section class=" py-5 bg-dark text-light">
    <div class="container text-center">
        <h2 class="fw-bold text-white">Vaniverse By the Numbers</h2>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="stat-container  mt-2 mt-md-0">
                    <i class="bi bi-geo-alt-fill icon-gradient fs-1"></i>
                    <h3 class="mt-3">10+ Routes</h3>
                    <p>Connecting students to key campus destinations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-container  mt-2 mt-md-0">
                    <i class="bi bi-clipboard-check-fill icon-gradient fs-1"></i>
                    <h3 class="mt-3">500+ Bookings</h3>
                    <p>Effortlessly booked by our happy users.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-container mt-2 mt-md-0">
                    <i class="bi bi-clock-history icon-gradient fs-1"></i>
                    <h3 class="mt-3">24/7 Support</h3>
                    <p>We're here to assist you anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row g-5 align-items-stretch">
       
        <div class="col-md-6">
            <div class="form-section p-5 h-100"> 
                <h3 class="text-white mb-4">Contact Us</h3>
                <form action="submit.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control bg-dark text-light" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control bg-dark text-light" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control bg-dark text-light" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">
                            I agree to the <a href="#" class="text-decoration-none text-white">privacy policy</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-gradient w-100">Send Message</button>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div class="map-section h-100"> 
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.7574928627478!2d100.83534157498968!3d13.611617900523914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d430e775155f9%3A0xf01923824353260!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lit4Lix4Liq4Liq4Lix4Lih4LiK4Lix4LiNIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4quC4uOC4p-C4o-C4o-C4k-C4oOC4ueC4oeC4tA!5e0!3m2!1sth!2sth!4v1738171202337!5m2!1sth!2sth" 
                    allowfullscreen="" 
                    loading="lazy" 
                    class="w-100 h-100 rounded-4">
                </iframe>
            </div>
        </div>
    </div>
</div>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    </body>
</html>