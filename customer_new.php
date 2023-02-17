<?php
require_once "DB.php";
require_once "models/Customer.php";
require_once "./models/Company.php";
require_once "models/Contract.php";


if (isset($_POST['save'])) {
    $customer = new Customer($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['position'], $_POST['company_id']);
    $customer->save();
    header("location: customers.php");
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require_once 'nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card">
                <div class="card-header">ADD NEW CUSTOMER</div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name"">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Surname</label>
                            <input class="form-control" type="text" name="surname">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input class="form-control" type="number" name="phone"
                                  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="email"
                                   >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" name="address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input class="form-control" type="text" name="position">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company ID</label>
                            <input class="form-control" type="number" name="company_id">
                        </div>
                        <button type="submit" class="btn btn-success" name="save">SAVE</button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
