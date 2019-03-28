<?php
    class View{
        
        private static $VIEW_PATHS = array(
            "errors/403" => "notifications/errors/403.php",
            "errors/404" => "notifications/errors/404.php",
            "admin/STATS" => "forms/admin/stats.php",
            "submission/PUT" => "forms/submission/put.php",
            "submission/PUSHED" => "notifications/submission/pushed.php",
            "submission/UPDATE" => "forms/submission/update.php",
            "submission/UPDATED" => "notifications/submission/updated.php",
            "submission/DELETE" => "forms/submission/delete.php",
            "submission/DELETED" => "notifications/submission/deleted.php",
            "submission/PENDING" => "forms/submission/pending.php",
            "submission/VALIDATED" => "notifications/submission/validated.php",
            "submission/REFUSED" => "notifications/submission/refused.php",
            "submission/VIEW" => "forms/submission/view.php",
            "auth/CONNECT" => "forms/auth/connect.php",
            "auth/CONNECTED" => "notifications/auth/connected.php",
            "auth/DISCONNECT" => "forms/auth/disconnect.php",
            "auth/DISCONNECTED" => "notifications/auth/disconnect.php",
            "auth/ADD" => "forms/auth/add.php",
            "auth/ADDED" => "notifications/auth/added.php",
            "auth/DELETE" => "forms/auth/delete.php",
            "auth/DELETED" => "notifications/auth/deleted.php",
            "auth/UPDATE" => "forms/auth/update.php",
            "auth/UPDATED" => "notifications/auth/updated.php",
            "auth/VIEW" => "forms/auth/view.php"
        );
        
        public static function display($view){
            require File::build_path(array("view", View::$VIEW_PATHS[$view]));
        }
    }
?>