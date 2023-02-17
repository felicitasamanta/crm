<?php
require_once "DB.php";
require_once "models/Customer.php";
require_once "models/Company.php";
require_once "models/Contract.php";

if (isset($_GET['delete'])) {
    Company::getOneCompany($_GET['delete'])->delete();
    header("location: index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require_once 'nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Companies
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>VAT code</th>
                            <th>Company Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Customers</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (Company::getAllCompanies() as $company) { ?>
                            <tr>
                                <td><?= $company->getName() ?></td>
                                <td><?= $company->getAddress() ?></td>
                                <td><?= $company->getVatCode() ?></td>
                                <td><?= $company->getCompanyName() ?></td>
                                <td><?= $company->getPhone() ?></td>
                                <td><?= $company->getEmail() ?></td>
                                <td>
                                    <a class="btn btn-info" href="customersByCompany.php?id=<?= $company->getId() ?>">Customers</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="company_update.php?id=<?= $company->getId() ?>">Update</a>
                                    <a class="btn btn-danger" href="index.php?delete=<?= $company->getId() ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
