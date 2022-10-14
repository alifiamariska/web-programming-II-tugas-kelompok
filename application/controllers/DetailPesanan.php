<?php
class DetailPesanan extends CI_Controller
{
    public function index()

    {
        $this->load->view('DetailPesanan/view-form-detailPesanan');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kddetailpesanan', 'Kode Detail Pesanan', 'required|min_length[3]', [
            'required'   => 'Kode Detail Pesanan harus diisi',
            'min_length' => 'Kode Detail Pesanan terlalu pendek'
        ]);

        $this->form_validation->set_rules('nmmenu', 'Nama Menu', 'required|min_length[3]', [
            'required'   => 'Nama Menu harus diisi',
            'min_length' => 'Nama Menu terlalu pendek'
        ]);

        if ($this->form_validation->run() != true){
            $this->load->view('view-form-detailPesanan');
        } else {
            $data = [
                'kddetailpesanan' => $this->input->post('kddetailpesanan'),
                'nmmenu' => $this->input->post('nmmenu'),
                'harga' => $this->input->post('harga'),
                'jmlhpesanan' => $this->input->post('jmlhpesanan'),
                'subtotal' => $this->input->post('subtotal'),
            ];
    
            $this->load->view('DetailPesanan/view-data-detailPesanan', $data);
        }
        
    }

}