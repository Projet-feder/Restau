<?php
session_start();
// connect to the database
require '../Database/connect.php' ; 
// REGISTER USER
  // receive all input values from the form
if($_POST)
{
  extract($_POST);
  

  if ($mdp1 == $mdp2) {


  // first check the database to make sure 
  // a user does not already exist with the same  email
  $user_check_query = "SELECT * FROM user WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    $_SESSION['alerte']="email exist" ;
    header('location: ../public/login_view.php');

  }
  else{
    // Finally, register user if there are no errors in the form
    //encrypt the password before saving in the database
    $password = md5($mdp1);
  	$query = "INSERT INTO user (property, user_name, user_surname, email, password, date, tel, sexe)
  			  VALUES(0,'$nom','$prenom' , '$email','$password', '$dates','$tel','$sexe')";
      mysqli_query($con, $query);
      $_SESSION['info']="signup with success" ;
      $_SESSION['email']=$email;
      header('location: ../public/login_view.php');

      
  }
	
  } 
  else{
    $_SESSION['alerte']="password doesn't match" ;
    header('location: ../public/signup_view.php');
    
  }
  
}
?>