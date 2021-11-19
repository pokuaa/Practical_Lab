<!-- Richida Pokuaa Gyimah -->

<!DOCTYPE HTML>
<html>
<head><title> Trial </title></head>
<body>

<!--form to allow user search and delete input from the database -->
	<h5> FIRST SEARCHBOX <h5>
	<form method = "POST" action = "actions.php">
		 <input type = "text" name = "searchBox" value = "<?php
	echo $_SESSION['searchBox'] ?? "" ?>">

		<input type = "submit" name = "submit" value = "search">
		<input type = "submit" name = "del" value = "delete">
		
	</form>
	
<!-- form to allow user add to the database -->
	<h5> SECOND SEARCHBOX <h5>
	<form method = "POST" action = "results_page.php">
		 <input type = "text" name = "SEARCHING"> 
		<input type = "submit" name = "submit" value = "Add">
	</form>

</body>
</html>




