<?php
require '../dbconn.php';

$catname = $_POST["catname"];

$sql = "INSERT INTO category (catname)
VALUES ('$catname')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../../view_category.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
