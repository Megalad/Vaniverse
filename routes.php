<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/routes.css">  
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'header.php';
            include 'db/dbhandler.php';
        ?>

        <div class="bg-primary d-inline-block my-4 py-2 px-4 text-white">
            <h4>Your Trip - <?php echo isset($_POST['fromLocation']) ? $_POST['fromLocation'] : 'Unknown'; ?> 
                to <?php echo isset($_POST['toLocation']) ? $_POST['toLocation'] : 'Unknown'; ?> - 
                <?php echo isset($_POST['numSeats']) ? $_POST['numSeats'] : 1; ?> seat(s)
            </h4>
        </div>

        <div class="container my-4">
            <h2 class="text-center">Available Routes</h2>
            <div class="routes d-flex flex-column justify-content-center align-items-center ">
                <?php
                    if (isset($_POST['btnSearch'])) {
                        $pickup = $_POST['fromLocation'];
                        $destination = $_POST['toLocation'];
                        $date = $_POST['travelDate'];
                        $passengers = (int)$_POST['numSeats'];

                        // Fetch available routes from the database
                        $routes = DBHandler::getAvailableRoutes($pickup, $destination, $date, $passengers);

                        if ($routes) {
                            foreach ($routes as $route) {

                                echo '
                                <div class="row align-items-center w-100">
                                    <div class="position-relative text-center info-box d-flex flex-column">
                                        <div class="d-flex flex-column flex-md-row justify-content-start align-items-right gap-1 border rounded p-4 position-relative">
                                            <span class="time fs-4">Time : ' . htmlspecialchars(date("H:i", strtotime($route['scheduleTime']))) . '</span>
                                            <div class="col-12 col-md-6 mt-2 direction d-flex align-items-center text-md-start">
                                                <span class="fw-bold details texts">' . htmlspecialchars($route['pickup']) . '</span>
                                                <div class="arrow">
                                                    <span class="movingvan">
                                                        <img src="image/van.png" alt="Van" class="vanimage"> 
                                                    </span>
                                                </div>
                                                <span class="fw-bold texts">' . htmlspecialchars($route['destination']) . '</span>
                                            </div>
                                            <div class="col-12 col-md-4 van-box p-2 d-flex justify-content-center align-items-center">
                                                Van No. ' . htmlspecialchars($route['plateNumber']) . '
                                            </div>
                                            <div class="col-12 col-md-2 price-box p-2 d-flex flex-column justify-content-center align-items-center">
                                                <span class="price">' . htmlspecialchars($route['price']) . ' ฿</span>
                                                <button class="btn booknow" onclick="bookRoute(' . $route['routeID'] . ', \'' . $date . '\', ' . $passengers . ')">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        } else {
                            echo "<h3>No routes available!</h3>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script src="app.js"></script>
    <script>
        function bookRoute(routeID, date, passengers) {
            window.location.href = `booking.php?routeID=${routeID}&date=${date}&passengers=${passengers}`;
        }
    </script>
</body>
</html>
