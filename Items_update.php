<?php

$id = intval($_REQUEST['id']);
$NAME = htmlspecialchars($_REQUEST['NAME']);

include 'conn.php';

$sql = "update pbm_items set NAME='$NAME'
where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,		
		'NAME' => $NAME
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>