
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <!-- Css -->
     <link rel="stylesheet" href="style.css">
     <!-- Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
<body>


<header style="background-color: rgba(255, 255, 255, 0.596);;"> 
  <div class="Logo-container col-lg-6 col-md-4 col-sm-4">
          <a href="#"><h2>Restau.</h2> </a>  
      </div>
      <div class="navigaion-container col-lg-6 col-md-4 col-sm-4">
        <nav role="navigation">
                <div id="menuToggle">
                  <input type="checkbox" />
                  
                
                  <span></span>
                  <span></span>
                  <span></span>
              <?php
              if (isset($_SESSION['id'])){
                echo '
                <ul id="menu">
                    <a href="index.php"><li>Home</li></a>
                    <a href="shop.php"><li>Menu</li></a>
                    <a href="cart_view.php"><li>Reservation</li></a>
                    <a href="#"><li>Contact</li></a>
                    <a href="update_view.php"><li>Profile</li></a>
                    <a href="../Database/logout.php"><button type="button" class="btn btn-danger">Logout</button> </a>
                </ul>' ;
              }else{
                echo '
                <ul id="menu">
                  <a href="index.php"><li>Home</li></a>
                  <a href="#"><li>About</li></a>
                  <a href="#services"><li>Services</li></a>
                  <a href="shop.php"><li>Menu</li></a>
                  <a href="#contact"><li>Contact</li></a>
                  <a href="../public/login_view.php"><button type="button" class="btn btn-danger">Login</button> </a>
                </ul>' ;
              }  
               
              ?>
                </div>
          </nav>
      </div>

</header>
