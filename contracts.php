<?php
require_once "DB.php";
require_once "models/Customer.php";
require_once "models/Company.php";
require_once "models/Contract.php";

$id = $_GET['id'];




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contracts</title>
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
                    Contracts
                    <a class="btn btn-primary float-end" href="contract_new.php">Add new contract</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Conversation</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($company->getCustomers() as $customer) { ?>
                            <tr>
                                <td><?= $customer->getAddress() ?></td>
                                <td><?= $customer->getPosition() ?></td>
                                <td>
                                    <a class="btn btn-info"
                                       href="contract_update.php?id=<?= $company->getId() ?>">Update</a>
                                    <a class="btn btn-danger"
                                       href="contracts.php?delete=<?= $company->getId() ?>">Delete</a>
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
