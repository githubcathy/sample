
<form method="post">
	<label for="sam">Sam: <input type="checkbox" name="Sam" id="sam" value="1" /></label><br />
	<label for="john">John: <input type="checkbox" name="John" id="john" value="1" /></label><br />
	<input name="submit" type="submit" value="submit" />
</form>

<?php

if(isset($_POST['Sam']) && isset($_POST['John'])) { 
    echo 'you selected both Sam and John'; 
} else if(isset($_POST['Sam'])) { 
    echo 'you selected Sam'; 
} else if(isset($_POST['John'])) { 
    echo 'you selected John'; 
} else { 
    echo 'you did not select anyone'; 
}  

?>