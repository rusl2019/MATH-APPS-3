<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecturers extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Lecturer_model');
    }

    public function index()
    {
        $this->data['title'] = 'Lecturers';
        $this->render('lecturers');
    }

    public function get_data(): void
    {
        if (!$this->input->is_ajax_request()) {
            show_error('Access Denied', 403);
        }

        $data = $this->Lecturer_model->get_data();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
    }
}
