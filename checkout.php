<?php include 'header.php'; ?>
    <!-- MAIN START -->
    <main class="main">
        <div class="checkout-part text-left">
            <div class="banner-content">
                <div class="container pl-0">
                    <h1 class="heading-three">Check Out</h1>
                </div>
            </div>
        </div>
        <div class="prod-edit paddingub paddingbzero text-center">
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col" class="res">Price</th>
                                <th scope="col" class="res">Quantity</th>
                                <th scope="col" class="res">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="shop-page.php"><img src="image/ppro1.jpg" alt="small-prod1"></a>
                                </th>
                                <td class="prod-name"><a href="shop-page.php">Canvas Unisex T-Shirt</a></td>
                                <td class="item-price res">$ 225.44</td>
                                <td class="Qty">
                                    <div class="input-group"><span class="input-group-btn">
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
                                </td>
                                <td class="item-price res">$ 225.44</td>
                                <td>
                                    <a href=""><img src="image/delete-img.png" alt="delete-icon"></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <a href="shop-page.php"><img src="image/ppro2.jpg" alt="small-prod2"></a>
                                </th>
                                <td class="prod-name"><a href="shop-page.php">Canvas Unisex T-Shirt</a></td>
                                <td class="item-price res">$ 127.32</td>
                                <td class="Qty">
                                    <div class="input-group"><span class="input-group-btn">
	              							<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
	                  						<span class="fa fa-minus"></span>
                                        </button>
                                        </span>
                                        <input type="text" name="quant[2]" class="input-number" value="1" data-min="1" data-max="100">
                                        <span class="input-group-btn">
	              							<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
	                  						<span class="fa fa-plus"></span>
                                        </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="item-price res">$ 127.32</td>
                                <td>
                                    <a href=""><img src="image/delete-img.png" alt="delete-icon"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="coupon-update">
                        <div class="coupon">
                            <input type="text" placeholder="Enter coupon code">
                            <a href="#">APPLY</a>
                        </div>
                        <div class="update">
                            <a href="#">UPDATE CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-total">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <div class="related-prod-title inline">
                            <h2 class="prod-title mt-0">Calculate Shipping</h2>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select a country...</option>
                                    <option>India</option>
                                    <option>US</option>
                                    <option>Paris</option>
                                    <option>Africa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control state" id="exampleFormControlSelect2">
                                    <option>Select a state</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control zipcode" type="text" name="zipcode" placeholder="Postcode/Zip">
                            </div>
                            <div class="get-quote">
                                <a href="" class="quote">GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <div class="related-prod-title inline">
                            <h3 class="prod-title">Cart Totals</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="item-title heading">Subtotal</td>
                                        <td class="item-sub-total">$310.00</td>
                                    </tr>
                                    <tr>
                                        <td class="item-title heading">Shipping and Handling</td>
                                        <td class="item-sub-total">Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td class="item-price heading">Total</td>
                                        <td class="item-total">$310.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="checkout">
                                <a href="">PROCEED TO CHECKOUT<img src="image/right-checkout-icon.png" alt="check-icon"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-part paddingub text-center pt-0">
            <div class="container">
                <div class="row">
                    <div class="related-prod-title res inline text-left">
                        <h3 class="prod-title res">You may be interested in</h3>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-3 img-box">
                        <div class="hov">
                            <a href="shop-page.php" class="shop-img img-box">
                                <img src="image/related-prod1.jpg" class="prod-img" alt="related-img">
                            </a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
                        </div>
                        <div class="detail">
                            <a href="shop-page.php"><h4 class="product-title w-100">Canvas Unisex T-Shirt</h4></a>
                            <a href="shop-detail.php" class="product-button left-0">
                                <img src="image/cart.png" alt="cart-icon">Add to Cart
                            </a>
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