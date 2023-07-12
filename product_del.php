<?php
include "connect.php";

$sql= "DELETE FROM tbl_product WHERE id='$_GET[id]' ";

if(mysqli_query($conn, $sql)) {
echo"success delete";
header("location: product_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>