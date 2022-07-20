<?php
require '../dbconn.php';

$categoryid = $_GET['categoryid'];

$sql = "DELETE FROM category WHERE categoryid = '$categoryid'";

if (mysqli_query($conn, $sql)) {
    header("Location: ../../view_category.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
