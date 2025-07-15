<?php
session_start();
$servername = ""; //https://www.gluckgabor.hu
$server_user = "root"; //ftlpzwfr_root
$server_pass = ""; //
$dbname = "ftlpzwfr_food"; //ftlpzwfr_food
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>