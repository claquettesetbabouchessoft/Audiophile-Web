<?php
    /*
     * 403 : not authorized
     * 404 : not found
     */
    $VALID_ACTIONS = array("403", "404");
    
    //get action
    $action = strtoupper(Util::getFromPOSTOrGET("action"));
    //if action not found
    if(!in_array($action, $VALID_ACTIONS)){
        View::display("error/404");
    }else{
        View::display($topic."/".$action);
    }
?>