<?php
	include("../include/config.php");
		$ids = $_GET["user_ID"];
		$pic = $_GET["user_pic"];
		$fname = $_GET["fname"];
		$lname = $_GET["lname"];
		$userExist = "";
		$college = "";
	// $ids = "783116335107834";
	// $pic = "http://graph.facebook.com/783116335107834/picture?type=small";
	// $fname = "Rojan";
	// $lname = "Timbas";
	//$query="INSERT INTO tbl_leaderboard (user_id,user_pic,user_fname,user_lname,user_college,user_score) VALUES ('".$id."','".$pic."','".$fname."','".$lname."','ccs',1)";
	//mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** return a callback to the mobile app */
	$query1 = "SELECT * FROM tbl_leaderboard where user_id ='$ids'";
	$result = mysqli_query($conn,$query1) or die (mysqli_error($conn));
	$row = mysqli_fetch_array($result);
		if($row > 0){
			$userExist = "exists";
			$college = $row['user_college'];
		}else{
			$userExist = "notexists";
			$query="INSERT INTO tbl_leaderboard VALUES('','$ids','$pic','$fname','$lname','','','')";
			mysqli_query($conn,$query) or die (mysqli_error($conn));
		}
	echo json_encode(array("id"=>$ids,"uExists"=>$userExist,"college"=>$college));
?>