<?php
    $conn = new mysqli('localhost', 'root', 'root', 'hepahestustech');
    
    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
?>
