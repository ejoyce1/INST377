<?php

$servername = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "collab_fpr2";

$conn = mysqli_connect($servername, $DB_USER, $DB_PASS, $DB_NAME);

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}