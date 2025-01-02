<?php
$con = mysqli_connect("localhost", "root", "", "job");

$requst = " CREATE TABLE users(
    id INT(10) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(20),
    password VARCHAR(20) NOT NULL)";

mysqli_query($con, $requst);
