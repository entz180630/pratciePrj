<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'third_party/simple_html_dom.php';

class Parsing extends CI_Controller {
       
        public function crolling(){
                $data = file_get_html("http://172.27.10.6/pucca/buildqa/v1/packet");
                var_dump($data);
        }

}
