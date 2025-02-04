<?php
include 'db/dbhandler.php';

if (isset($_POST['btnSearch'])) {
    $pickup = $_POST['fromLocation'];
    $destination = $_POST['toLocation'];
    $date = $_POST['travelDate'];
    $passengers = $_POST['numSeats'];
    $passengers = (int) $passengers;
    echo "<h3>Received Input:</h3>";
    echo "Pickup: $pickup <br>";
    echo "Destination: $destination <br>";
    echo "Date: $date <br>";
    echo "Passengers: $passengers <br>";

    // Check if the input values are correct
    if (empty($pickup) || empty($destination) || empty($date) || empty($passengers)) {
        echo "⚠️ One or more input values are missing.";
        exit;
    }

    echo "One";
    $arr = DBHandler::getAvailableRoutes($pickup, $destination, $date, $passengers);
 
    echo "<h3>Debugging Output:</h3>";
    if (!empty($arr)) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    } else {
        echo "No available routes found.";
    }
}
?>
