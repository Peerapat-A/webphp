<link rel="stylesheet" href="./styles.css" />
<div class="center">
<?php
    include "connect.php";

    $sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>

  <table class="table">
    <th width=35%> product name </th>
    <th width=5%> price </th>
    <th width=5%> stock </th>
    <th width=45%> description </th>
    <th width=5%> Edit </th>
    <th width=5%> Delete </th>
  
  <?php
    while($row = mysqli_fetch_assoc($result)) {
  
  ?>
    <tr>
        <td><?php echo"$row[name]"; ?></td>
        <td><?php echo"$row[price]"; ?></td>
        <td><?php echo"$row[stock]"; ?></td>
        <td><?php echo"$row[description]"; ?></td>
        <td><?php echo"<a href='product_edit.php?id=$row[id]'> Edit </a>"; ?></td>
      <td><?php echo"<a href='product_del.php?id=$row[id]'> Delete </a>"; ?></td>
  </tr>
  
  <?php
    }
  ?>
  
  </table>
  
  <?php
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
  
  ?>
  <div>