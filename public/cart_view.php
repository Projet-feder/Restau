<?php
session_start();

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
                // insert into table key value (product id , qte ) ; 
                
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

    .cart{
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-holder{
        background: rgba( 255, 255, 255, 0.75 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 4px );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        position: relative;
        top: 50px;
        width: 90%;
        height: 90%;
    }

    .shopping-cart, .oder-summary{
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .oder-summary{
        background: rgba( 189, 189, 189, 0.50 );
        border-radius: 5px;
    }

    .divider{
        width: 100%;
        border: 0.5px black solid;
    }
    .title h3{
        position: relative;
        top: 20px;
    }

    /*-- table ---*/

    table,.Order-details{
        margin: 30px;
    }
    .cart button {
        width: 100px;
        height: 25px;
        margin: 5px;
        border-radius: 10px;
        border: 0px;
    }

    .cart .Checkout-btn{
        width: 50%;
        background-color: green;
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
                        if (empty($_SESSION['cart'])){
                            echo "<p> no Product  </p> ";
                        }else{
                            foreach ($_SESSION['cart'] as $key => $val) {
                                //$sql = "select * from plat where id = $key ";
                                //$result = mysqli_query($con,$sql) or die("bad query: $sql");
                                //$row = mysqli_fetch_assoc($result);
                                //$price = $val * $row['prix'];
                                //$Total += $price;
                            
                            /*echo " <tr>
                            <td>".$row['id']."</td>
                            <button> - </button> 
                            <td>".$val."</td>
                            <button> + </button> 
                            <td>".$row['price']."</td>
                            <td>".$price."</td>
                            
                            </tr>" ;*/
                            $price = $val * 2500 ; 
                            $Total += $price ; 
                            echo " <tr>
                            <td>".$key."</td>
                             
                            <td>".$val."</td>
                           
                            <td>2500</td>
                            <td>".$price."</td>
                            </tr>" ;
                            
                            }
                        }
                    ?>       
                    </tbody>
                    
                </table>
                <a href="#"><button class="Checkout-btn">Continue Shopping</button></a>  
                
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
                    <?php echo '3' ;?> Items
                   </h4>   
                   <h4>
                       Total Price 
                       <?php echo '580' ;?> TND
                   </h4> 
                    
                    <a href="cart_view.php?clearCart=true"><button>Clear Cart</button></a>
                    <a href="cart_view.php?confirm=true"><button > Confirm</button></a>
                    
                </div>
                
            </div>
        </div>
    </div>
    <?php  require "../components/footer.php" ; ?> 



 