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

    public function create(): void
    {
        $this->form_validation->set_rules("id", "id", 'required|is_unique[apps_students.id]');
        $this->form_validation->set_rules("email", "email", 'required|is_unique[apps_students.email]|valid_email');
        $this->form_validation->set_rules("name", "name", 'required');
        $this->form_validation->set_rules("study_program_id", "study_program_id", 'required');

        if ($this->form_validation->run()) {
            $data = [
                'id' => $this->input->post('id', true),
                'email' => $this->input->post('email', true),
                'name' => $this->input->post('name', true),
                'study_program_id' => $this->input->post('study_program_id', true),
            ];

            if ($this->Student_model->create($data)) {
                $this->session->set_flashdata('message', 'Data has been created!');
                $this->session->set_flashdata('type', 'success');
            } else {
                $this->session->set_flashdata('message', 'Data failed to be created!');
                $this->session->set_flashdata('type', 'error');
            }
            redirect('master_data/students');
        }

        $this->session->set_flashdata('message', validation_errors());
        $this->session->set_flashdata('type', 'error');
        redirect('master_data/students');
    }

    public function get_data(): void
    {
        if (!$this->input->is_ajax_request()) {
            show_error('Access Denied', 403);
        }

        $data = $this->Student_model->get_data();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
    }
}
