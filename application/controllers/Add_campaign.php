<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class add_campaign extends CI_Controller {

        public function __construct() {

            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Load_Model');
        }

        public function addCampaign(){
            $generated_url = $this->randomURL();
            $success_code = $this->randomCode();
            $newCampaign = $this->Load_Model->addCampaign($generated_url, $success_code);
            // redirect(''.$this->input->post("client").'/campaigns');
            $this->session->set_userdata('c_id', $newCampaign[0]->id);
            redirect(''.$this->input->post("client").'/'.$this->input->post("c_name").'/view_campaign');

        }

        public function index($clientname){
            // print_r($this->randomPassword());
            // echo $this->randomPassword();
            // return;
            if($this->session->userdata('admin_mask')){
                $clientname = rawurldecode($clientname);
                $data["client"] = $clientname;
                $this->load->view('add_campaign_page', $data);               
            }else{
                redirect('admin');
            }

        }

        public function randomURL() {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 20; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }
        public function randomCode(){
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 16; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }
    }
?>
