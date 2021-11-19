<?php 
require 'database_connection_test.php';

// used to select a value from the database table when the user clicks on search
if (isset($_POST["submit"])){
	$VALUE = $_POST["searchBox"];
    $sql = "SELECT Lab_id, search_null FROM practical_lab_table WHERE search_null ='$VALUE'";

   
    // the users input is saved in the results variable 
    // the if statement searches into the database to fetch what the user enetered
	$result = $connect->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<br>".$row["search_null"]."<br>";

        }

    //if the value entered is not found, the page prints null
    }else{
        echo "null";
    }	
}

// otherwise when the user selects delete
// the value the user wants to delete is saved in a DEL_VALUE variable
else if (isset($_POST["del"])){
	$DEL_VALUE = $_POST["searchBox"];


    // sql to delete a record option 1
        $sql = "DELETE FROM practical_lab_table WHERE search_null ='$DEL_VALUE'";
       

    // the value is successfully deleted if the value entered is in the database
        if ($connect->query($sql) == TRUE) {
        echo "Record deleted successfully";
        } else {

    //otherwise echoes the connect-error message
        echo "Error deleting record: " . $connect->error;
        }
}

	
?>
