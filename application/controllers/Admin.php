<?php
class Admin extends CI_Controller
{
    public function index()

    {
        $this->load->view('admin/view-form-admin');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kdadmin', 'Kode Admin', 'required|min_length[3]', [
            'required'   => 'Kode Admin harus diisi',
            'min_length' => 'Kode Admin terlalu pendek'
        ]);

        $this->form_validation->set_rules('nmadmin', 'Nama Admin', 'required|min_length[3]', [
            'required'   => 'Nama Admin harus diisi',
            'min_length' => 'Nama Admin terlalu pendek'
        ]);

        $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required|min_length[12]', [
            'required'   => 'Nomor Telepon harus diisi',
            'min_length' => 'Nomor Telepon terlalu pendek'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
            'required'   => 'Password harus diisi',
            'min_length' => 'Password terlalu pendek'
        ]);
        
        if ($this->form_validation->run() != true){
            $this->load->view('admin/view-form-admin');
        } else {
            $data = [
                'kdadmin' => $this->input->post('kdadmin'),
                'nmadmin' => $this->input->post('nmadmin'),
                'notelp'  => $this->input->post('notelp'),
                'password'  => $this->input->post('password'),
            ];
    
            $this->load->view('admin/view-data-admin', $data);
        }
        
    }
}