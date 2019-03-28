<?php
    require_once File::build_path(array("controller", "query", "DBUser.php"));
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
        $view = "errors/404";
        require File::build_path(array("view", "View.php"));
    }else{
        switch ($action){
            case "CONNECT":         
                break;
            case "CONNECTED":
                $mail = Util::getFromPOSTOrGET("mail");
                $password = Util::getFromPOSTOrGET("password");
                $user = DBUser::getByMail($mail);
                if($user != NULL){
                    if(password_verify($password, $user->getPasswordHash())){
                        //set connected
                        $_SESSION["connected"] = True;
                        $_SESSION["login"] = $user->getNickname();
                        $success =  True;
                    }else{
                        $success = False;
                    }
                }else{
                    $success = False;
                }
                break;
            case "DISCONNECT":
                break;
            case "DISCONNECTED":
                //remove all stored valu for this user
                session_unset();
                //destroy the session
                session_destroy();
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
        $view = $topic."/".$action;
        require File::build_path(array("view", "View.php"));
    }
?>