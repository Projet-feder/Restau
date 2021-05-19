<?php
    session_start();
    require 'connect.php' ; 

    if(isset($_POST['date'])){
        $date=$_POST['date'];
    }

    if(isset($_POST['time'])){
        $hr_arr=$_POST['time'];
    }

    if(isset($_POST['hours'])){
        $hr_sor=$_POST['hours'];
    }

    if(isset($_POST['people'])){
        $people=$_POST['people'];
    }
 
    $sql = "SELECT * FROM `restau_table` where nb_pers >= $people";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
        while($row = mysqli_fetch_assoc($result)) {
            $req1="SELECT * 
            FROM reservation_table
            WHERE tab_id=".$row['tab_id']." AND date='$date'
            and hr_arr>= '$hr_arr' 
            and hr_sor <='$hr_sor' "; 
           $res1 =mysqli_query($con,$req1);
           if (mysqli_num_rows($res1)==0 ){
               $req1="INSERT INTO `reservation_table`(`res_tab_id`, `user_id`, `tab_id`, `hr_arr`, `hr_sor`, `date`, `nb_pers`)  
               VALUES (".$row['tab_id'].",'".$_SESSION['id']."','$hr_arr','$hr_sor','$date',$people)" ;
               $res1=mysqli_query($con,$req1) ; 
                header('location:../public/index.php'); 
               break;
           }
        }
        
    }
    
    
    
   
    
?>