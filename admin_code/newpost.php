<?php
   include("db.php");
      session_start();
	  $myemail = $_SESSION['sessionmail'];
	  $mytitle = mysqli_real_escape_string($conn,$_POST['title']);
	  $mysummary = mysqli_real_escape_string($conn,$_POST['summary']);
	  $mylink = mysqli_real_escape_string($conn,$_POST['link']);
      $mydesc = mysqli_real_escape_string($conn,$_POST['desc']);
	  
	  if (empty($myemail) || empty($mytitle) || empty($mysummary)) {
		  echo "Title or Summary cannot be empty";
	  }
	  else{
		  
	  $sql = "INSERT INTO posts (email,title,summary,link,description)
			VALUES ('$myemail','$mytitle','$mysummary','$mylink','$mydesc')";
	 	
		if (mysqli_query($conn, $sql)) {
			echo "success";
			header('Location: ../profile.php');	
		
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	  }
?>