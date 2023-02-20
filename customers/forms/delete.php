<?php
require_once "../../DB.php";
require_once "../../models/Customer.php";

Customer::getCustomer($_GET['id'])->delete();
header("location: ../");