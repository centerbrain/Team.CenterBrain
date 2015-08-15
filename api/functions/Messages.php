<?php
	$result = $GLOBALS['con']->query ("SELECT * FROM msg ORDER BY id DESC");
	$result->data_seek(0);
	$rows = array();
	while ($row = $result->fetch_assoc()) {
		array_push($rows, $row);
	}
	echo json_encode($rows);
?>
