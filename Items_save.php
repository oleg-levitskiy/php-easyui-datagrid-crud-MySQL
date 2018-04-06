<?php

$NAME = htmlspecialchars($_REQUEST['NAME']);
$username = htmlspecialchars($_REQUEST['username']);

include 'conn.php';

$sql = "insert into pbm_items(NAME) 
				   values('$NAME')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'NAME' => $NAME
		));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>