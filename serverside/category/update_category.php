<?php
require '../dbconn.php';

$categoryid = $_POST['categoryid'];
$catname = $_POST['catname'];

$sql = "UPDATE category SET catname = '$catname' WHERE categoryid = '$categoryid'";

if (mysqli_query($conn, $sql)) {
    header("Location: ../../view_category.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
