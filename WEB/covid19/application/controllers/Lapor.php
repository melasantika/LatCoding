<?php

class Lapor extends CI_Controller
{
    // fungsi yg pertama kali di jalankan saat class dijalanka
    public function __construct()
    {
        parent::__construct();
        // panggil model siswa, panggil library form dan pdf
        $this->load->model('Lapor_model');
        $this->load->library('form_validation');
        $this->load->library('Pdf');
    }
    public function index()
    {
        $data['judul'] = 'Data Lapor Sigap Covid-19';
        // panggil fungsi getallsisswa di lapor_model lalu tampung ke dalam data lapor
        $data['lapor'] = $this->Lapor_model->getAllLapor();
        // jika ada user mengetikan sesuatu tangkap dan tampilkan
        if ($this->input->post('keyword')) {
            $data['lapor'] = $this->Lapor_model->cariDatalapor();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('lapor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pelapor';
        // set peraturan untuk memasukan data ke dalam database
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pernyataan', 'Pernyataan', 'required');
        // jika pengecekannya salah maka tampilkan lagi formnya
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('lapor/tambah');
            $this->load->view('templates/footer');
        } else {
            // jika benar data masuk ke fungsi tambahdatalapor di model lalu di prosess
            $this->Lapor_model->tambahDataLapor();
            // setelah prosses selesai munculkan alert 
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('lapor');
        }
    }

    public function hapus($id) // ambil id sebagai parameter
    {
        // panggil fungsi getsisswabyid di siswamodel tangkap idnya dan tampung dalam sebuah variable $siswa
        $lapor = $this->Lapor_model->getLaporById($id);
        // hapus gambar yg ada dalam folder tsb dengan id siswa
        unlink('./assets/img/lapor/' . $lapor['gambar']);
        // lalu hapus dengan fungsi tsb yg ada dalam siswa model
        $this->Lapor_model->hapusDataLapor($id);
        // setelah smua selesai tampilkan alert
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('lapor');
    }

    public function detail($id) // ambil id sebagai parameter
    {
        $data['judul'] = 'Detail Data Pelapor';
        // panggil fungsi getsiswabyid yg ada dalam siswa_model lalu tampung ke dalam variable data
        $data['lapor'] = $this->Lapor_model->getLaporById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('lapor/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pelapor';
        $data['lapor'] = $this->Lapor_model->getLaporById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pernyataan', 'Pernyataan', 'required');
        // jika pengecekan gagal tampilkan formnya lagi
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('lapor/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            // kalau bener proses di fungsi ubahdatasiswa di lapor_model
            $this->Lapor_model->ubahDataLapor();
            // stelah smua proses lancarkan tampilkan alert
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('lapor');
        }
    }

    public function report()
    {
        // panggil seluruh data pelapor tampung di variable data
        $data['lapor'] = $this->Lapor_model->getAllLapor();
        $this->load->view('report/index', $data);
    }
}
