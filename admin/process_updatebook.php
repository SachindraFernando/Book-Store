<?php
require('includes/config.php');


if(count($_POST)>0) {
    $query =   "UPDATE book set b_nm='" . $_POST['b_nm'] . "', b_desc='" . $_POST['b_desc'] . "', b_publisher='" . $_POST['b_publisher'] . "' ,b_edition='" . $_POST['b_edition'] . "' ,b_isbn='" . $_POST['b_isbn'] . "', b_price='" . $_POST['b_price'] . "' WHERE b_id='" . $_POST['b_id'] . "'";
mysqli_query($conn,$query);

header("location: update_book.php");

$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM book WHERE b_id='" . $_GET['b_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Book Name:<br>
<input type="hidden" name="b_id" class="txtField" value="<?php echo $row['b_id']; ?>">
<input type="text" name="b_nm"  value="<?php echo $row['b_nm']; ?>">
<br>

Description:<br>
<input type="text" name="b_desc" class="txtField" value="<?php echo $row['b_desc']; ?>">
<br>
Publisher:<br>
<input type="text" name="b_publisher" class="txtField" value="<?php echo $row['b_publisher']; ?>">
<br>
Edition:<br>
<input type="text" name="b_edition" class="txtField" value="<?php echo $row['b_edition']; ?>">
<br>
ISBN:<br>
<input type="text" name="b_isbn" class="txtField" value="<?php echo $row['b_isbn']; ?>">
<br>

PRICE:<br>
<input type="text" name="b_price" class="txtField" value="<?php echo $row['b_price']; ?>">
<br>

<input type="submit" name="submit" value="Update" class="buttom">

</form>
</body>
</html>