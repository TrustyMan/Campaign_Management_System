<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class edit extends CI_Controller {

        public function __construct() {

            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Load_Model');
        }
        public function saveCampaign($campaignId){
            $this->Load_Model->saveCampaign($campaignId);
            // redirect(''.$this->input->post("client")."/".$this->input->post("c_name").'/view_campaign');
            redirect(''.$this->input->post("client").'/campaigns');
            // echo $_SERVER['HTTP_REFERER'];
            // return;
            // redirect($_SERVER['HTTP_REFERER']);
        }
        public function index($campaignName){
            if($this->session->userdata('admin_mask')){
                $campaignName = rawurldecode($campaignName);
                $c_id = $this->session->userdata('c_id');
                $data["campaign"] = $this->Load_Model->getCampaign($c_id);
                $this->load->view('edit_page', $data);
            }else{
                redirect('admin');
            }
        }
    }
?>
