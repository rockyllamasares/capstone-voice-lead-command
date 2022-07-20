<?php include "serverside/dbconn.php"; ?>
<?php include "template/header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>view product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Kiosk Voice Lead Command</div>
            <div class="list-group list-group-flush">
                <div class="col-md-12">
                    <div id="catList" class="list-group">
                        <?php
                        $sql = "select * from category order by categoryid asc";
                        $catquery = $conn->query($sql);
                        while ($catrow = $catquery->fetch_array()) {
                            $catid = isset($_GET['category']) ? $_GET['category'] : 0;
                            $selected = ($catid == $catrow['categoryid']) ? " selected" : "";
                            echo "<a href=" . "sample" . " class=" . "list-group-item list-group-item-action" . ">" . $catrow['catname'] . "</a>";
                        }
                        ?>
                    </div>
                </div>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">

                </a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">ALL CATEGORY</button>

                    </option>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    </div>
                </div>
            </nav>
            <!-- ===================FORM=================== -->
            <div class="card border-primary mb-3" style="max-width: 100%;">
                <div class="card-header">

                    <center>
                        <b>
                            <h2>COMPLETE LIST</h2>
                            </h2>
                        </b>
                    </center>

                    <!-- =================CATEGORY LIST=================== -->
                    <button class="btn btn-outline-warning">
                        <select id="catList" class="btn btn-default">

                            <option value="0">All Category</option>
                            <?php
                            $sql = "select * from category";
                            $catquery = $conn->query($sql);
                            while ($catrow = $catquery->fetch_array()) {
                                $catid = isset($_GET['category']) ? $_GET['category'] : 0;
                                $selected = ($catid == $catrow['categoryid']) ? " selected" : "";
                                echo "<option$selected value=" . $catrow['categoryid'] . ">" . $catrow['catname'] . "</option>";
                            }
                            ?>

                        </select>
                    </button>

                    <!-- ===================END OF CATEGORY LIST======================= -->

                    <a href="add_new_product.php"><button type="submit" class="btn btn-outline-success">NEW</button></a>
                </div>

                <div class="card-body">
                    <table border="1" width="90%" class="table table-hover">
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
                                <th scope="col">
                                    <center>Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>

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
                                        <td align="center">
                                            <a href="edit_product.php?productid=' . $row['productid'] . '"><button type="button" class="btn btn-outline-warning">EDIT</button></a>
                                            <a href="serverside/product/delete_product.php?product=<?php echo $row['productid']; ?>" onclick="return confirm(\'Are you sure you want to delete ?\')"><button type="button" class="btn btn-outline-danger">DELETE</button></a>

                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </center>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ========================END OF FORM============== -->
            <?php include('modal.php'); ?>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="asset/js/scripts.js"></script>
    <script src="asset/sidebar/js/scripts.js"></script>

    <script type="text/javascript">
         $(document).ready(function() {
        $("#catList").on('change', function() {
            if ($(this).val() == 0) {
                window.location = 'view_product.php';
            } else {
                window.location = 'view_product.php?category=' + $(this).val();
            }
        });
        }));
    </script>
</body>

</html>