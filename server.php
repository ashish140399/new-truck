<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'favourites');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


   // initialize errors variable
	$errors = "";

	// insert a quote if submit button is clicked
	if (isset($_POST['submit_btn'])) {
		if (empty($_POST["task"])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO fav_name (restaur_name) VALUES ('$task')";
			mysqli_query($conn, $sql);
			
		}
	}	

// delete task
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($conn, "DELETE FROM tasks WHERE id=".$id);
	
}





?>