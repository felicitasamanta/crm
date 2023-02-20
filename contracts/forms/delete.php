<?php
require_once "../../DB.php";
require_once "../../models/Contract.php";

Contract::getOneContract($_GET['id'])->delete();
header("location: ../");
