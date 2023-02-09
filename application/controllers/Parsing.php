<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'third_party/simple_html_dom.php';

class Parsing extends CI_Controller {
       
        public function crolling(){
                $data = '';

                // $url = "http://172.27.10.6:80/pucca/buildqa/v1/packet";
                $url = "http://depart2.studio.takeone.co.kr:3000";
                $data = file_get_html($url);
                var_dump($data);
        }

}



//http://depart2.studio.takeone.co.kr/pucca/buildqa/v1/test/cheat/%7B%22uid%22:%22580%22,%20%22token%22:%22%22,%20%22cheat%22:%22timer%20NOW%22%7D