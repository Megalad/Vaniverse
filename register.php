<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container-fluid">
    <?php
        include 'header.php';
    ?>
    </div>
    <div class="container-register register my-5 d-flex justify-content-center align-items-center">
        <form action="" method="post" class="border border-primary rounded-5 p-3 bg-info-subtle ">
            <div>
                <h1 class="text-center fs-2 my-3">Registration</h1>
                <div class="row g-3  px-4">
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Full Name</label>
                        <input type="text" name="name" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Password</label>
                        <input type="password" name="password" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                </div>
                
                <div class="row g-3  px-4">
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Email Addres</label>
                        <input type="email" name="email" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Comfirm Password</label>
                        <input type="password" name="cpassword" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                </div>
                
                <div class="row g-3  px-4">
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Phone Number</label>
                        <input type="text" name="phone" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="" class="form-label ms-2">Student ID</label>
                        <input type="text" name="Id" class="form-control border border-black border-1 border-radius rounded-pill">
                    </div>
                </div>
                <div class="form-check ms-4 my-3 d-flex justify-content-center">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                    
                    <p>I agree to the Terms and Conditions.Already have an account?<a href="#">Login</a></p>
                    </label>
                </div> 
                <div class="text-center">
                    <button class="btn btn-danger me-5">
                    Reset<span class="ms-1"><i class="bi bi-trash"></i></span>
                    </button>
                    <button class="btn btn-success">
                    Submit <span class="ms-1"><i class="bi bi-file-earmark-arrow-up"></i></span>
                    </button>
                </div>
            </div>            
        </form>      
    </div>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
<script src="app.js"></script>
</body>
</html>