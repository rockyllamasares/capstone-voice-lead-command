<?php require "template/header-1.php" ?>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- header start -->
	<header class="header-area">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 hidden-xs">
						<div class="header-top-left">
							<div class="language-usd">
								<!-- <ul>
                                        <li><a href="#">eng</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="#">Bengali</a></li>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">usd</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="#">usd</a></li>
                                                <li><a href="#">uero</a></li>
                                                <li><a href="#">taka</a></li>
                                                <li><a href="#">pound</a></li>
                                                <li><a href="#">rupi</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="header-top-right">
							<div class="account-cart">
								<ul>
									<!--=========================== my account and log in==================================  -->

									<!-- <li class="account"><a href="#">my account</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="cart.html">my bag</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
									<li class="login"><a href="#">login</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="#">login or register</a></li>
                                                <li class="login-button"><a href="#">login</a></li>
                                                <li><a href="#">or</a></li>
                                                <li class="creat-button"><a href="#">creat account</a></li>
                                            </ul>
                                        </li> -->
									<!--=========================== my account and log in==================================  -->

									<!--dito mag sisimula kung saan kikita ang menu na napili nag customer -->
									<li class="cart"><a href="cart.html"><img src="img/icon/cart.png" alt="cart">
											<p>2</p>
										</a>
										<ul class="submenu-mainmenu">
											<li class="single-cart-item clearfix">
												<span class="cart-img">
													<a href="#"><img src="img/menu/3.jpg" alt=""></a>
												</span>
												<span class="cart-info">
													<a href="#">Lorem Ipsam...</a>
													<span>1 x $104.99</span>
													<a class="trash" href="#"><i class="fa fa-trash"></i></a>
												</span>
											</li>
											<li class="single-cart-item clearfix">
												<span class="cart-img">
													<a href="#"><img src="img/menu/4.jpg" alt=""></a>
												</span>
												<span class="cart-info">
													<a href="#">Lorem Ipsam...</a>
													<span>2 x $104.99</span>
													<a class="trash" href="#"><i class="fa fa-trash"></i></a>
												</span>
											</li>
											<li>
												<span class="sub-total-cart text-center">
													SubTotal <span>$620</span>
													<a href="checkout.html" class="view-cart">Checkout</a>
												</span>
											</li>
										</ul>
									</li>
									<!--dito nag tatapos  kung saan kikita ang menu na napili nag customer -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="logo">
							<a href="index.html"><img src="img/logo/logo.png" alt="SHOPPPIE"></a>
						</div>
					</div>
					<div class="col-lg-7 col-md-8 col-sm-6">
						<div class="mainmenu">
							<nav>
								<ul>
									<li><a href="index.html">All</a>
									</li>
									<li><a href="shop-full-grid.html">Dessert</a>
									</li>
									<li><a href="shop-full-grid.html">Lunch</a></li>
									<li><a href="blog-full-view.html">Dinner</a>
									</li>
									<li><a href="shop-full-grid.html">Drinks</a>
									</li>
									<li><a href="about-us.html">Pages</a>
									</li>
									<li><a href="contact.html">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu Area start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li><a href="index.html">All</a>
									</li>
									<li><a href="shop-full-grid.html">Dessert</a>
									</li>
									<li><a href="shop-full-grid.html">Lunch</a></li>
									<li><a href="blog-full-view.html">Dinner</a>
									</li>
									<li><a href="shop-full-grid.html">Drinks</a>
									</li>
									<li><a href="about-us.html">Pages</a>
									</li>
									<li><a href="contact.html">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu Area end -->
	</header>
	<!-- header end -->
	<div class="banner-area clearfix">
	</div>
	<!-- featured start -->
	<div class="featured-area clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title">
						<h2>featured products</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="section-tab">
						<div class="section-tab-menu text-left">
							<ul role="tablist">
								<!-- sql for category  -->
								<li role="presentation" class="active"><a href="#men" aria-controls="women" role="tab" data-toggle="tab">All</a></li>
								<?php
								$sql = "SELECT * FROM category";
								$result = $conn->query($sql);
								while ($row = $result->fetch_array()) {
								?>
									<li role="presentation"><a href="<?php echo $row['categoryid'] ?>" aria-controls="women" role="tab" data-toggle="tab"><?php echo $row['catname'] ?></a></li>
								<?php } ?>
								<!-- end of sql for category  -->
								<!-- <li role="presentation" class="active"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">women</a></li>
								<li role="presentation"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Men</a></li>
								<li role="presentation"><a href="#trendy" aria-controls="trendy" role="tab" data-toggle="tab">trendy</a></li> -->
							</ul>
						</div>
						<div class="clearfix"></div>
						<div class="tab-content row">
							<div id="women" role="tabpanel" class="active section-tab-item">
								<div class="tab-item-slider">
								<?php	
								$sql = "SELECT * FROM product";
									$result = $conn->query($sql);

									while ($row = $result->fetch_array()) {
										?>
									<div class="col-xs-12 col-width">
										<div class="single-product">
											<div class="single-product-item">
												<div class="single-product-img clearfix hover-effect">
													<a href="#">
														<img class="primary-image" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.mpY_xjQk0ogZlHsGsTJvzQHaE8%26pid%3DApi&f=1" alt="" width="100%" height="100px">
													</a>
												</div>
												<div class="single-product-info clearfix">
													<div class="pro-price">
														<h3 class="old-price">&#8369;<?php echo $row['price'] ?></h3>
														<!-- <span class="new-price">$25.99</span> -->
													</div>
													<div class="new-sale">
														<h3>new</h3>
													</div>
												</div>
												<div class="product-content text-center">
													<h3><?php echo $row['productname'] ?></h3>
													<h4><a href="#">view details</a></h4>
												</div>
												<div class="product-action">
													<ul>
														<li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
														<li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
														<li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<?php }?>

								</div>
							</div>
							<div id="men" role="tabpanel" class="section-tab-item">
								<div class="tab-item-slider">
									<div class="col-xs-12">
										<div class="single-product">
											<div class="single-product-item">
												<div class="single-product-img clearfix hover-effect">
													<a href="#">
														<img class="primary-image" src="img/product/2.jpg" alt="">
													</a>
												</div>
												<div class="single-product-info clearfix">
													<div class="pro-price">
														<span class="new-price">$25.99</span>
													</div>
												</div>
												<div class="product-content text-center">
													<h3>Full sleev women shirt</h3>
													<h4><a href="#">view details</a></h4>
												</div>
												<div class="product-action">
													<ul>
														<li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
														<li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
														<li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div id="trendy" role="tabpanel" class="section-tab-item">
								<div class="tab-item-slider">
									<div class="col-xs-12">
										<div class="single-product">
											<div class="single-product-item box-shadow-effect">
												<div class="single-product-img clearfix hover-effect">
													<a href="#">
														<img class="primary-image" src="img/product/1.jpg" alt="">
													</a>
												</div>
												<div class="single-product-info clearfix">
													<div class="pro-price">
														<span class="new-price">$25.99</span>
													</div>
												</div>
												<div class="product-content text-center">
													<h3>Full sleev women shirt</h3>
													<h4><a href="#">view details</a></h4>
												</div>
												<div class="product-action">
													<ul>
														<li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
														<li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
														<li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "template/footer-1.php" ?>