
<div class="portfolio_three_wrapper back_ash container clear">
    <div class="portfolio_three">
        <div class="row">
            <div class="heading_ash col-md-12">
                <h1>PRODUCTS</h1>
                <img src="resource/img/heading_thin_icon.png" alt="Heading">
            </div>
        </div>
        
        <div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
			<div class="wrap-countdown mercado-countdown" data-expire="2021/12/12 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                    <?php
                        require_once '../Database/connect.php' ; 
                        $req = "SELECT * FROM `product` "; 
                        $res = mysqli_query($con,$req) ; 
                        while ( $product = mysqli_fetch_array($res)){
                    ?>
					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a title="">
								<figure><img src="resource/upload/<?=$product['image_path']; ?>.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="wrap-btn">
                                <button class="function-link" value="<?=$product['prof_id']; ?>" onClick="addProduct(this)">ADD TO CART</button>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span><?=$product['prod_name']; ?></span></a>
							<div class="wrap-price"><span class="product-price">$<?=$product['prod_prix_unit']." ";?></span></div>
						</div>
					</div>
                   <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>