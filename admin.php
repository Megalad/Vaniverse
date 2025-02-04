<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Admin</title>
    <link rel="stylesheet" href="style/header.css">
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'header.php';
        ?>
    </div>
    <div class="container-fluid my-4">
    <h2 class="text-center mb-4 text-white">All Users</h2>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>

            <?php
                include 'db/dbhandler.php';
                $users=DBHandler::getAllUsers();
                $no=1;
                if($users)
                {
                    foreach($users as $user)
                    {
                        echo "<tr>
                                <td>$no</td>
                                <td>{$user['customerName']}</td>
                                <td>{$user['studentID']}</td>
                                <td>{$user['customerEmail']}</td>
                                <td>{$user['customerPhone']}</td>
                                <td>{$user['password']}</td>
                            </tr>";
                            $no+=1;
                    }
                    
                }
                else{
                    echo "<tr><td colspan='6'>No users found.</td></tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>