<?php
require_once "../DB.php";
require_once "../models/Customer.php";
require_once "../models/Company.php";
require_once "../models/Contract.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require_once '../commons/nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Customers
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Position</th>
                            <th>Contracts</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php foreach (Customer::getAllCustomers() as $customer) { ?>
                            <td><?= $customer->getName() ?></td>
                            <td><?= $customer->getSurname() ?></td>
                            <td><?= $customer->getPhone() ?></td>
                            <td><?= $customer->getEmail() ?></td>
                            <td><?= $customer->getAddress() ?></td>
                            <td><?= $customer->getPosition() ?></td>
                            <td>
                                <a class="btn btn-info"
                                   href="contracts.php?id=<?= $customer->getId() ?>">Contracts</a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="forms/update.php?id=<?= $customer->getId() ?>">Update</a>
                                <a class="btn btn-danger" href="forms/delete.php?id=<?= $customer->getId() ?>">Delete</a>
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
