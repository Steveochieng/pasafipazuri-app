<?php
//include connection
require("connection.php");


	$query="SELECT * FROM users_tbl ORDER by chat_date_time DESC";
	$result=mysqli_query($connection,$query);
	$res=array();
	while ($row=mysqli_fetch_array($result)) {

		array_push($res, array('firstname'=>$row[1],'lastname'=>$row[2]));
	}
	 echo json_encode(array("result" =>$res));

?>
