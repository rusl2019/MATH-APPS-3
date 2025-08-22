<?php
(defined('BASEPATH')) or exit('No direct script access allowed');

/* load the MX_Controller class */
require APPPATH . 'third_party/MX/Controller.php';

class MY_Controller extends MX_Controller
{
    protected array $data;

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('common');
    }

    protected function render(string $view): void
    {
        $roles = $this->session->userdata('roles');

        $this->data['contents'] = $this->load->view($view, $this->data, TRUE);
        $this->load->view('template', $this->data);
    }
}
