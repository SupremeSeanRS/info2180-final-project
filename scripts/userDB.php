<?php

require_once 'dbconfig.php';
require_once 'userSubmit.php';

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";

    $sql = "INSERT INTO Users (firstname, lastname, password, email, date, salt) VALUES ('$fname', '$lname', '$pass', '$email', '$date', '$rand')";

    $conn -> query($sql);
}

catch (PDOException $pe) {
    die("Could not connect to database $dbname :" . $pe -> getMessage());
}


?>