<?php
    /*
     * PUT : add a new submission
     * PUSHED : a submission has been push
     * UPDATE : update a submission
     * UPDATED : a submissions has been updated
     * DELETE: delete a submissions
     * DELETED : a submission has been deleted
     * PENDING: view all pendings submissions
     * VALIDATED : a submission has been validated
     * REFUSED : a submission has been refused
     * VIEW : view a submission
     */
    $VALID_ACTIONS = array("PUT", "PUSHED", "UPDATE", "UPDATED", "DELETE", "DELETED", "PENDING", "VALIDATED", "REFUSED", "VIEW");
    
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
            case "PUT":
                break;
            case "PUSHED":
                break;
            case "UPDATE":
                break;
            case "UPDATED":
                break;
            case "DELETE":
                break;
            case "DELETED":
                break;
            case "PENDING":
                break;
            case "VALIDATE":
                break;
            case "VALIDATED":
                break;
        }
    }
?>