<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penjualan extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_form_penjualan');
    }

    public function print()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[3]', array(
            'required' => 'Nama Pembeli Harus Diisi!',
            'min_length' => 'Nama Terlalu Pendek!'
        ));

        $this->form_validation->set_rules('nohp', 'Nomor hp', 'required|min_length[5]', array(
            'required' => 'Nomor Hp Harus Diisi!',
            'min_length' => 'Nomor Hp Terlalu Pendek!'
        ));

        if ($this->form_validation->run() == false) {
            $this->load->view('v_form_penjualan');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga')
            ];

            if ($this->input->post('merk') == 'Nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'Adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'Kicker') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'Eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'Bucherri') {
                $data['harga'] = 400000;
            }
            $this->load->view('v_data_penjualan', $data);
        }
    }
}
