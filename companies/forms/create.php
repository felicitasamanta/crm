<?php
require_once "../../DB.php";
require_once "../../models/Customer.php";
require_once "../../models/Company.php";
require_once "../../models/Contract.php";

if (isset($_POST['save'])) {
    $company = new Company($_POST['name'], $_POST['address'], $_POST['vat_code'], $_POST['company_name'], $_POST['phone'], $_POST['email']);
    $company->save();
    header("location: ../");
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require_once '../../commons/nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card">
                <div class="card-header">Add new company</div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" name="address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">VAT code</label>
                            <input class="form-control" type="number" name="vat_code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input class="form-control" type="text" name="company_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input class="form-control" type="text" name="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="email">
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
