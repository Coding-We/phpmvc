<?php

class Karyawan extends Controller {
    public function index() {
        $data['title'] = 'Halaman Karyawan';
        $data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }

    public function detail ($id) {
        $data['title'] = 'Detail Karyawan';
        $data['karyawan'] = $this->model('Karyawan_model')->getKaryawanById($id);
        $this->view('templates/header', $data);
        $this->view('karyawan/detail', $data);
        $this->view('templates/footer');
    }



    public function tambah() {
        if ($this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        }

    }

    public function hapus($id) {
        if ($this->model('Karyawan_model')->hapusDataKaryawan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        }
    }

    public function ubah() {
        
        if ($this->model('Karyawan_model')->ubahDataKaryawan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Localtion: ' . BASEURL . '/karyawan');
            exit;
        }
    }


}

