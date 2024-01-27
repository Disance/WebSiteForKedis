<?php
require_once '../connect/connect.php';


$sorting = ($_POST['sorting']);
        $link->query("UPDATE `Sorting` SET `sorting`='$sorting'");
    header('Location: ../Reviews.php');