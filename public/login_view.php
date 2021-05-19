<?php
session_start();
if(isset($_SESSION['info']))
$info = $_SESSION['info'];
else
$info="";
unset($_SESSION['info']);

?>

    
<?php require_once '../components/menu.php' ; ?>

    <div class="wrapper">
        <form action="../Database/login.php" method="post">
            <div class="h5 font-weight-bold text-center mb-3">Sign In</div>
            
            <div class="form-group d-flex align-items-center">
                <div class="icon">
                    <span class="fa fa-user"></span><input autocomplete="off" type="email" class="form-control" placeholder="Email" name="email">
                </div>     
            </div>

            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-key"></span><input autocomplete="off" type="password" class="form-control" name="password" placeholder="Password"></div>
                
            </div>

            <div class="mb-2"> <label class="option">Remember me <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
            <div ><input type="submit" class="btn btn-primary mb-3" value="Login">
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </div>
            
            <div class="terms mb-2"> </div>
            <div class="connect border-bottom mt-4 mb-4"></div>
            <ul class="p-0 social-links">
                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fab fa-google"></span></a></li>
                <li><a href="#"><span class="fab fa-github"></span></a></li>
            </ul>
            <div class="block"> 
                <label class="sign">Don't have an account ? <a href="signup_view.php" class="link">Sign Up !</a> <span class=""></span> </label> 
                <br>
                <label class="pass"> <a href="#" class="link"> Forgot your password ?</a> <span class="pass"></span> </label> 
            </div>
            
            </div>
        </form>
        
    </div>