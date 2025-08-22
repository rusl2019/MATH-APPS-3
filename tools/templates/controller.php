<?php
defined('BASEPATH') or exit('No direct script access allowed');

class {{module_name}} extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('{{module_name}}_model');
    }

    public function index(): void
    {
        $this->data['title'] = '{{module_name}}';
        $this->render('{{module_view}}');
    }
}