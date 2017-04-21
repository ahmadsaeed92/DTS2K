<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cars_details extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cars_details_model');
        $this->load->library("pagination");
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
            if (empty($this->input->post('start_date')) && empty($this->uri->segment(3)) && empty($this->input->post('end_date')) && empty($this->uri->segment(4))) {
                $this->session->set_flashdata('message', 'Please select start date and end date');
                redirect('cars_details');
            } else {
                $data = array();
                $start_date = empty($this->input->post('start_date')) ? date($this->config->item('date_time_format', 'global_settings'), $this->uri->segment(3)) : $this->input->post('start_date');
                $end_date = empty($this->input->post('end_date')) ? date($this->config->item('date_time_format', 'global_settings'), $this->uri->segment(4)) : $this->input->post('end_date');
//                print($start_date);
//                print("<br>");
//                print($end_date);
//                die("here");
                // Pagination Configuration
                $config = array();
                $config["base_url"] = base_url() . "index.php/cars_details/generate_report/" . strtotime($start_date) . "/" . strtotime($end_date) . "/";
                $config["total_rows"] = $this->Cars_details_model->generate_report(db_date($start_date), db_date($end_date), "count");
                $config["per_page"] = $limit = 10;
                $config["uri_segment"] = 5;
                $config['use_page_numbers'] = TRUE;
                $config['first_link'] = '<<';
                $config['last_link'] = '>>';
                $config['full_tag_open'] = "<div class='pagination'>";
                $config['full_tag_close'] = "</div>";
                $config['cur_tag_open'] = '<a class = "active">';
                $config['cur_tag_close'] = '</a>';
                $config['num_links'] = 3;
                // End
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
                $offset = ($page-1) * $limit;
                if (!$res = $this->Cars_details_model->generate_report(db_date($start_date), db_date($end_date), "query", $limit, $offset)) {
                    $this->session->set_flashdata('message', 'Error Wile generating report! PLease try again!');
                    redirect('cars_details');
                } else {
                    $str_links = $this->pagination->create_links();
                    $data['data'] = $res;
                    $data['links'] = $str_links;
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
