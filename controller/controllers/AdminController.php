<?php
    /*
     * STATS : view some stats
     */
    $VALID_ACTIONS = array("STATS");
    
    //get action
    $action = strtoupper(Util::getFromPOSTOrGET("action"));
    //if action not found
    if(!in_array($action, $VALID_ACTIONS)){
    	$view = "errors/404";
    	require File::build_path(array("view", "View.php"));
    }else{
    	$view = $topic."/".$action;
    	require File::build_path(array("view", "View.php"));
        switch ($action){
            case "STATS":
                break;
        }
    }
?> 