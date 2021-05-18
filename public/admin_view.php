<?php  require "../components/menu.php" ; ?> 
    <div class="Admin">
        <div class="row">
            <div class="side-box col-lg-4 col-md-4 col-sm-4">
                <div class="row">
                    <img src="" alt="admin Picture">
                    <h3>Admin</h3>
                    <hr>
                </div>
                <div class="menu">
                    <ul class="List">
                        <a href="#" class="static-link"> <li class="item-list">
                            Statics
                        </li></a>
                        <a href="#" class="product-link"><li class="item-list">
                            Products
                        </li></a>
                        <a href="#" class="reservation-link"><li class="item-list">
                            Reservations
                        </li></a>
                        <a href="#" class="update-link"><li class="item-list">
                            Updates
                        </li></a>
                    </ul>
                </div>
            </div>
            <div class=" col-lg-8 col-md-8 ">
                <div class="statics">
                    <div class="user-statics">
                        <?php
                          /*  $req= "select count(*) from user" ; 
                            $res= mysqli_query($con,$req );  
                            if(mysqli_num_rows($res) == 0 ){
                                $user_number = 0 ; 
                            }else{
                                $user_number = $res ; 
                            }

                            echo "<h3> $user_number User </h3>" ; */
                        ?> 
                        <h3>hello from statics</h3>
                    </div>
                    
                </div>
                <div class="products">
                    <h3>hello from products</h3>
                </div>
                <div class="reservation">
                    <h3>hello from reservations</h3>
                </div>
                <div class="updates">
                    <h3>hello from updates</h3>
                </div>
            </div>
        </div>
    </div>
<?php  require "../components/footer.php" ; ?> 
