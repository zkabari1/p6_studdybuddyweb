<?php
   include("db.php");
      $sql = "SELECT * FROM posts p,usertable u where p.email=u.email and type='public'";
	  $result = mysqli_query($conn,$sql);
	  $rows = array();
		while($r = mysqli_fetch_assoc($result)) {
		$rows[] = $r;
		}
	echo json_encode($rows);
?>