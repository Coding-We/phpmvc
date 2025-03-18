<?php

class About extends Controller {
    public function index($nama = 'Santoso', $pekerjaan = 'Web Developer', $umur = 20) 
    {
        $data['title'] = 'Halaman About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }


    public function page() 
    {
        $data['title'] = 'Halaman Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}