<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Futuristic FAQ Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/faq.css">
   <?php
            include 'header.php';
        ?>
</head>

<body>
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="text-white display-4 fw-bold">Frequently Asked Questions</h1>
      <p class="lead">Find answers to common questions about our futuristic platform.</p>
    </div>

    <div class="faq-section">
      <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">
          What is this platform about?
          <span></span>
        </div>
        <div class="faq-answer">
          <p>Our platform is designed to provide cutting-edge solutions for modern challenges, leveraging the latest technology and innovation.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">
          How do I get started?
          <span></span>
        </div>
        <div class="faq-answer">
          <p>Simply sign up for an account, explore our features, and start using the platform to achieve your goals.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">
          Is there a free trial available?
          <span></span>
        </div>
        <div class="faq-answer">
          <p>Yes, we offer a 14-day free trial for all new users. No credit card is required to get started.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">
          What kind of support do you offer?
          <span></span>
        </div>
        <div class="faq-answer">
          <p>We provide 24/7 support via live chat, email, and a comprehensive knowledge base to assist you at any time.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">
          Can I cancel my subscription anytime?
          <span></span>
        </div>
        <div class="faq-answer">
          <p>Absolutely! You can cancel your subscription at any time without any hidden fees or penalties.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <p class="mb-4">Still have questions? Contact us for more information.</p>
      <a href="aboutus.php" class="btn btn-gradient">Contact Us</a>
    </div>
  </div>

  <script>
    function toggleAnswer(question) {
      const answer = question.nextElementSibling;
      question.classList.toggle("active");
      answer.classList.toggle("show");
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</html>