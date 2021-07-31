<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_contract_terms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ob_start();
        $this->load->model('M_contract_terms');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }

    public function get_data()
    {
        $this->M_contract_terms->get_data();
    }

    public function form($id = '')
    {
        if ($id !== '') {
            $data['contract'] = $this->M_contract_terms->get_id($id);
        }
        $this->load->view('template/header');
        $this->load->view('admin/form', @$data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $input = $_POST['input'];
        $this->M_contract_terms->add($input);
        redirect('/');
    }

    public function edit($id)
    {
        $input = $_POST['input'];
        $this->M_contract_terms->edit($input, $id);
        redirect('/');
    }

    public function delete($id)
    {
        $this->M_contract_terms->delete($id);
        redirect('/');
    }
}
