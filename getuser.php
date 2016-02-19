<?php 

$username1 = $_GET["username"];
$password1 = $_GET["password"];

//echo "username=".$username1.", password=".$password1;


if($username1 == "" || $password1 == "")
{
	echo "Please input your username and password!";
	echo "<script>setTimeout('window.close();', 1500);</script>";
	
}else
{

		$GlobalSQLink = mysqli_connect("205.178.146.105", "1_02c7fb8_8", "FhSIPeKJNY")
        or die("Could not connect");

        mysqli_select_db($GlobalSQLink, "1_02c7fb8_8")
        or die("Could not select database");
		
			$queryUser ="SELECT * from user WHERE username='".$username1."'";
				$result = mysqli_query($GlobalSQLink, $queryUser) or die(mysqli_error($GlobalSQLink));
				if ($result && $row = mysqli_fetch_assoc($result)) {
						
								$ID	= $row["ID"];       			
								$username	= $row["username"];       			
								$password	= $row["password"];       			
						
														
						mysqli_free_result( $result );
				  }
				  
				  
				 if($password == $password1)
				 {
					 header('Location: http://www.deltablindssupply.com/label/label.php?username='.$username1);
				 }else
				 {
					 echo "Please login again!";
					 echo "<script>setTimeout('window.close();', 1500);</script>";
				 }
		
		
}
		
?>			
