<?php
require('includes/config.php');

$query = "DELETE FROM book WHERE b_id='" . $_GET["b_id"] . "'";
		
			if (mysqli_query($conn, $query)) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . mysqli_error($conn);
			}
			mysqli_close($conn);

?>
