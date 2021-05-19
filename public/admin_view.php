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

<?php require '../Database/connect.php'?> 
<style>
.Admin{
  position: relative;
  display: flex;
  flex-direction: column;
}

.side-box{
  display: fixed;
  height: 100vh;
  box-shadow: 5px 10px 20px rgba( 0, 0, 0, 0.25 ) ;
}  
.Admin .menu{
    position: absolute;
    height: 100vh;
    display: flex;
    flex-direction: row ;
}

.Admin ul{
    list-style-type: none ;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: absolute;
    width: 100%;
}

.Admin .content-holder{
    position: relative;
    height: 100vh;
    top: 0px;
}
a{
    text-decoration: none;
    color: black ;
    margin: 10px;
    display: flex;
    justify-self: center;
    cursor: pointer;
}
a:hover{
    color: blue ;
}

/*---------------
Admin content-holder
----------------*/
.content{
    margin-left: 10px;
}
.statics{
    position: relative;
    height: 100%;

}
.box-holder{
    position: relative;
    width: 100%;
    top: 10px;
}
.statics-bloc{
    position: relative;
    height: 150px;
    width: 45%;
    margin: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center ;

    background: rgba( 5, 85, 236, 0.25 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 6.0px );
    -webkit-backdrop-filter: blur( 6.0px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    color:  black;
}
.statics-bloc:hover{
    background: rgba( 5, 85, 236, 0.55 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 4.5px );
    -webkit-backdrop-filter: blur( 4.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
}


.products #btn{
    background-color: rgb(0,128,128);
    color: black;
    width: 100%;
    border-radius: 10px;
}
</style> 
    <div class="Admin">
        <div class="row">
            <div class="side-box col-lg-3 col-md-3 col-sm-3">
                <div class="row">
                    <img src="" alt="admin Picture">
                    <h3>Admin</h3>
                    <hr>
                </div>
                <div class="menu">
                    <ul class="List">
                        <a class="static-link"> <li class="item-list">
                            Statics
                        </li></a>
                        <a  class="product-link"><li class="item-list">
                            Products
                        </li></a>
                        <a  class="reservation-link"><li class="item-list">
                            Reservations
                        </li></a>
                        <a  class="update-link"><li class="item-list">
                            Updates
                        </li></a>
                    </ul>
                </div>
            </div>
            <div class="content col-lg-8 col-md-8 ">
                <div class="statics">
                    
                    <div class="box-holder row">
                        <h3>users  </h3>
                        <hr>
                        <div class="statics-bloc  col-lg-5 col-md-5 col-sm-8 ">
                                <?php
                                $req= "SELECT COUNT(*)  FROM user" ; 
                                    $res= mysqli_query($con,$req);  
                                    $user_number = 0 ; 
                                    
                                    if( mysqli_num_rows($res) != 0 ){
                                        $val =mysqli_fetch_array($res) ; 

                                        $user_number = $val[0]; 
                                    }
                                    echo "<h4> $user_number User </h4>" ; 
                                ?> 
                            
                        </div>
                    </div>
                    <div class="box-holder row">

                        <h3>Reservation  </h3>
                        <hr>
                        <div class="statics-bloc col-lg-5 col-md-5 col-sm-8 ">
                            <?php
                            $req= "SELECT COUNT(*)  FROM reservation" ; 
                                $res= mysqli_query($con,$req);  
                                $user_number = 0 ; 
                                
                                if( mysqli_num_rows($res) != 0 ){
                                    $val =mysqli_fetch_array($res) ; 

                                    $user_number = $val[0]; 
                                }
                                echo "<h3> $user_number reservation </h3>" ; 
                            ?> 
                            
                        </div>
                        
                        <div class="statics-bloc  col-lg-5 col-md-5 col-sm-8 ">

                            <?php
                            // 
                            $req= "SELECT COUNT(*)  FROM reservation Where `date`=date('Y-m-d')  " ; 
                                $res= mysqli_query($con,$req);  
                                $user_number = 0 ; 
                                
                                if( mysqli_num_rows($res) != 0 ){
                                    $val =mysqli_fetch_array($res) ; 

                                    $user_number = $val[0]; 
                                }
                                echo "<h3> $user_number Reservation </h3> <h3>Today</h3>" ; 
                            ?> 
                            
                        </div>

                    </div>
                    
                    <div class="box-holder row">
                        <h3>Table Reservation  </h3>
                        <hr>
                        <div class="statics-bloc  col-lg-5 col-md-5 col-sm-8 ">
                            <?php
                            $req= "SELECT COUNT(*)  FROM reservation_table" ; 
                                $res= mysqli_query($con,$req);  
                                $user_number = 0 ; 
                                
                                if( mysqli_num_rows($res) != 0 ){
                                    $val =mysqli_fetch_array($res) ; 

                                    $user_number = $val[0]; 
                                }
                                echo "<h3> $user_number Table Reserverd </h3>" ; 
                            ?> 
                            
                        </div>
                        
                        <div class="statics-bloc  col-lg-5 col-md-5 col-sm-8 ">
                            <?php
                            $req= "SELECT COUNT(*)  FROM reservation_table Where `date`=date('Y-m-d')" ; 
                                $res= mysqli_query($con,$req);  
                                $user_number = 0 ; 
                                
                                if( mysqli_num_rows($res) != 0 ){
                                    $val =mysqli_fetch_array($res) ; 

                                    $user_number = $val[0]; 
                                }
                                echo "<h3> $user_number Table </h3> <h3> Reserverd Today </h3> " ; 
                            ?> 
                            
                        </div>

                    </div>
                </div>
                <div class="products">
                    <h3>Add Product</h3>
                    <hr>
                    <button type="button" class="btn " id="btn" data-bs-toggle="modal" data-bs-target="#AddProduct">Add a Product </button>
                    
                    <h3>Delete Product  </h3>
                    <hr>
                    <form action="../Database/deleteProduct.php" method="$_POST">
                        <input type="text" class="input" name="produnct_id" placeholder="Product id">
                        <button type="button" class="btn btn-danger" id="btn" >Delete a Product </button>
                    </form>

                    <h3>Modify Product   </h3>
                    <hr>
                    <form action="../Database/ModifyProduct.php" method="$_POST">
                        <input type="text" class="input" name="produnct_id" placeholder="Product id">
                        <butto type="button" class="btn " id="btn"  >Modify a Product </butto>
                    </form>
                   
                    <h3>Display All Product  </h3>   
                    <hr>        
                    <a href="../Database/fetchProduct.php">
                        <button type="button" class="btn " id="btn">Display All Product </button>
                    </a>
                </div>
                
                <div class="reservation">
                    
                            <?php
                                echo "<table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">id</th>
                                    <th scope=\"col\">product id</th>
                                    <th scope=\"col\">qte</th>
                                    <th scope=\"col\">Date Unit</th>
                                </tr>
                                    </thead>
                                    <tbody>";
                                    // `date`=date('Y-m-d')
                                $req= "SELECT * FROM `reservation`   " ; 
                                $res= mysqli_query($con,$req);  
                                    
                                while($row = mysqli_fetch_array($res)){
                                    
                        
                                    echo "
                                    
                                      <tr>
                                        <th scope=\"row\">".$row['res_id']."</th>
                                        <td>".$row['product_id']."</td>
                                        <td>".$row['qte']."</td>
                                        <td>".$row['date']."</td>
                                      </tr>
                                    "; 
                                  }              
                                  
                                  echo "</tbody>
                                  </table>";
                                
                            ?> 
                </div>

                <div class="updates">
                    <h3> Comming Soon</h3>
                </div>
            </div>
        </div>
    </div>


    <!-- Product Section Dialog Boxes  -->

       <!-- Modal -->
       <div class="modal fade" id="AddProduct" style="top:10% ; " data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Table Reservation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                <div class="modal-body">
                                    <form action="../Database/addProduct.php" method="post" role="form">
                                            <label for="name">Product Name</label>
                                            <input type="text" name="name" class="form-item" id="name" placeholder="Product Name">
                                            <label for="desc">Product Description</label>
                                            <input type="text" class="form-item" name="desc" id="desc"  placeholder="Product Descriptio">
                                            <label for="cout">Product Cout</label>
                                            <input type="number" class="form-item" name="cout" id="cout"  placeholder="Product Cout">
                                            <label for="price">Product Price</label>
                                            <input type="number" class="form-item" name="price" id="price" placeholder="Product Price">
                                            <label for="path"></label>
                                            <input type="file" class="form-item" name="path" id="path" placeholder="Product Image">
                                        <button type="submit" class="btn btn-success float-right mt-3" >Book a Table</button>
                                    </form>
                                
                            
                                </div>
                        </div>
                    </div>
         </div>
<?php  require "../components/footer.php" ; ?> 
