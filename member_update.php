<?php
    include "connect.php";

    $sql = "UPDATE tbl_member SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', email='$_POST[email]', phone='$_POST[phone]', address='$_POST[address]', photo= '$filename' WHERE id = '$_GET[id]' ";

    if (mysqli_query($conn, $sql)) {

      if (copy($tempname, $folder)) {
        echo "finish upload";
      } else {
        echo "can't upload";
      }

        echo "The record has been updated";
        header("location: member_show.php");
      } else {
        echo "Error update fail: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
?>