<?php
$result = [
	'result' => false
];

if(isset($_POST['id'])){
	$userId = $_POST['id'];
	require '../database/db.php';

	$dbConnect = DB::connect();

	$stmt = $dbConnect->prepare("DELETE FROM users where id = ?");
	$stmt->bind_param('s', $userId);
	$stmt->execute();

	$result = [
		'result' => true
	];
}

header('Content-type: application/json');
echo json_encode($result);