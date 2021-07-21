<?php

class Pembelian_model extends CI_Model
{

    public function viewTabelPembelian()
    {
        return $this->db->get('tabel_pembelian')->result_array();
    }

    public function addDataPembelian()
    {
        $data = [
            'customer' => $this->input->post('customer', true),
            'car' => $this->input->post('car', true),
            'date' => $this->input->post('date', true),
            'total' => $this->input->post('total', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->insert('tabel_pembelian', $data);
    }

    public function getDataPembelianById($id)
    {
        return $this->db->get_where('tabel_pembelian', ['id' => $id])->row_array();
    }


    public function editDataPembelian($id)
    {
        $data = [
            'customer' => $this->input->post('customer', true),
            'car' => $this->input->post('car', true),
            'date' => $this->input->post('date', true),
            'total' => $this->input->post('total', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tabel_pembelian', $data);
    }

    public function deleteDataPembelian($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabel_pembelian');
    }
}
