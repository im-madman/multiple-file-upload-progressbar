<?php

 $success = 0;

if( strlen($_FILES['video']['name']) > '0' ) {

    $target_file = "files/".basename($_FILES["video"]["name"]);;

	if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        $success = 1;
    } else {
        $sucess = 0;
    }
}

echo json_encode( array("success" => $success, "file_path" => $target_file ) );
?>