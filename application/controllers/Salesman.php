<?php

class Salesman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembelian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/dashboard_header');
        $this->load->view('dashboard/index');
        $this->load->view('templates/dashboard_footer');
    }

    public function tablesData()
    {

        $data['tabelpembelian'] = $this->Pembelian_model->viewTabelPembelian();
        $this->load->view('templates/dashboard_header');
        $this->load->view('dashboard/tables_data', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function inputData()
    {
        $this->form_validation->set_rules('customer', 'Customer', 'required|trim');
        $this->form_validation->set_rules('car', 'Car', 'required|trim');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard_header');
            $this->load->view('dashboard/input_data');
            $this->load->view('templates/dashboard_footer');
        } else {
            $this->Pembelian_model->addDataPembelian();
            $this->session->set_flashdata('flash', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data Added Successfully!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
');
            redirect('salesman/inputData');
        }
    }

    public function editData($id)
    {
        $data['tp'] = $this->Pembelian_model->getDataPembelianById($id);
        $this->form_validation->set_rules('customer', 'Customer', 'required|trim');
        $this->form_validation->set_rules('car', 'Car', 'required|trim');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/dashboard_header');
            $this->load->view('dashboard/edit_data', $data);
            $this->load->view('templates/dashboard_footer');
        } else {
            $this->Pembelian_model->editDataPembelian($id);
            $this->session->set_flashdata('notification', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Data Edited Successfully.</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Salesman/tablesData');
        }
    }

    public function deleteData($id)
    {
        $this->Pembelian_model->deleteDataPembelian($id);
        $this->session->set_flashdata('notification', '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data Deleted Successfully.</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Salesman/tablesData');
    }
}
