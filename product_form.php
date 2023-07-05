<h1> ข้อมูลสินค้า </h1>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    ชื่อ <input type="text" name="name" /> <br/>
    ราคา <input type="text" name="price" /> <br/>
    คลังสินค้า <input type="text" name="stock" /> <br/>
    คำอธิบาย <textarea name="description" > </textarea> <br/>
    <input type="submit" value="บันทึกข้อมูล" />

</form>