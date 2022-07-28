<?php require "template/header.php"; ?>
<?php require "serverside/dbconn.php"; ?>

<br />

<br />
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">
        <center>
            <b>
                <h2>ADD &nbsp; NEW &nbsp; PRODUCT</h2>
            </b>
        </center>
        <a href="view_product.php"><button class="btn btn-outline-danger">Cancel</button></a>
    </div>
    <form method="POST" action="serverside/product/add_product.php" enctype="multipart/form-data">
        <div class="card-body">
            <table border="1" width="90%" class="table table-hover">
                <div class="form-group">
                    <tr class="table-active">
                        <td>

                            <label class="col-form-label" for="catname"><b>Product Name</b></label>
                            <input type="text" class="form-control" placeholder="Enter Product Name" id="pname" name="pname" required>

                        </td>
                        <td>

                            <label class="col-form-label" for="catname"><b>Category</b></label>
                            <select class="form-control" name="category">
                                <?php
                                $sql = "select * from category order by categoryid asc";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_array()) {
                                ?>
                                    <option value="<?php echo $row['categoryid']; ?>"><?php echo $row['catname']; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </td>
                        <td>

                            <label class="col-form-label" for="catname"><b>Price</b></label>
                            <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price" required>

                        </td>
                        <td>

                            <label class="col-form-label" for="catname"><b>Photo</b></label><br>
                            <input type="file" name="uploadfile" id="uploadfile">

                        </td>
                    </tr>
                </div>
            </table>
            <button type="submit" name="submit" class="btn btn-outline-success">Add</button>
        </div>
    </form>
</div>
</div>

<?php require "template/footer.php"; ?>