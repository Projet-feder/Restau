<?php
session_start();
if (isset($_SESSION['alerte']))

$msg = $_SESSION['alerte'];
else 
$msg=" ";

if (isset($_SESSION['info']))

$msg = $_SESSION['info'];
else 
$msg=" ";

unset($_SESSION['alerte']);
?>


<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link href="../signupi.css" type="text/css" rel="stylesheet" >


<meta charset="UTF-8">
</head>

<body>



<div class="wrapper">
<?php echo $msg ?>
<form class="myform"   action="../Database/signuUp.php" method="POST">

  <h5> S'incrire </h5>
  
	<div class="form-group d-flex align-items-center">
  <div class="icon"><span class="far fa-user"></span></div>
	<input type="text" placeholder="Entrer votre nom" name="nom" class="form-control" required><br>
  
  </div>

	<div class="form-group d-flex align-items-center">
  <div class="icon"><span class="far fa-user"></span></div>
	<input type="text" placeholder="Entrer votre prenom" name="prenom" class="form-control" required><br>
  </div>

	<div class="form-group d-flex align-items-center">
  <div class="icon"><span class="far fa-envelope"></span></div>
	<input type="email"  placeholder="foulen@gmail.com" name="email" class="form-control" required> <br>
  </div>

	<div class="form-group d-flex align-items-center">
  <div class="icon"><span class="fas fa-key"></span></div>
	<input type="password" placeholder="Entrer un mot de passe  "
	pattern="[A-Za-z0-9]{8}" title="Caractéres alphanumérique" name="mdp1" class="form-control" required><br>
  </div>

  <div class="form-group d-flex align-items-center">
  <div class="icon"><span class="fas fa-key"></span></div>
    <input type="password" placeholder="Vérifiez le mot de passe  "
	pattern="[A-Za-z0-9]{8}" title="Caractéres alphanumérique"  name="mdp2" class="form-control" required><br>
  </div>

	<div class="form-group d-flex align-items-center">
	<input type="date" name="dates" class="form-control" required><br>
  </div>

  <div class="form-group d-flex align-items-center">
  <div class="icon"><span class="fas fa-phone"></span></div>
	<input type="tel" name="tel" class="form-control" placeholder="numero téléphone" required><br>
  </div>

	<div class="form-group d-flex align-items-center">
  <select name="sexe"  >
    <option value="none" selected  disabled hidden>sexe</option>
    <option> Homme</option>
    <option> Femme</option>
  </select>
  </div>

	


	<div class="btn btn-primary mb-3">
      <button type="submit" class="signupbtn" name="submit">Enregistrer</button>   
  </div><br>

  <p>
  		déja membre? <a href="login.php">Sign in</a>
  </p>
    
  
</form>
</div>


</body>
</html>