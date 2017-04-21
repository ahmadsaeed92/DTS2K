<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cars_details extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cars_details_model');
    }

    public function index($data = NULL) {
        if (!$data)
            $data = array();
        $data['title'] = "Cars Details";
        $this->load->view('templates/header', $data);
        $data['menu'] = $this->load->view('templates/left_menu');
        $data['cars_details_table_html'] = $this->load->view('components/cars_details');
        $this->load->view('templates/footer');
        $this->load->view('cars_details', $data, TRUE);
    }

    public function generate_report() {
        try {
            if (empty($this->input->post('start_date')) && empty($this->input->post('end_date'))) {
                $this->session->set_flashdata('message', 'Please select start date and end date');
                redirect('cars_details');
            } else {
                $data = array();
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                if (!$res = $this->Cars_details_model->generate_report(db_date($start_date), db_date($end_date))) {
                    $this->session->set_flashdata('message', 'Error Wile generating report! PLease try again!');
                    redirect('cars_details');
                } else {
                    $data['data'] = $res;
                    $data['start_date'] = user_date($start_date);
                    $data['end_date'] = user_date($end_date);
                    $data['store'] = $this->config->item('store#', 'global_settings');
                    $now = date("m/d/Y H:i:s");
                    $data['descriptor'] = "Report Generated for '{$data['store']}' from {$data['start_date']} to {$data['end_date']} at {$now}";
                    $this->index($data);
                }
            }
        } catch (Exception $ex) {
            
        }
    }

}
