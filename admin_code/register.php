<?php   include("db.php");      	  $myname = mysqli_real_escape_string($conn,$_POST['name']);	  $myuni = mysqli_real_escape_string($conn,$_POST['university']);	  $mymjr = mysqli_real_escape_string($conn,$_POST['major']);	  $myphn = mysqli_real_escape_string($conn,$_POST['phone']);      $mytype = mysqli_real_escape_string($conn,$_POST['type']);	  $myemail = mysqli_real_escape_string($conn,$_POST['email']);	  $mypasswd = mysqli_real_escape_string($conn,$_POST['password']);       	  if (empty($myname) || empty($myuni) || empty($mymjr) || empty($myphn) || empty($mytype) || empty($myemail) || empty($mypasswd)) {		  echo "Any value cannot be empty";	  }	  else{		  	  $sql = "INSERT INTO usertable (name,university,major,phone,type,email,password)			VALUES ('$myname','$myuni','$mymjr','$myphn','$mytype','$myemail','$mypasswd')";	 			if (mysqli_query($conn, $sql)) {			echo "success";			session_start();			$_SESSION['sessionmail'] = $myemail;			header('Location: ../profile.php');						} else {			echo "Error: " . $sql . "<br>" . mysqli_error($conn);			}	  }				?>