<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_product (name, price, stock, description, photo)
VALUES ('$_POST[name]', '$_POST[price]', '$_POST[stock]', '$_POST[description]', '$filename')";

if (mysqli_query($conn, $sql)) {
  echo "Recording product success";
  header("location: product_show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>