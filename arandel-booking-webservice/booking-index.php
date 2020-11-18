<?php
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12377310", "WDkABxdNNG", "sql12377310");

$notes = $_POST['notes'];
$input_date= date('Y-m-d',strtotime($_POST['date']));
$selected_service = $_POST['s_name'];
$selected_time = $_POST['time_sched'];


if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
}
else{
	$sql = mysqli_query($conn, "INSERT INTO reservation(r_name, email, contact_number, r_date, notes, time_id, s_id) VALUES ('$r_name', '$email', '$contact', '$r_date', '$notes',
    '$selected_time','$selected_service')");

	//Header("Location: booking-index.php");
}
?>