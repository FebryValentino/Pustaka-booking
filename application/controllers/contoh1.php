<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang ....Selamat belajar web programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_contoh');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil']  = $this->Model_contoh->jumlah($n1, $n2);

        $this->load->view('View_contoh', $data);
    }
}
