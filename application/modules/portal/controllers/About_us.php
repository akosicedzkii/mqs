<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata("USERID") == null)
        {
                echo "Sorry you are not logged in";
                die();
        }
    }

    public function update_settings()
    { 
        $page = $this->input->post("page");
        $data["about_us"] = $this->input->post("about_us");
        echo $this->db->update("dynamic_settings",$data);
        $this->logs->log = "Updated ".str_replace("_"," ",$page)."";
        $this->logs->details = json_encode($data);
        $this->logs->module = $page;
        $this->logs->created_by = $this->session->userdata("USERID");
        $this->logs->insert_log();
        
    }
}
