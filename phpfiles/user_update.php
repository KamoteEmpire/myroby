<?php
	include("../include/config.php");
		$college = $_GET["user_college"];
		$id = $_GET["user_id"];
	// $ids = "783116335107834";
	// $pic = "http://graph.facebook.com/783116335107834/picture?type=small";
	// $fname = "Rojan";
	// $lname = "Timbas";
	//$query="INSERT INTO tbl_leaderboard (user_id,user_pic,user_fname,user_lname,user_college,user_score) VALUES ('".$id."','".$pic."','".$fname."','".$lname."','ccs',1)";
	//mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** return a callback to the mobile app */
	$query = "UPDATE tbl_leaderboard SET user_college = '$college' WHERE user_id ='$id'";
	mysqli_query($conn,$query) or die (mysqli_error($conn));
	echo json_encode(array("id"=>$id));
?>