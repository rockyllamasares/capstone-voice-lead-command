<?php
	include '../dbconn.php';

	$id = $_GET['product'];

	$sql="DELETE FROM product WHERE productid='$id'";


    if (mysqli_query($conn, $sql)) {
        header("Location: ../../view_product.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);