<?php

    $con = mysqli_connect('localhost','root','','shop') ; 

    if (!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
?> 