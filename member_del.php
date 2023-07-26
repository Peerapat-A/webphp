<?php
include "connect.php";

$sql= "DELETE FROM tbl_member WHERE id='$_GET[id]' ";

if(mysqli_query($conn, $sql)) {
    if(file_exists("./images/$_GET[photo]")){
        unlike("./images/$_GET[photo]");
    }

echo"success delete";
header("location: member_show.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>