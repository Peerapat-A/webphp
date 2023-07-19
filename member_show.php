<link rel="stylesheet" href="./styles.css" />
<div class="center">
<?php
    include "connect.php";

    $sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>

<table class="table">
  <th width=25%> name - surname </th>
  <th width=20%> email </th>
  <th width=15%> phone </th>
  <th width=30%> address </th>
  <th width=5%> Edit </th>
  <th width=5%> Delete </th>

<?php
  while($row = mysqli_fetch_assoc($result)) {

?>
  <tr>
      <td><?php echo"$row[firstname] $row[lastname]"; ?></td>
      <td><?php echo"$row[email]"; ?></td>
      <td><?php echo"$row[phone]"; ?></td>
      <td><?php echo"$row[address]"; ?></td>
      <td><?php echo"<a href='member_edit.php?id=$row[id]'> Edit </a>"; ?></td>
      <td><?php echo"<a href='member_del.php?id=$row[id]'> Delete </a>"; ?></td>
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
