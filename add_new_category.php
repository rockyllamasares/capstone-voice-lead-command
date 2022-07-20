<?php require "template/header.php"; ?>

<br />

<br />
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">
        <center>
            <b>
                <h2>ADD NEW CATEGORY</h2>
            </b>
        </center>
        <a href="view_category.php"><button class="btn btn-outline-danger">Cancel</button></a>
    </div>
    <form method="POST" action="serverside/category/add_category.php">
        <div class="card-body">
            <table border="1" width="90%" class="table table-hover">
                <div class="form-group">
                    <tr class="table-active">
                        <td>

                            <label class="col-form-label" for="catname"><b>Enter new category</b></label>
                            <input type="text" class="form-control" placeholder="new category" id="catname" name="catname" required>

                        </td>
                    </tr>
                </div>
            </table>
            <button type="submit" class="btn btn-outline-success">Add</button>
        </div>
    </form>
    </div>
</div>

<?php require "footer.php"; ?>