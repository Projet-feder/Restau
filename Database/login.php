<?php
session_start();
   require '../Database/connect.php' ; 
if(isset($_POST['email']) && isset($_POST['password']))
{
   
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($con,htmlspecialchars($_POST['email'])); 
  
    $password = md5($_POST['password']);
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT * FROM user where email = '".$email."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($con,$requete);
        $count = mysqli_num_rows($reponse);
        $reponse      = mysqli_fetch_array($exec_requete);
        //if($count!=0) // nom d'utilisateur et mot de passe correctes
        //{
           $_SESSION['email'] = $email;
           $id=$reponse['id'];
           $_SESSION['id'] = $id;
           if ($reponce['property']==0) {
            header('Location: ../public/update_view.php');
           }else{
            header('Location: ../public/admin_view.php');
           }
           
        //}
        //else
        //{
           //header('Location: log.php?erreur=1'); // utilisateur ou mot de passe incorrect
        //}
    }
    else
    {
       header('Location: log.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login_view.php');
}

?>