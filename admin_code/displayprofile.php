<?php
   include("db.php");
	  $myemail = $_SESSION['sessionmail'];
      $sql = "SELECT * FROM usertable where email = '$myemail'";
	  $result = mysqli_query($conn,$sql);
	  $rows = array();
		while($r = mysqli_fetch_assoc($result)) {
		$rows[] = $r;
		}
	echo json_encode($rows);
?>