<?php
   include("db.php");
      
	  $myemail = mysqli_real_escape_string($conn,$_POST['emailfor']);
	  $emailto = mysqli_real_escape_string($conn,$_POST['emailfrom']);
	  $res;
	  if (empty($myemail) || empty($emailto)) {
		  echo "Any value cannot be empty";
	  }
	  else{
			if (isset($_POST['submit'])) {
				$sql = "update requestdetails set result ='true' where emailfrom = '$emailto' && emailfor='$myemail'";
				$res="Accepted";
			} else {
				$sql = "delete from requestdetails where emailfrom = '$emailto' && emailfor='$myemail'";
				$res="Rejected";
			}  
			if (mysqli_query($conn, $sql)) {
				echo '<script>
				alert("Request '.$res.'!!");
				window.location.href="../profile.php";  
				</script>';
				//header('Location: ../profile.php');	
				
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	  }
			
?>