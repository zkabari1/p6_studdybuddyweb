<?php
   include("db.php");
      
	  $myname = mysqli_real_escape_string($conn,$_POST['fname']);
	  $mylname = mysqli_real_escape_string($conn,$_POST['lname']);
	  $mymail = mysqli_real_escape_string($conn,$_POST['mail']);
	  $mysub = mysqli_real_escape_string($conn,$_POST['sub']);
	  $mymsg = mysqli_real_escape_string($conn,$_POST['msg']);
      
	  if (empty($myname) || empty($mylname) || empty($mymail) || empty($mymsg)) {
		  echo "All fields required";
	  }
	  else{
		  
	  $sql = "INSERT INTO reviews (fname,lname,email,sub,msg)
			VALUES ('$myname','$mylname','$mymail','$mysub','$mymsg')";
	 	
		if (mysqli_query($conn, $sql)) {
			echo "success";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	  }
	  header('Location: ../index.php');
			
?>