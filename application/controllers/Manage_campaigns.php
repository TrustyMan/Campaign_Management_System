<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class manage_campaigns extends CI_Controller {

        public function __construct() {

            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Load_Model');
        }

        public function deleteCampaign(){
            $c_id = $this->session->userdata('c_id');
            $this->Load_Model->deleteCampaign($c_id);
        }
        
        public function setC_id() {
            $this->session->set_userdata('c_id', $_POST['c_id']);
        }
        public function index($clientname){
            // $data["client"] = $clientname;
            // print_r($this->Load_Model->getCampaigns($clientname));
            if($this->session->userdata('admin_mask')){
                $clientname = rawurldecode($clientname);
                $data["campaigns"] = $this->Load_Model->getCampaigns($clientname);
                $this->load->view('manage_campaigns_page', $data);
            }
            else{
                redirect('admin');
            }
        }
    }
?>
