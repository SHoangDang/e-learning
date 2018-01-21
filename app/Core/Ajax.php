<?php



// system ajax: pass param to method of class

if(!empty($_POST) && isset($_POST['method']) && isset($_POST['name_controller'])) {
	// create new object from name controller
    //$object = new $_POST['name_controller']();

    // create new method of controller
    //$object->$_POST['method']();
    try {
    	$name_controller = $_POST['name_controller'];
	    $object = new $name_controller(); // Throws an Error object in PHP 7.
	} catch (Error $e) {
	    echo $e->getMessage(), "\n";
	}

	try {
		$method = $_POST['method'];
	    $object->$method(); // Throws an Error object in PHP 7.
	} catch (Error $e) {
	    echo $e->getMessage(), "\n";
	}

}



?>