<?php

/*displays a welcome message */
echo "Hi all, you are all welcome to my page <br>";

/*calls my_add_functions.php file into the works.php file */
require "my_add_functions.php";


/*calls the other_functions.php file into the works.php file */
include "other_functions.php";

/*passes a value into the addvalues() functions in the my_add_functions.php file and executes the result*/
$value = addvalues(30, 6);

/*displays the vlaue in the variable value*/
echo $value;
echo "<br>";

/*displays the value of productval when the value is passed in*/
echo productval($value); 

?>