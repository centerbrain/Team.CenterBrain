<?php
    include 'init.php';
	$result = $GLOBALS['con']->query ("SELECT * FROM msg");
	$result->data_seek(0);
	$rows = array();
	while ($row = $result->fetch_assoc()) {
		array_push($rows, $row);
	}
	echo json_encode($rows);
?>
