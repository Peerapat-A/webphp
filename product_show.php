<link rel="stylesheet" href="./styles.css" />
<?php
    include "connect.php";

    $sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>

  <table class="table">
    <th> product name </th>
    <th> price </th>
    <th> stock </th>
    <th> description </th>
    <th> picture </th>
    <th> Edit </th>
    <th> Delete </th>
  
  <?php
    while($row = mysqli_fetch_assoc($result)) {
  
  ?>
    <tr>
        <td><?php echo"$row[name]"; ?></td>
        <td><?php echo"$row[price]"; ?></td>
        <td><?php echo"$row[stock]"; ?></td>
        <td><?php echo"$row[description]"; ?></td>
        <td><img src="./images/<?php echo $row[photo] ?>" width="200px" />  </td>
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