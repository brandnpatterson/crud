<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Connection Failed' . mysqli_connect_error());
}

mysqli_close($conn);
