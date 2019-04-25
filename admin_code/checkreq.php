<?php
   include("db.php");
    $myemail = $_SESSION['sessionmail'];
		//$myemail="hinu";
	  $sql = "SELECT * FROM requestdetails where emailfor = '$myemail' and result != 'true'";
	  $result1 = mysqli_query($conn,$sql);
	  $rows = array();
	 	while($r = mysqli_fetch_assoc($result1)) {
			$myemail1=$r["emailfrom"];
			$sql = "SELECT * FROM usertable where email = '$myemail1'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$rows[] = $row;
		}
	echo json_encode($rows);
		
?>