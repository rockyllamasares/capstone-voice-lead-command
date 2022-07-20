<?php require "template/header.php"; ?>
<?php include "serverside/dbconn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>kiosk voice lead command</title>
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
	<style>
		.bg-dark {
			background-image: url("asset/image/bg.jpg");
		}
	</style>
</head>

<body>



	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="border-end bg-white" id="sidebar-wrapper">
			<div class="sidebar-heading border-bottom bg-light">Kiosk Voice Lead Command</div>
			<div class="list-group list-group-flush">
				<?php
				$sql = "select * from category order by categoryid asc limit 1";
				$fquery = $conn->query($sql);
				$frow = $fquery->fetch_array();
				?>
				<li class="active" ><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
				<?php

				$sql = "select * from category order by categoryid asc";
				$nquery = $conn->query($sql);
				$num = $nquery->num_rows - 1;

				$sql = "select * from category order by categoryid asc limit 1, $num";
				$query = $conn->query($sql);
				while ($row = $query->fetch_array()) {
				?>
					<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
				<?php
				}
				?>

				<!-- ==================== sql category prepared to delete======================= -->
				<?php
						$sql = "SELECT * FROM category";
						$result = $conn->query($sql);
						while ($row = $result->fetch_array()) {
						?>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><?php echo $row['catname'] ?></a>
				<?php } ?>
				<!-- =====================sql category prepared to delete=================== -->
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Top navigation-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<button class="btn btn-primary" id="sidebarToggle">CATEGORY</button>
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

				<section class="py-5">
					<div class="container px-4 px-lg-5 mt-5">
						<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
							<!-- ========================================================================================= -->
							<?php
							$sql = "select * from category order by categoryid asc limit 1";
							$fquery = $conn->query($sql);
							$ftrow = $fquery->fetch_array();
							?>
							<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
								<?php

								$sql = "select * from product where categoryid='" . $ftrow['categoryid'] . "'";
								$pfquery = $conn->query($sql);
								$inc = 4;
								while ($pfrow = $pfquery->fetch_array()) {
									$inc = ($inc == 4) ? 1 : $inc + 1;
									if ($inc == 1) echo "<div class='row'>";
								?>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-heading text-center">
												<b><?php echo $pfrow['productname']; ?></b>
											</div>
											<div class="panel-body">
												<img src="<?php if (empty($pfrow['photo'])) {
																echo "upload/noimage.jpg";
															} else {
																echo $pfrow['photo'];
															} ?>" height="225px;" width="100%">
											</div>
											<div class="panel-footer text-center">
												&#x20A8; <?php echo number_format($pfrow['price'], 2); ?>
											</div>
										</div>
									</div>
								<?php
									if ($inc == 4) echo "</div>";
								}
								if ($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
								if ($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
								if ($inc == 3) echo "<div class='col-md-3'></div></div>";
								?>
							</div>
							<?php

							$sql = "select * from category order by categoryid asc";
							$tquery = $conn->query($sql);
							$tnum = $tquery->num_rows - 1;

							$sql = "select * from category order by categoryid asc limit 1, $tnum";
							$cquery = $conn->query($sql);
							while ($trow = $cquery->fetch_array()) {
							?>
								<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
									<?php

									$sql = "select * from product where categoryid='" . $trow['categoryid'] . "'";
									$pquery = $conn->query($sql);
									$inc = 4;
									while ($prow = $pquery->fetch_array()) {
										$inc = ($inc == 4) ? 1 : $inc + 1;
										if ($inc == 1) echo "<div class='row'>";
									?>
										<div class="col-md-3">
											<div class="panel panel-default">
												<div class="panel-heading text-center">
													<b><?php echo $prow['productname']; ?></b>
												</div>
												<div class="panel-body">
													<img src="<?php if ($prow['photo'] == '') {
																	echo "upload/noimage.jpg";
																} else {
																	echo $prow['photo'];
																} ?>" height="225px;" width="100%">
												</div>
												<div class="panel-footer text-center">
													&#x20A8; <?php echo number_format($prow['price'], 2); ?>
												</div>
											</div>
										</div>
									<?php
										if ($inc == 4) echo "</div>";
									}
									if ($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>";
									if ($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>";
									if ($inc == 3) echo "<div class='col-md-3'></div></div>";
									?>
								</div>
							<?php
							}
							?>



							<!-- =========================================================================== -->
							<div class="col mb-5">
								<div class="card h-100">
									<!-- Product image-->
									<img class="card-img-top" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Blag-F1I9HmWBEf6jGLw5gHaFF%26pid%3DApi&f=1" alt="..." />
									<!-- Product details-->
									<div class="card-body p-4">
										<div class="text-center">
											<!-- Product name-->
											<h5 class="fw-bolder">name</h5>
											<!-- Product price-->
											php 500

										</div>
									</div>
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




	<?php require "template/footer.php"; ?>
</body>

</html>