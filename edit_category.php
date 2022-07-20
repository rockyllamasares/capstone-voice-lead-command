<?php require "template/header.php"; ?>

<br />

<br />
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">
        <center>
            <b>
                <h2>Edit Name of &nbsp;<?php
                                        $categoryid = $_GET['categoryid'];
                                        $sql = "SELECT * FROM category WHERE categoryid = '$categoryid'";
                                        $result = $conn->query($sql);

                                        while ($row = $result->fetch_array()) {
                                            echo " \"" . $row['catname']." \" &nbsp Category";
                                        }
                                        ?>
                </h2>
            </b>
        </center>
        <a href="view_category.php"><button class="btn btn-outline-danger">Cancel</button></a>
    </div>
    <div class="card-body">
        <br />
        <?php
        $categoryid = $_GET['categoryid'];
        $sql = "SELECT * FROM category WHERE categoryid = '$categoryid'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
        ?>
            <form method="POST" action="serverside/category/update_category.php">
                <table border="1" width="90%" class="table table-hover">
                    <div class="form-group">

                        <tr class="table-active">
                            <td>

                                <label class="col-form-label" for="catname"><b>Category Name</b></label>
                                <input type="text" class="form-control" placeholder="category Name" id="catname" name="catname" value="<?php echo $row['catname']; ?>">

                            </td>
                        </tr>   
                    </div>
                </table>
                <button type="submit" name="categoryid" id="categoryid" value="<?php echo $row['categoryid']; ?>" class="btn btn-outline-success">Update</button>
            </form>

        <?php
        }
        ?>

    </div>
</div>

<?php require "footer.php"; ?>