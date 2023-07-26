<link rel="stylesheet" href="./styles.css" />
<div class="container">
<h1 class="text-center"> แก้ไขข้อมูลสินค้า </h1>
<?php
    include "connect.php";
    $sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

?>
<form action="product_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
    ชื่อ <input type="text" name="name" value="<?php echo $row[name]; ?>" class="input"/>
    ราคา <input type="text" name="price" value="<?php echo $row[price]; ?>" class="input"/>
    คลังสินค้า <input type="text" name="stock" value="<?php echo $row[stock]; ?>" class="input"/>
    คำอธิบาย <textarea name="description" class="input"> <?php echo $row[description]; ?> </textarea>
    แนบรูป <input type="file" name="photo" value="<?php echo $row[photo]; ?>" class="input" /> 
    <input type="submit" value="update" class="button"/>

</form>
</div>