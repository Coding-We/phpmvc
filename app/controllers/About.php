<?php

class About {

    public function index($nama = 'Santoso', $pekerjaan = 'Programmer') {
        echo 'Halo, nama saya ' . $nama . ', saya ' . $pekerjaan . ' di PT. XYZ';
    }

    public function page() {
        echo 'About';
    }
}