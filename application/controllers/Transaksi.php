<?php
class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->view('transaksi/view-form-transaksi');
    }


    public function cetak()
    {
        $this->form_validation->set_rules('kdadmin', 'Kode Admin', 'required|min_length[3]', [
            'required'   => 'Kode Admin harus diisi',
            'min_length' => 'Kode Admin terlalu pendek'
        ]);

        $this->form_validation->set_rules('kdtransaksi', 'Kode Transaksi', 'required|min_length[3]', [
            'required'   => 'Kode Transaksi harus diisi',
            'min_length' => 'Kode Transaksi terlalu pendek'
        ]);

        $this->form_validation->set_rules('tgltransaksi', 'Tanggal Transaksi', 'required', [
            'required'   => 'Tanggal Transaksi harus diisi'
        ]);

        $this->form_validation->set_rules('namapembeli', 'Nama Pembeli', 'required|min_length[3]', [
            'required'   => 'Nama Pembeli harus diisi',
            'min_length' => 'Nama Pembeli terlalu pendek'
        ]);
        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required'   => 'Alamat harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required', [
            'required'   => 'Nomor Telepon harus diisi'
        ]);

        $this->form_validation->set_rules('totalbayar', 'Total Bayar', 'required|min_length[3]', [
            'required'   => 'Total Bayar harus diisi',
            'min_length' => 'Total Bayar terlalu pendek'
        ]);

        if ($this->form_validation->run() != true){
            $this->load->view('transaksi/view-form-transaksi');
        } else {
            $data = [
                'kdadmin' => $this->input->post('kdadmin'),
                'kdtransaksi' => $this->input->post('kdtransaksi'),
                'tgltransaksi'  => $this->input->post('tgltransaksi'),
                'namapembeli'  => $this->input->post('namapembeli'),
                'alamat'  => $this->input->post('alamat'),
                'notelp'  => $this->input->post('notelp'),
                'totalbayar'  => $this->input->post('totalbayar')
            ];
    
            $this->load->view('transaksi/view-data-transaksi', $data);
        }
        
    }

}