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
            	//only show view
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
                        $_SESSION["status"] = $user->getStatus();
                        $success =  True;
                    }else{
                        $success = False;
                    }
                }else{
                    $success = False;
                }
                break;
            case "DISCONNECT":
            	//only show view
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
            	$mail = Util::getFromPOSTOrGET("mail");
            	$nickname = Util::getFromPOSTOrGET("nickname");
            	$password = Util::getFromPOSTOrGET("password");
            	$password2 = Util::getFromPOSTOrGET("password2");
            	if($password == $password2){
            		//password matches
            		if(DBUser::getByMail($mail) == null){
            			DBUser::pushNew($mail, $nickname, $password);
            			$success = True;
            		}else{
            			//user already exists with this mail
            			$reason = "mail";
            			$success = False;
            		}
            	}else{
            		//password doesn't matches
            		$reason = "password";
            		$success = False;
            	}
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