<?php
session_start();
require_once '../Database/connect.php' ; 
if (isset($_GET)){
    if (isset($_GET['q'])){
        $id=$_GET['q'];
        
        if (!empty($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]+=1 ; 
        }else{
            $_SESSION['cart'][$id]=1 ; 
        }
    } 

    // vider la session  
  if (isset($_GET['clearCart'])){
      unset($_SESSION['cart']) ; 
      header('location:shop.php') ; 
  }
    
  if (isset($_GET['confirm'])){
     
      if (empty($_SESSION['cart'])){
          $_SESSION['alerte'] = "cart is empty " ;
      }else{
          if (empty($_SESSION['id'])){
              header('location:login_view.php') ; 
              $_SESSION['alerte']="please login before completing your checkout" ;
          }else{
          
            foreach($_SESSION['cart'] as $key=> $value){
                $date=date('Y-M-D') ;
                $req = "INSERT INTO `reservation`( `user_id`, `product_id`, `qte`, `date`) 
                VALUES (".$_SESSION['id'].",$key,$value,$date)"  ;
                
            }
            // vider la session 
            unset($_SESSION['cart']) ; 
            $_SESSION['alerte']="Checkout Done" ; 
            
        }
      }
  }
}

function add($param){
    $_SESSION['cart'][$param]+= 1 ; 
}

function remove($param){
    $_SESSION['cart'][$param]+= -1; 
}

?>


<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    

</style>
<?php  require "../components/menu.php" ; ?> 
        <p class="alert"> 
            <?php 
                if(isset($_SESSION['alerte'])){
                    echo $_SESSION['alerte'] ;
                }
            ?> 
        </p>
    <div class="cart">
        <div class="content-holder row" id="box">
        
            <div class="shopping-cart col-sm-8 col-md-8 col-lg-8 ">
                <div class="title">
                    <h3 >
                        shopping Cart
                    </h3>
                </div>
                <span class="divider"></span>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Product Details</th>
                            <th scope="col">Quatity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $Total = 0 ; 
                        $counter =0;
                        if (empty($_SESSION['cart'])){
                            echo "<p> no Product  </p> ";
                        }else{
                            foreach ($_SESSION['cart'] as $key => $val) {
                                $counter+=1 ; 
                                $sql = "select * from product where prod_id = $key ";
                                
                                $result = mysqli_query($con,$sql) or die("bad query: $sql");
                                
                                $row = mysqli_fetch_assoc($result);
                                
                                $price = $val * $row['prod_prix_unit'];
                                
                            $Total += $price;
                            
                            
                                echo " <tr>
                            <td>".$row['prod_id']."</td>
                            <td>".$val."</td>
                            <td>".$row['prod_prix_unit']."</td>
                            <td>".$price."</td>
                            
                            </tr>" ;
                            
                            
                            }
                        }
                    ?>       
                    </tbody>
                    
                </table>
                <a href="menu.php"><button class="Checkout-btn">Back to Shopping</button></a>  
                
            </div>
            <div class="oder-summary col-sm-4 col-md-4 col-lg-4">
                <div class="title">
                    <h3>
                        Order Summary
                    </h3>
                </div>
                <span class="divider"></span>
                <div class="Order-details">
                   <h4>
                    <?php echo  $counter ;?> Items
                   </h4>   
                   <h4>
                       Total Price 
                       <?php echo $Total ;?> TND
                   </h4> 
                    
                    <a href="cart_view.php?clearCart=true"><button class="clear-btn">Clear Cart</button></a>
                    <a href="cart_view.php?confirm=true"><button class="confirm-btn"> Confirm</button></a>
                    
                </div>
                
            </div>
        </div>
    </div>
    <?php  require "../components/footer.php" ; ?> 



 