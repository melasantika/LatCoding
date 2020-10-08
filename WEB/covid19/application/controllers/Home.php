<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // men-load judul halaman, membuat view dan men-load view
        $data['judul'] = 'Halaman Home';
        $data['datas'] = $this->getData();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    // get data json dari api 
    //lalu di decode nah abis itu baru di foreach di view
    private function getData()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dekontaminasi.com/api/id/covid19/stats");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        // echo $output;
        $datas = json_decode($output);
        return $datas;
    }
}
