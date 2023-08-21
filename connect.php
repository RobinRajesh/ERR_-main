<?php

         $host = 'localhost';
         $user = 'root';
         $password = '';
         $database = 'shopee';

        $connn = mysqli_connect($host, $user, $password, $database);
        if (!$connn){
            die("not connected due to ". mysqli_connect_error());
        }

        $name = $_POST['name'];
        $add = $_POST['add'];

        $sql="INSERT INTO `add_info` (`sno`, `name`, `address`) VALUES (NULL, '$name', '$add');";

        if($connn->query($sql)==true){
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: successPage.html");
            
    
         }
         else{
            echo "Error: $sql <br> $connn->error";
         }

    ?>