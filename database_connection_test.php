<?php
require __DIR__."./database_credentials.php";

// CREATE CONNECTIONS TABLE

$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DBNAME);

//check connection 
if ($connect -> connect_error){
    die ("connection failed: " . $connect ->connect_error);

    echo "connection failed ";

} 


else{
    echo "connection successful<br>"; 
}


?>