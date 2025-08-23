<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index(): void
    {
        $this->data['title'] = 'Students';
        $this->render('students');
    }

    public function get_data(): void
    {
        // if (!$this->input->is_ajax_request()) {
        //     show_error('Access Denied', 403);
        // }

        $data = $this->Student_model->get_data();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
    }
}
