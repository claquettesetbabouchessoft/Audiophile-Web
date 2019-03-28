<?php
	if($success){
        echo "successful login";
    }else{
    	$view = "auth/CONNECT";
    	require File::build_path(array("view", "View.php"));
    }
?>