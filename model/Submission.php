<?php
    require_once File::build_path(array("model","SubmissionData.php"));

    class Submission{
        
        private $submissionID;
        private $author;
        private $album;
        private $titles;
        
        public function __construct($data = NULL){
            if(!is_null($data)){
                $this->submissionID = $data["submissionID"];
                $this->album = $data["album"];
                $this->author = $data["author"];
            }
            $this->titles = array();
        }
        
        public function addSubmissionData($data){
            array_push($this->titles, $data);
        }
    }
?>