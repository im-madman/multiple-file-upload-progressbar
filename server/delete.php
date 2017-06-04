<?php

$success = 0;

$filePath = $_POST['file_path'];

if ( file_exists($filePath) ) {

	 unlink( $filePath  );
	 $success = 1;
}

echo json_encode(array( "success" => $success ));
?>