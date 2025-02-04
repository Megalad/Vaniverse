<?php
class DBHandler
{
    private static $conn;

    public static function openConnection()
    {
        $host = "localhost";
        $port = 3307;
        $user = "root";
        $password = "";
        $db = "vaniverse";
        try {
            if (self::$conn === null) {
                self::$conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conn;
        } catch (PDOException $e) {
            die("Database Connection Error: " . $e->getMessage());
        }
    }

    public static function closeConnection()
    {
        self::$conn = null;
    }

    public static function getAllLocation()
    {
        try {
            $conn = self::openConnection();
            $sql = "SELECT * FROM location;";
            $stmt = $conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public static function addCustomer($customerName, $studentID, $customerEmail, $customerPhone, $password)
    {
        try {
            $conn = self::openConnection();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO customer (customerName, studentID, customerEmail, customerPhone, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$customerName, $studentID, $customerEmail, $customerPhone, $hashedPassword]);
            return $conn->lastInsertId();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public static function getAllUsers()
    {
        try {
            $conn = self::openConnection();
            $sql = "SELECT * FROM customer;";
            $stmt = $conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public static function getAvailableRoutes($from, $to, $date, $passengers)
{
    try {
        $conn = self::openConnection();
        $sql = "SELECT r.routeID, l1.locationName AS pickup, l2.locationName AS destination, 
                       s.scheduleTime,price,plateNumber, v.totalSeat - COALESCE(SUM(b.numberOfSeat), 0) AS availableSeats
                FROM route r
                JOIN location l1 ON r.pickup_location_ID = l1.locationID
                JOIN location l2 ON r.destination_location_ID = l2.locationID
                JOIN price on priceID=price_ID
                JOIN schedule s ON r.schedule_ID = s.scheduleID
                JOIN vehicleDetail vd ON r.vd_ID = vd.vehicleDetailID
                JOIN vehicle v ON vd.vehicle_ID = v.vehicleID
                LEFT JOIN booking b ON r.routeID = b.route_ID AND b.date = ?
                WHERE l1.locationName = ? AND l2.locationName = ?
                GROUP BY r.routeID, l1.locationName, l2.locationName, s.scheduleTime, v.totalSeat
                HAVING availableSeats >= ?";
            
        $stmt = $conn->prepare($sql);
        $stmt->execute([$date, $from, $to, $passengers]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

}
?>
