<?php
	if($success){
		echo "user added";
	}else{
		$view = "auth/ADD";
		require File::build_path(array("view", "View.php"));
	}
?>