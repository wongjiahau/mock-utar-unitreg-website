<?php
var_dump($_POST);
if($_POST["reqFregkey"] == "norecord") {
    header("location: registration/masterSchedule3.php");
    die();
    // masterSchedule3 stands for no record found
}
if($_POST["reqFregkey"] == "loginfail") {
    header("location: login.jsp");
    die();
    // masterSchedule3 stands for no record found
}
header("location: registration/masterSchedule.php");