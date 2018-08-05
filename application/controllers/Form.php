<?php

class Form extends CI_Controller {

        public function frm()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('pages/myform');
                }
                else
                {
                        $this->load->view('pages/formsuccess');
                }
        }
}