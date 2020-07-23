<?php
require('includes/config.php');
$result = mysqli_query($conn,"SELECT * FROM book");
?>
<!DOCTYPE html>
<html>

<body>
<table>
<tr>

<td>Book Name:</td>
<td>Description:</td>
<td>Publisher:</td>
<td>Edition:</td>
<td>ISBN:</td>
<td>PRICE:</td>
<td>Action</td>
</tr>

<br>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["b_nm"]; ?></td>
<td><?php echo $row["b_desc"]; ?></td>
<td><?php echo $row["b_publisher"]; ?></td>
<td><?php echo $row["b_edition"]; ?></td>
<td><?php echo $row["b_isbn"]; ?></td>
<td><?php echo $row["b_price"]; ?></td>
<td><a href="process_updatebook.php?b_id=<?php echo $row["b_id"]; ?>">Update</a></td>
</tr>

<?php
$i++;
}
?>


</table>
</body>
</html>