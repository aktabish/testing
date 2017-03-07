<?php

$data = array();
// Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);

$data = array('1','2','3');
// response back.
echo json_encode($data);

?>