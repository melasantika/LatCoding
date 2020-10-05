<?php
class Siswa_m extends CI_Model{
    function tampil_data(){
        return $this->db->get('tbl_siswa');
    }

}
?>