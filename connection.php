<?php
$host = 'localhost';
         $user = 'root';
         $password = '';
         $database = 'shopee';

        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn){
            die("not connected due to ". mysqli_connect_error());
        }

?>