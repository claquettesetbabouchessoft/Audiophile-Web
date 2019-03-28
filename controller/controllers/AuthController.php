<?php
    /*
       * CONNECT : connect an user
       * CONNECTED : user is now connected
       * DISCONNECT : disconnect an user
       * DISCONNECTED : user is now disconnected
       * ADD : add an user
       * ADDED : user has been added
       * DELETE : delete an user
       * DELETED : user has been deleted
       * UPDATE: update a user
       * UPDATED: user has been updated
       * VIEW : view all users (admin required)
       */
    $VALID_ACTIONS = array("CONNECT", "CONNECTED", "DISCONNECT", "DISCONNECTED", "ADD", "ADDED", "DELETE", "DELETED", "UPDATE", "UPDATED", "VIEW");

    //get action
    $action = strtoupper(Util::getFromPOSTOrGET("action"));
    //if action not found
    if(!in_array($action, $VALID_ACTIONS)){
        View::display("errors/404");
    }else{
        View::display($topic."/".$action);
        switch ($action){
            case "CONNECT":
                break;
            case "CONNECTED":
                break;
            case "DISCONNECT":
                break;
            case "DISCONNECTED":
                break;
            case "ADD":
                break;
            case "ADDED":
                break;
            case "DELETE":
                break;
            case "DELETED":
                break;
            case "UPDATE":
                break;
            case "UPDATED":
                break;
            case "VIEW":
                break;
        }
    }
?>