<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'third_party/simple_html_dom.php';

class Parsing extends CI_Controller {
       
        public function crolling(){
                $data = '';

                $url = "http://172.27.10.6:80/pucca/buildqa/v1/packet";
                $data = file_get_contents($url);
                echo $data;
        }

}
