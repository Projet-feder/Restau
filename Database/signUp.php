<?php
session_start();
// connect to the database
require '../Database/connect.php' ; 

// REGISTER USER
  // receive all input values from the form
if($_POST)
{
  extract($_POST);
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $dates = $_POST['date'];
  $tel = $_POST['tel'];
  $sexe = $_POST['sexe'];
  $mdp1 = $_POST['mdp1'];

  if ($mdp1 == $mdp2) {


  // first check the database to make sure 
  // a user does not already exist with the same  email
  $user_check_query = "SELECT * FROM user WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    $_SESSION['alerte']="email exist" ;
    header('location: signup.php');

  }
  else{
    // Finally, register user if there are no errors in the form
    //encrypt the password before saving in the database
    $password = md5($mdp1);
  	$query = "INSERT INTO user_info (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`)
  			  VALUES($nom ,'$prenom' , '$email','$password', '$dates','$tel','$sexe')";
      mysqli_query($con, $query);
      $_SESSION['info']="signup with success" ;
      $_SESSION['email']=$email;
      header('location: log.php');

      
  }
	
  } 
  else{
    $_SESSION['alerte']="password doesn't match" ;
    header('location: signup.php');
    
  }
  
  

  
}
?>