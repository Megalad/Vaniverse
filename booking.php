<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/booking.css">  
</head>
<body class="booking">
    <div class="container-fluid">
        <?php
            include 'header.php';
        ?>
        <div class="container-booking register my-5 d-flex flex-column justify-content-center align-items-center">
            <div class="d-inline-block d-flex flex-row justify-content-center align-items-center p-2 information">
                <i class="bi bi-info-circle-fill me-2"></i>
                <p class="text-justify me-2 mb-0">Login to your account to book for your ride!</p>
                <a href="" class="text-white">Sign Up</a>
            </div>
            <form action="" class="my-4 p-3 rounded booking-form">
                <div>
                    <h2>Book Ride</h2>
                    <div class="row g-3  px-4">
                        <div class="col-md-4 col-12 from parent">
                            <label for="" class="form-label">From</label>
                           <select name="" id="" class="from border border-black border-1 border-radius rounded">
                                <option selected disabled>Select the place</option>
                                <option value="">Mega</option>
                                <option value="">Siam</option>
                                <option value="">Ispace</option>
                                <option value="">D-condo</option>
                                <option value="">King Solomon</option>
                           </select>
                        </div>
                        <div class="col-md-4 col-12 to parent">
                        <label for="" class="form-label">To</label>
                           <select name="" id="" class="to border border-black border-1 border-radius rounded">
                                <option selected disabled>Select the place</option>
                                <option value="">Mega</option>
                                <option value="">Siam</option>
                                <option value="">Ispace</option>
                                <option value="">D-condo</option>
                                <option value="">King Solomon</option>
                           </select>
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control border border-black border-1 border-radius rounded">
                        </div>
                    </div>
                    <div class="input-group row g-3  px-4 my-3 ">
                        <div class="col-md-4 col-12">
                            <label for="" class="form-label">Passengers</label>
                            <div class="wrapper">
                                <span class="minus"><i class="bi bi-dash"></i></span>
                                <span class="num">01</span>
                                <span class="plus"><i class="bi bi-plus-lg"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
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