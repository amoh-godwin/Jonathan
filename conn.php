<?php 

$host = "localhost";
$usr = "root";
$password = "ampofo1";
$dbname = "jonathan";

if($conn = new mysqli($host, $usr, $password, $dbname)) {
    
} else {
    echo "Thank You Heavenly Father" . $conn->error;
}

?>