<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Van Booking</title>
</head>
<body>
<div class="container-fluid">
        <?php 
        include 'header.php';
        ?>

    <div id="carouselExampleCaptions" class="carousel slide mt-3 mb-3">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
            <img src="image/a4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block border slide-text">
                <h5>Welcome To Vaniverse</h5>
                <p class="">Your journey, your van, your way – <strong>book with ease today!</strong></p>
                <button class="book-button">Book Now</button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="image/a2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block border border-primary-subtle slide-text">
                <h5>Welcome To Vaniverse</h5>
                <p class="">Your journey, your van, your way – <strong>book with ease today!</strong></p>
                <button class="book-button">Book Your Adventure <i class="bi bi-search"></i></button>
            </div>
            </div>
            <div class="carousel-item">
                <img src="image/a3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block border border-primary-subtle slide-text">
                    <h5>Welcome To Vaniverse</h5>
                    <p class="">Your journey, your van, your way – <strong>book with ease today!</strong></p>
                    <button class="book-button">Book Your Adventure <i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- for promote -->
    <div class="container-fluid bg-light text-center">
        <div class="row promote">
            <!-- Column 1 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="home-icons">
                    <img src="image/diamond.png" alt="Diamond Image" class="img-fluid">
                </div>
                <h1>Accurate</h1>
                <div class="promote-text">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    </p>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="home-icons">
                    <img src="image/box.png" alt="Diamond Image" class="img-fluid">
                </div>
                <h1>Facilities</h1>
                <div class="promote-text">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="home-icons">
                    <img src="image/best-seller.png" alt="Diamond Image" class="img-fluid">
                </div>
                <h1>Quality</h1>
                <div class="promote-text">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    <!-- For Inside the van -->
        <div class="insidevan text-center">
            <h1>Cozy Travels Await</h1>
            <div class="insidevan-item d-flex flex-wrap ">
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v9.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v3.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v4.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v5.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v6.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v7.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v11.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v10.jpg" alt="">
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <img src="image/v12.jpg" alt="">
                </div>
            </div>
        </div>    
    </div>
</div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>

<script src="app.js"></script>
   
    
</body>
</html>