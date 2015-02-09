<?php
	include("../include/config.php");
	
	$query = "SELECT * from tbl_leaderboard order by user_score DESC LIMIT 10";//query to select top 10
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result))
	{
	   $return[] = array(
		  'user_id' => $row[1],
		  'user_pic' => $row[2],
		  'user_fname' => $row[3],
		  'user_lname' => $row[4],
		  'user_college' => $row[5],
		  'user_score' => $row[6],
	   );
	}
	
	echo json_encode($return);
?>