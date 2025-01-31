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
        <?php include 'header.php'; ?>

        <div class="container-booking register my-5 d-flex flex-column justify-content-center align-items-center px-3">
            <div class="d-inline-block d-flex flex-row justify-content-center align-items-center p-2 information text-center w-80">
                <i class="bi bi-info-circle-fill me-2"></i>
                <p class="text-justify me-2 mb-0">Login to your account to book!</p>
                <a href="" class="text-white">Sign Up</a>
            </div>

            <form action="" class="my-4 p-3 rounded booking-form w-80">
                <h2 class="py-3">Book Ride</h2>

                <div class="row g-3 px-2">
                    <div class="col-lg-4 col-md-6 col-12">
                        <label class="form-label">From</label>
                        <select class="form-select border border-black">
                            <option selected disabled>Select the place</option>
                            <option value="">Mega</option>
                            <option value="">Siam</option>
                            <option value="">Ispace</option>
                            <option value="">D-condo</option>
                            <option value="">King Solomon</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <label class="form-label">To</label>
                        <select class="form-select border border-black">
                            <option selected disabled>Select the place</option>
                            <option value="">Mega</option>
                            <option value="">Siam</option>
                            <option value="">Ispace</option>
                            <option value="">D-condo</option>
                            <option value="">King Solomon</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control border border-black">
                    </div>
                </div>

                <div class="row g-3 px-2 my-3">
                    <div class="col-md-6 col-12">
                        <label class="form-label">Passengers</label>
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-outline-secondary minus">-</button>
                            <span class="num mx-3">01</span>
                            <button type="button" class="btn btn-outline-secondary plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3 px-2">
                    <button type="submit" class="btn btn-primary px-4 py-2">Search</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script src="app.js"></script>
</body>
</html>
