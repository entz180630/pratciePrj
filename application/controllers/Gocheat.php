<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoCheat extends CI_Controller {       
        public function showPage(){
                $this->load->view('cheatPage.php');
                // echo = "http://172.27.10.6:80/pucca/buildqa/v1/packet";
        }

}