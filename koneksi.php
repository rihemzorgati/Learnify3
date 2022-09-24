<?php
$koneksi = mysqli_connect("localhost", "root", "", "learnify");

// Check connection
if (mysqli_connect_errno()) {
    echo "Database connection failed : " . mysqli_connect_error();
}