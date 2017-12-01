<?php
//include connection
require("connection.php");


	$query="SELECT * FROM chat_tbl ORDER by chat_date_time DESC";
	$result=mysqli_query($connection,$query);
	$res=array();
	while ($row=mysqli_fetch_array($result)) {

		array_push($res, array('chat_msg'=>$row[2]));
	}
	 echo json_encode(array("result" =>$res));

?>
