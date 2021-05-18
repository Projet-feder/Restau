<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'shop');

if($_POST)
{   
	
	
	extract($_POST);
	$password1=md5($_POST['newpass']);
	$password2=md5($_POST['oldpass']);
	$req = "SELECT * FROM `user` where id= '".$_SESSION['id']."'";
  	$exec_requete = mysqli_query($conn,$req);
  	$reponse = mysqli_fetch_array($exec_requete);
	if ($password2==$reponse['mdp'])
	{
	$sql = "UPDATE `user` SET `nom`='".$_POST['lname']."',`prenom`='".$_POST['fname']."',`email`='".$_POST['email']."' ,`mdp`='".$password1 ."',`numtel`='".$_POST['mnumber']."' WHERE id= '". $_SESSION['id']."'";
	$result = mysqli_query($db,$sql);
	if ($result) 
	{
		$_SESSION['info'] = "modified with success";
		header('location:signup.php');
    } 
	else 
	{
		$_SESSION['info'] = "Erreur: ". $conn->error;
		header('location:signup.php');
    }
	}
	else 
	{
		$_SESSION['info']="current password is false";
		header('location:edit.php');
		
	}
}
?>


