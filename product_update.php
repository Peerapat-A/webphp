<?php
    include "connect.php";

    $sql = "UPDATE tbl_product SET name='$_POST[name]', price='$_POST[price]', stock='$_POST[stock]', description='$_POST[description]' WHERE id = '$_GET[id]' ";

    if (mysqli_query($conn, $sql)) {
        echo "New record updated";
        header("location: product_show.php");
      } else {
        echo "Error update fail: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
?>