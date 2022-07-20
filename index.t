<?php 
include "serverside/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Shop Homepage - Start Bootstrap Template</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="asset/assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="asset/css/styles.css" rel="stylesheet" />
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="asset/sidebar/assets/favicon.ico" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="asset/sidebar/css/styles.css" rel="stylesheet" />
</head>

<body>



	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="border-end bg-white" id="sidebar-wrapper">
			<div class="sidebar-heading border-bottom bg-light">Kiosk Voice Lead Command</div>
			<div class="list-group list-group-flush">
				<?php
				$sql = "SELECT * FROM category";
				$result = $conn->query($sql);
				while ($row = $result->fetch_array()) {
				?>
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><?php echo $row['catname'] ?></a>
					<?php } ?>
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Top navigation-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<div class="container-fluid">
					<button class="btn btn-primary" id="sidebarToggle">CATEGORY</button>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">

					</div>
				</div>
			</nav>
			<!-- Page content-->
			<div class="container-fluid">
				<header class="bg-dark py-5">
					<div class="container-fluid">
						<div class="container px-4 px-lg-5 my-5">
							<div class="text-center text-white">
								<h1 class="display-4 fw-bolder">Shop in style</h1>
								<p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
							</div>
						</div>
				</header>
				<?php
				$sql_product = "SELECT * FROM product";
				$result_product = $conn->query($sql_product);
				while ($row_product = $result_product->fetch_array()) {
				?>
				<section class="py-5">
					<div class="container px-4 px-lg-5 mt-5">
						<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
							<div class="col mb-5">
								<div class="card h-100">
									<!-- Product image-->
									<img class="card-img-top" src="<?php echo $row_product['fileToUpload'] ?>" alt="..." />
									<!-- Product details-->
									<div class="card-body p-4">
										<div class="text-center">
											<!-- Product name-->
											<h5 class="fw-bolder"><?php echo $row_product['productName']?></h5>
											<!-- Product price-->
											<?php echo $row_product['price']?>
										</div>
									</div>
									<?php } ?>
									<!-- Product actions-->
									<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
										<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
									</div>
								</div>
							</div>
							<div class="col mb-5">
								<div class="card h-100">
									<!-- Sale badge-->
									<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
									<!-- Product image-->
									<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
									<!-- Product details-->
									<div class="card-body p-4">
										<div class="text-center">
											<!-- Product name-->
											<h5 class="fw-bolder">Special Item</h5>
											<!-- Product reviews-->
											<div class="d-flex justify-content-center small text-warning mb-2">
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
											</div>
											<!-- Product price-->
											<span class="text-muted text-decoration-line-through">$20.00</span>
											$18.00
										</div>
									</div>
									<!-- Product actions-->
									<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
										<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
									</div>
								</div>
							</div>
							<div class="col mb-5">
								<div class="card h-100">
									<!-- Sale badge-->
									<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
									<!-- Product image-->
									<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
									<!-- Product details-->
									<div class="card-body p-4">
										<div class="text-center">
											<!-- Product name-->
											<h5 class="fw-bolder">Sale Item</h5>
											<!-- Product price-->
											<span class="text-muted text-decoration-line-through">$50.00</span>
											$25.00
										</div>
									</div>
									<!-- Product actions-->
									<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
										<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
									</div>
								</div>
							</div>
							<div class="col mb-5">
								<div class="card h-100">
									<!-- Product image-->
									<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
									<!-- Product details-->
									<div class="card-body p-4">
										<div class="text-center">
											<!-- Product name-->
											<h5 class="fw-bolder">Popular Item</h5>
											<!-- Product reviews-->
											<div class="d-flex justify-content-center small text-warning mb-2">
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
												<div class="bi-star-fill"></div>
											</div>
											<!-- Product price-->
											$40.00
										</div>
									</div>
									<!-- Product actions-->
									<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
										<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>




	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="asset/js/scripts.js"></script>
	<script src="asset/sidebar/js/scripts.js"></script>
</body>

</html>