<?php
require_once "../../DB.php";
require_once "../../models/Company.php";

Company::getOneCompany($_GET['id'])->delete();
header("location: ../");

?>