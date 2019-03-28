<?php
    class SubmissionData{
        
        private $submissionDataID;
        private $title;
        private $position;
        
        public function __construct($data = NULL){
            if(!is_null($data)){
                $this->submissionDataID = $data["submissionDataID"];
                $this->title = $data["title"];
                $this->position = $data["position"];
            }
        }
    }
?>