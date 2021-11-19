<?php 
require 'database_connection_test.php';

    
    //QUERIES TO EDIT OR UPDATE THE FORM

    //select query
    $sql = "SELECT * FROM practical_lab_table";       
    $result = $connect->query($sql);

    //executing  select query
    echo "<br>"."Lab_id "." "." search_null"."<br>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["Lab_id"]. "" . $row["search_null"]."<br>";
        }
    } else {
        echo "<br>"."0 results";
    }
?>
<!-- form action to allow user update or edit the database table -->
<form action="EditForm.php" method="post">  
    <br><br>
    <label>Enter id of search term to modify: </label><input type="text" name="id" style="width:40px;" />  
    <label>Enter new search term to update: </label><input type="text" name="new" style="width:80px;"/> 
    <input type="submit" value="Update" name="update" />
</form> 

<?php
    //checking if form has been submitted
    

    if(isset($_POST['update'])){
        $id = $_POST["id"];
    }
    
    if(isset($_POST['update'])){
        $new = $_POST["new"];
    }

    //Query

    //update query
    $sql2 = "UPDATE practical_lab_table SET search_null='$new' WHERE Lab_id='$id'";

    if(isset($_POST['update'])){

        //select query - to check that record exist in database table.
        $sql3 = "SELECT Lab_id, search_null FROM practical_lab_table WHERE Lab_id='$id'";       
        $result_update = $connect->query($sql3);
        
        if($result_update->num_rows > 0){
            if ($connect->query($sql2) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $connect->error;
            }
        }else{
            echo "<br>"."Record you want to update doesn't exist"."<br>";
        }
   
    }

    $connect->close();

    header("location:my_form.php");
   
?>


