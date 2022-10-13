<?php
class Menu extends CI_Controller
{
    public function index()

    {
        $this->load->view('menu/view-form-menu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kdmenu', 'Kode Menu', 'required|min_length[3]', [
            'required'   => 'Kode Menu harus diisi',
            'min_length' => 'Kode Menu terlalu pendek'
        ]);

        $this->form_validation->set_rules('nmmenu', 'Nama Menu', 'required|min_length[3]', [
            'required'   => 'Nama Menu harus diisi',
            'min_length' => 'Nama Menu terlalu pendek'
        ]);
        
        if ($this->form_validation->run() != true){
            $this->load->view('view-form-menu');
        } else {
            $data = [
                'kdmenu' => $this->input->post('kdmenu'),
                'nmmenu' => $this->input->post('nmmenu'),
                'harga' => $this->input->post('harga'),
            ];
    
            $this->load->view('menu/view-data-menu', $data);
        }
        
    }

}