<?php require "template/header.php"; ?>


<!-- ==============================VIEW CATEGORY============================ -->

<div class="card border-primary mb-3" style="max-width: 100%;">
    /* This is the header of the table. */
    <div class="card-header">

        <center>
            <b>
                <h2>COMPLETE LIST</h2>
                </h2>
            </b>
        </center>
        <a href="index.php"><button type="submit" class="btn btn-outline-warning">BACK TO HOME</button></a>
        <a href="add_new_category.php"><button type="submit" class="btn btn-outline-success">NEW</button></a>
    </div>
    <!-- /* This is the table that will display the data from the database. */ -->
    <div class="card-body">
        <table border="1" width="90%" class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <!-- <th scope="col">
            <center>Utang ID
          </th> -->
                    <th scope="col">
                        <center>Category
                    </th>
                    <th scope="col">
                        <center>Actions
                    </th>
                </tr>
            </thead>
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
        </table>

    </div>
</div>
<!-- ===================================END OF VIEW CATEGORY=============================== -->
<?php require "template/footer.php"; ?>