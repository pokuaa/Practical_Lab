<!-- Richida Pokuaa Gyimah -->

<!DOCTYPE HTML>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title> Trial </title></head>
<body>

<!--form to allow user search and delete input from the database -->
	<h5> FIRST SEARCHBOX <h5>
	<form method = "POST" action = "actions.php" >
		 <input type = "text"  name = "searchBox" value = "<?php
	echo $_SESSION['searchBox'] ?? "" ?>">

		<input type = "submit" name = "submit" value = "search">
		<input type = "submit" name = "del" value = "delete">
		
	</form>
	
<!-- form to allow user add to the database -->
	<h5> SECOND SEARCHBOX <h5>
	<form method = "POST" action = "results_page.php" onsubmit = "return Validate(event)">
		 <input type = "text" id = "SEARCHING"  name = "SEARCHING" > 
		<input type = "submit" name = "submit" value = "Add">
	</form>

	<script src = "regex.js"></script>
	<script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>

	
	
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

 
</body>
</html>




