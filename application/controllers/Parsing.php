<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'third_party/simple_html_dom.php';

class Parsing extends CI_Controller {
       
        public function crolling(){
                $data = file_get_contents("http://depart2.studio.takeone.co.kr/pucca/buildqa/v1/packet");
                var_dump($data);
        }

}
