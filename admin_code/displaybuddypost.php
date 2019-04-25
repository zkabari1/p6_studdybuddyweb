<?php
   include("db.php");
  // echo "zimple";
	  $myemail = $_SESSION['sessionmail'];
	  //$myemail="hinu";
	  $sql = "SELECT emailfor FROM requestdetails where emailfrom='$myemail' and result='true'";
	  $result = mysqli_query($conn,$sql);
	  //echo $result[0];
      while($r = mysqli_fetch_assoc($result)) {
		  $temp=$r["emailfor"];
		 	$sql1 = "SELECT * FROM posts p,usertable u where p.email=u.email and p.email='$temp'";
			$result1 = mysqli_query($conn,$sql1);
			$rows = array();
			while($r1 = mysqli_fetch_assoc($result1)) {
			$rows[] = $r1;
			}
	  }
	echo json_encode($rows);
?>