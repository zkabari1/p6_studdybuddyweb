<?php
   include("db.php");
      $sql = "SELECT fname, lname, msg FROM reviews";
	  $result = mysqli_query($conn,$sql);
	  $rows = array();
		while($r = mysqli_fetch_assoc($result)) {
		$rows[] = $r;
		}
	echo json_encode($rows);
?>