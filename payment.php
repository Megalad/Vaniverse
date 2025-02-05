
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/payment.css"> 
</head>
<body>       
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card p-3">
                    <h6 class="fw-bold">Your Ride</h6>
                    <p><strong>From:</strong> I-Space</p>
                    <p><strong>To:</strong> Mega</p>
                    <p><strong>Number of Seats:</strong> 3</p>
                    <p><strong>Email:</strong> tharsis69@gmail.com</p>
                    <p><strong>Depart Time:</strong> 12:00 AM</p>
                    <p><strong>Arrival Time:</strong> 12:00 AM</p>
                    <p><strong>Date:</strong> 32/2/3000</p>
                </div>
            </div>

        
            <div class="col-md-4">
                <div class="card p-3">
                    <h6 class="fw-bold">Payment Summary</h6>
                    <p><strong>Number of Seats:</strong> 2</p>
                    <p><strong>Price:</strong> 50 Baht</p>
                    <hr>
                    <p><strong>Total Amount:</strong> 100 Baht</p>
                </div>
            </div>
        </div>

       
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card p-3">
                    <h6 class="fw-bold">Payment Methods</h6>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <button class="btn btn-outline-secondary">Cash</button>
                        </div>
                        <div class="qr-code">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" alt="QR Code">
                        </div>
                        <div class="ms-3">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-success mt-3">Confirm</button>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
