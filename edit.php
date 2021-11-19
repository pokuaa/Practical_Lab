<?php

require 'database_connection_test.php';

    echo $_POST["Lab_id"];
    $val = $_POST["Newval"];
    #$id = $_POST["Lab_id"];
    $sql = "UPDATE practical_lab_table SET Search_null = '$val' WHERE Lab_id = '$id'";
    $result = $connect->query($sql);
    
    if ($result) {
        echo "eljfalsdjfsa";
    }
?>