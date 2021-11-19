

<?php
// requires the php file database_connection_test.php
require 'database_connection_test.php';
if (isset( $_POST["SEARCHING"])){


//value entered by user is saved in value	
	$VALUE = $_POST['SEARCHING']; 

	 //inserts value into database table practical_lab_table
	 $sql = "INSERT INTO practical_lab_table(search_null) VALUES ('$VALUE')";


	 //it displays successfully inserted if value entered is inserted into the table
	 if ($connect->query($sql)){
		echo $VALUE . " successfully added";

	 }

	 //otherwise it prints the connect error message
	 else{
		 echo $connect-> error;
	 }

	}

	?>
	
