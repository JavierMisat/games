<?php 
    if (!defined('R_PILOT')) exit();

    accessOnly();
    
	if ( $userData['admin'] ) {

	    include(ABSPATH . 'assets/requests/admin/' . $a . '.php');

	    header("Content-type: application/json");
	    echo json_encode($data);
	    $GameMonetizeConnect->close();
	    exit();
	}