<?php
    /*
     * STATS : view some stats
     */
    $VALID_ACTIONS = array("STATS");
    
    //get action
    $action = strtoupper(Util::getFromPOSTOrGET("action"));
    //if action not found
    if(!in_array($action, $VALID_ACTIONS)){
        View::display("errors/404");
    }else{
        View::display($topic."/".$action);
        switch ($action){
            case "STATS":
                break;
        }
    }
?> 