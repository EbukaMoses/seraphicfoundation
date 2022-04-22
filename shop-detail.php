<?php include 'header.php'; ?>
    <!-- MAIN START -->
    <main class="main">
        <div class="shop-banner text-left">
            <div class="banner-content">
                <div class="container pl-0">
                    <h1 class="heading-three">Shop Detail page</h1>
                </div>
            </div>
        </div>
        <div class="item-detail paddingub paddingbzero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center mob-height p-0">
                        <div class="container">
                            <a class="showimg" href="image/shop-magnifi-img.jpg">
                                <img src="image/shop-magnifi-img.jpg" id="show-img" alt="show-img">
                            </a>
                            <div class="small-img">
                                <div class="left-icon" id="prev-img">
                                    <img src="image/online-icon-right.png" class="icon-left" alt="">
                                </div>
                                <div class="small-container">
                                    <div id="small-img-roll">
                                        <img src="image/shop-magnifi-img.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img2.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img3.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img4.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img2.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img3.jpg" class="show-small-img" alt="">
                                        <img src="image/shop-magnifi-img4.jpg" class="show-small-img" alt="">
                                    </div>
                                </div>
                                <div class="right-icon" id="next-img">
                                    <img src="image/online-icon-right.png" class="icon-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="item-info">
                            <div class="item-price-rate">
                                <h2 class="head-two">Canvas Unisex T-Shirt</h2>
                                <span class="price"><span>$ 55.40</span>&nbsp;&nbsp;&nbsp;$ 30.40</span>
                            </div>
                            <div class="item-info-stock">
                                <p class="about-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p class="item-count">50 Items<span class="stock">In stock</span></p>
                                <div class="item-cat-col-qty">
                                    <div class="item-no-group">
                                        <p class="item-no">Categories:<span class="item-brand">Skirts,Womens</span></p>
                                        <p class="item-no">Brand:<span class="item-brand">Roger</span></p>
                                        <p class="item-no">SKU:<span class="item-brand">WJN608</span></p>
                                        <div class="item-col-grp"><strong>Color :</strong>
                                            <ul>
                                                <li class="item-color-1"></li>
                                                <li class="item-color-2"></li>
                                                <li class="item-color-3"></li>
                                                <li class="item-color-4"></li>
                                            </ul>
                                        </div>
                                        <div class="input-group">
                                            <span class="item-brand"><strong>Qty :</strong></span>
                                            <span class="input-group-btn">
	              								<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
	                  							<span class="fa fa-minus"></span>
                                            </button>
                                            </span>
                                            <input type="text" name="quant[1]" class="input-number" value="1" data-min="1" data-max="100">
                                            <span class="input-group-btn">
	              								<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
	                  							<span class="fa fa-plus"></span>
                                            </button>
                                            </span>
                                        </div>
                                        <a href="checkout.php" class="add-cart"><img src="image/cart.png" alt="cart-icon">
                                            <span>ADD TO CART</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="line-bord"></div>
                            <div class="item-contact">
                                <div class="save-detail">
                                    <ul class="detail-group">
                                        <li class="save-detail-info">
                                            <a href=""><i class="fa fa-heart"></i>
	            							<span class="item-detail-save">Add to wishlist</span></a>
                                        </li>
                                        <li class="save-detail-info">
                                            <a href=""><i class="fa fa-random"></i>
	            							<span class="item-detail-save">Add to Compare</span></a>
                                        </li>
                                        <li class="save-detail-info">
                                            <a href=""><i class="fa fa-envelope"></i>
	            							<span class="item-detail-save">Email a Friend</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icon">
                                    <a href="#" title="Follow on Facebook"><i class="fa active fa-facebook"></i></a>
                                    <a href="#" title="Follow on twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Follow on google-plus"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title="Follow on instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="desc-review">
            <div class="container">
                <div class="col-xs-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Review</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="nav-item-title">Nunc lobortis bibendum elementum.</p>
                            <p class="nav-item-detail">Mauris felis neque, hendrerit id velit a, sollicitudin gravida nunc in velit lectus, varius quis pretium fermentum, faucibus vel ante etiam justo nulla, condimentum sit amet urna eget, rutrum auctor massa suspendisse sit amet odio et dui lobortis iaculis phasellus sagittis interdum neque, fermentum gravida ante maximus sed nunc lobortis bibendum elementum integer rhoncus et libero ut suscipit aliquam non ligula id dui consequat viverra a ut sem pellentesque et sapien eget lorem viverra dignissim.</p>
                            <div class="prod-cat">
                                <ul class="nav flex-column flex-nowrap">
                                    <li class="nav-item" data-toggle="collapse">
                                        <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Sweetheart neckline</a>
                                        <div class="collapse" id="submenu1" aria-expanded="false" role="main">
                                            <ul class="flex-column pl-2 nav">
                                                <li class="sub-nav-item"><a class="nav-link" href="#">Logo Design</a></li>
                                                <li class="sub-nav-item">
                                                    <a class="nav-link collapsed" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Logo</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Unlined</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Shell:96% polyster,4% spandex</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="nav-item-title">Sollicitudin gravida nunc in velit lectus.</p>
                            <p class="nav-item-detail">Mauris felis neque, hendrerit id velit a, sollicitudin gravida nunc in velit lectus, varius quis pretium fermentum, faucibus vel ante etiam justo nulla, condimentum sit amet urna eget, rutrum auctor massa suspendisse sit amet odio et dui lobortis iaculis phasellus sagittis interdum neque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-part paddingub text-center">
            <div class="container">
                <div class="row">
                    <div class="related-prod-title res inline text-left">
                        <h3 class="prod-title res">Related Products</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-3 img-box">
                        <div class="hov">
                            <a href="shop-page.php" class="shop-img img-box">
                                <img src="image/related-prod1.jpg" class="prod-img" alt="realted-img">
                            </a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
                        </div>
                        <div class="detail">
                            <a href="shop-page.php"><h4 class="product-title w-100">Canvas Unisex T-Shirt</h4></a>
                            <p><span>$ 55.40</span>&nbsp;&nbsp;$ 30.40</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-3 img-box">
                        <div class="hov">
                            <a href="shop-page.php" class="shop-img img-box">
                                <img src="image/related-prod2.jpg" class="prod-img" alt="related-img">
                            </a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
                        </div>
                        <div class="detail">
                            <a href="shop-page.php"><h4 class="product-title w-100">Canvas Unisex T-Shirt</h4></a>
                            <p><span>$ 55.40</span>&nbsp;&nbsp;$ 30.40</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-3 img-box">
                        <div class="hov">
                            <a href="shop-page.php" class="shop-img img-box">
                                <img src="image/related-prod3.jpg" class="prod-img" alt="related-img">
                            </a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
                        </div>
                        <div class="detail">
                            <a href="shop-page.php"><h4 class="product-title w-100">Canvas Unisex T-Shirt</h4></a>
                            <p><span>$ 55.40</span>&nbsp;&nbsp;$ 30.40</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-3 img-box d-block d-sm-none d-lg-block">
                        <div class="hov">
                            <a href="shop-page.php" class="shop-img img-box">
                                <img src="image/related-prod4.jpg" class="prod-img" alt="related-img">
                            </a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
                        </div>
                        <div class="detail">
                            <a href="shop-page.php"><h4 class="product-title w-100">Canvas Unisex T-Shirt</h4></a>
                            <p><span>$ 55.40</span>&nbsp;&nbsp;$ 30.40</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MAIN END -->
    <?php include 'footer.php'; ?>