 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('siswa_m');
    }

    public function index(){
        $siswa =$this->siswa_m->tampil_data();
        $data['siswa'] = $siswa;
        $this->load->view('siswa_v',$data);
    }

}
?>