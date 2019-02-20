<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Load_Model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->db = $this->load->database("default", true);
        }
        
        public function validate(){
            // grab user input
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            // Prep the query
            $sql = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
            $query = $this->db->query($sql);
            // Let's check if there are any results
            if($query->num_rows() == 1)
            {
                // If there is a user, then create session data
                $row = $query->row();
                $data = array(
                        'userid' => $row->id,
                        'username' => $row->username,
                        'validated' => true
                        );
                // $this->session->set_userdata($data);

                return true;
            }
            // If the previous process did not validate
            // then return false.
            return false;
        }
        public function addclient(){
            $email = $this->security->xss_clean($this->input->post('email'));
            $name = $this->security->xss_clean($this->input->post('name'));
            $sql = "INSERT INTO client (name, email) VALUES ('".$name."', '".$email."')";
            $query = $this->db->query($sql);
            return;
        }
        public function getCampaigns($client){
            $sql = "SELECT * FROM campaign WHERE client='".$client."'";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function addCampaign($employee_url, $v_code){
            $page_title = $this->security->xss_clean($this->input->post('page_title'));
            $v_url = $this->security->xss_clean($this->input->post('v_url'));
            $c_name = $this->security->xss_clean($this->input->post('c_name'));
            $v_page_name = $this->security->xss_clean($this->input->post('v_page_name'));
            $keywords = $this->security->xss_clean($this->input->post('keywords'));
            $search_engine = $this->security->xss_clean($this->input->post('search_engine'));
            $site_url = $this->security->xss_clean($this->input->post('site_url'));
            $client = $this->security->xss_clean($this->input->post('client'));
            $sql = "INSERT INTO campaign (c_name, page_title, v_url, v_page_name, keywords, search_engine, site_url, client, employee_url, v_code) VALUES ('".$c_name."','".$page_title."','".$v_url."','".$v_page_name."','".$keywords."','".$search_engine."','".$site_url."','".$client."','".$employee_url."', '".$v_code."')";
            $query = $this->db->query($sql);
            $sql = "SELECT * FROM campaign WHERE employee_url='".$employee_url."'";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function getReports($c_id){
            // $sql = "SELECT * FROM report WHERE c_id='SE'";
            $sql = "SELECT * FROM report WHERE c_id='".$c_id."'";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function getCampaign($c_id){
            $sql = "SELECT * FROM campaign WHERE id='".$c_id."'";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function getDefaults(){
            $sql = "SELECT * FROM defaults";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function saveCampaign($campaignId){
            $page_title = $this->security->xss_clean($this->input->post('page_title'));
            $v_url = $this->security->xss_clean($this->input->post('v_url'));
            $c_name = $this->security->xss_clean($this->input->post('c_name'));
            $v_page_name = $this->security->xss_clean($this->input->post('v_page_name'));
            $keywords = $this->security->xss_clean($this->input->post('keywords'));
            $search_engine = $this->security->xss_clean($this->input->post('search_engine'));
            $site_url = $this->security->xss_clean($this->input->post('site_url'));

            $sql = "UPDATE campaign SET page_title='".$page_title."', v_url='".$v_url."', c_name='".$c_name."', v_page_name='".$v_page_name."', keywords='".$keywords."', search_engine='".$search_engine."', site_url='".$site_url."' WHERE id=".$campaignId."";
            $query = $this->db->query($sql);
            return;
        }
        public function saveDefaults($defaultId){
            $default_text1 = $this->security->xss_clean($this->input->post('default_text1'));
            $default_text2 = $this->security->xss_clean($this->input->post('default_text2'));
            $default_employee_password = $this->security->xss_clean($this->input->post('default_employee_password'));

            $sql = "UPDATE defaults SET default_text1='".$default_text1."', default_text2='".$default_text2."', default_employee_password='".$default_employee_password."' WHERE id=".$defaultId."";
            $query = $this->db->query($sql);
            return;
        }

        public function getClients() {
            $sql = "SELECT * FROM client";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function deleteClient($name){
            $sql = "DELETE FROM client WHERE name='".$name."'";
            $query = $this->db->query($sql);
            return;
        }

        public function deleteCampaign($c_id){
            
            $sql = "DELETE FROM campaign WHERE id='".$c_id."'";
            $query = $this->db->query($sql);
            return;
        }
    }

?>