<?php
    include "connect.php";

    $sql = "UPDATE tbl_product SET name='$_POST[name]', price='$_POST[price]', stock='$_POST[stock]', description='$_POST[description]' WHERE id = '$_GET[id]' ";

    if (mysqli_query($conn, $sql)) {

      if (copy($tempname, $folder)) {
        echo "finish upload";
      } else {
        echo "can't upload";
      }
    
        echo "The record has been updated";
        header("location: product_show.php");
      } else {
        echo "Error update fail: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
?>