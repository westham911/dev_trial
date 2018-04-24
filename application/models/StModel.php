<?php

    class StModel extends CI_Model
    {
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        //all actions in students table
        public function stActions($sql){
            $res = $this->db->query($sql);
            return $res;
        }

    }

?>