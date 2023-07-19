<link rel="stylesheet" href="./styles.css" />

<div class="container">
<h1 class="text-center"> กรอกข้อมูลสินค้า </h1>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    ชื่อ <input type="text" name="name" class="input" /> 
    ราคา <input type="text" name="price" class="input" /> 
    คลังสินค้า <input type="text" name="stock" class="input" /> 
    คำอธิบาย <textarea name="description" class="input" > </textarea> 
    <input type="submit" value="บันทึกข้อมูล" class="button" />

</form>
</div>