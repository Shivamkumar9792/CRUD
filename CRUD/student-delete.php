<?php
	include_once 'db-connection.php';
$id = $_GET['id'];
//print_r($id);die();//

	$results = mysqli_query($conn,"DELETE FROM registrations WHERE id = $id");
	 header('location:students_record.php');
?>