<?php
require __DIR__."./database_credentials.php";

// CREATE CONNECTIONS TABLE

$connect = new mysqli (SERVER_NAME, USER_NAME, PASSWORD, DBNAME);

//check connection 
if ($connect -> connect_error){
    die ("connection failed: " . $connect ->connect_error);

    echo "connection failed ";

} 


else{
    echo "connection successful"; 
}


?>