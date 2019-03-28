<?php
    //File helps building imports
    require_once 'File.php';
    
    //require Util class
    require_once File::build_path(array("controller","Util.php"));
    
    //imports models
    require_once File::build_path(array("model", "Auth.php"));
    require_once File::build_path(array("model", "Submission.php"));
    require_once File::build_path(array("model", "SubmissionData.php"));
    require_once File::build_path(array("model", "User.php"));
    require_once File::build_path(array("model", "UserStatus.php"));
    
    //init connection with database
    Auth::init();
    
    //start session
    session_start();
    
    //authorised connections
    $VALID_TOPICS = ["submission","auth","admin","error"];
    
    $topic = Util::getFromPOSTOrGET("topic");
    if(!in_array($topic, $VALID_TOPICS)){
    	$view = "home";
    	require File::build_path(array("view", "View.php"));
    }else{
        $cname = ucfirst($topic)."Controller";
        $path = File::build_path(array("controller", "controllers", $cname.".php"));
        if(file_exists($path)){
            require $path;
        }else{
        	$view = "errors/404";
        	require File::build_path(array("view", "View.php"));
        }
    }
    
?>