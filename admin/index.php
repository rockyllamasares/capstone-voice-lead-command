<?php require "template/header.php"; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            <!-- ====================STSRT OF COMPLETE LIST OF CATEGORY============================================================================================================== -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List of Category
                        </div>
                        <div class="card-header">

                            <center>
                                <b>
                                    <h2>COMPLETE LIST OF CATEGORY</h2>
                                    </h2>
                                </b>
                            </center>
                        </div>
                        <div class="card-body">
                            <table border=" 1" width="90%" class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">
                                            <center>Category
                                        </th>
                                        <th scope="col">
                                            <center>Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php require "serverside/dbconn.php"; ?>
                                    <?php

                                    $sql = "SELECT * FROM category";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_array()) {

                                        echo '<tr class="table-active">';
                                        echo '<td align="center">' . $row['catname'] . '</td>';
                                        echo '<td align="center">
                                            <a href="edit_category.php?categoryid=' . $row['categoryid'] . '"><button type="button" class="btn btn-outline-warning">EDIT</button></a>
                                                    <a href="serverside/category/delete_category.php?categoryid=' . $row['categoryid'] . '"onclick="return confirm(\'Are you sure you want to delete ?\')"><button type="button" class="btn btn-outline-danger" >DELETE</button></a>
                                            </td>';
                                        echo '<tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- =======================END OF COMPLETE LIST OF CATEGORY================================================================================================================ -->
                <!-- ========================START OF PRODUCT LIST========================================================= -->
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List of Product
                        </div>
                        <div class="card-header">

                            <center>
                                <b>
                                    <h2>COMPLETE LIST OF PRODUCT</h2>
                                </b>
                            </center>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" border="1" width="90%" class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">
                                            <center>Photos
                                        </th>
                                        <th scope="col">
                                            <center>Product name
                                        </th>
                                        <th scope="col">
                                            <center>Price
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="table-active">

                                    <center><?php
                                            $where = "";
                                            if (isset($_GET['category'])) {
                                                $catid = $_GET['category'];
                                                $where = " WHERE product.categoryid = $catid";
                                            }
                                            $sql = "SELECT * FROM product left join category on category.categoryid=product.categoryid $where order by product.categoryid asc, productname asc";
                                            $query = $conn->query($sql);
                                            while ($row = $query->fetch_array()) {
                                            ?>
                                            <tr>
                                                <td align="center"><a href="<?php if (empty($row['photo'])) {
                                                                                echo "upload/noimage.jpg";
                                                                            } else {
                                                                                echo $row['photo'];
                                                                            } ?>"><img src="<?php if (empty($row['photo'])) {
                                                                                                echo "upload/noimage.jpg";
                                                                                            } else {
                                                                                                echo $row['photo'];
                                                                                            } ?>" height="30px" width="40px"></a></td>
                                                <td align="center"><?php echo $row['productname']; ?></td>
                                                <td align="center">&#8369; <?php echo number_format($row['price'], 2); ?></td>

                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </center>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- ==========================END OF PRODUCT LIST========================================================================= -->
                </div>
            </div>
        </div>
    </main>
</div>
</div>
<?php require "template/footer.php"; ?>