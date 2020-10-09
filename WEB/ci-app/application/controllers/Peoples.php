<?php

class Peoples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peoples_model', 'peoples');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }
    public function index()
    {
        $data['judul'] = 'List of Peoples';

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        // initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Add People';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index');
            $this->load->view('templates/footer');
        } else {
            $this->peoples->tambahDataPeople();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('peoples');
        }
    }

    public function hapus($id)
    {
        $this->peoples->hapusDataPeople($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('peoples');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail People';
        $data['peoples'] = $this->peoples->getPeopleById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Edit People';
        $data['peoples'] = $this->peoples->getPeopleById($id);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->peoples->ubahDataPeople();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('peoples');
        }
    }
}
