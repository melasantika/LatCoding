<?php

class Siswa_model extends CI_model
{
    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar == '') {
        } else {
            $nama_baru = date('dmyhis') . "_" . $_FILES['gambar']['name']; // generate nama baru
            $config['upload_path'] = './assets/img/siswa/'; // tempat penyimpanannya
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // gambar yg bisa di upload
            $config['max_size'] = '10000'; // ukuran max gambar
            $config['width_size'] = '5000'; // ukuran lebar
            $config['height_size'] = '5000'; // ukuran tinggi
            $config['file_name'] = $nama_baru; // ubah file_name dengan nama yg sudah di generate tadi
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'upload gagal';
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama' => $nama,
            'nis' => $nis,
            'email' => $email,
            'jurusan' => $jurusan,
            'gambar' => $gambar
        ];

        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('siswa', ['id' => $id]);
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function ubahDataSiswa()
    {
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');
        $gambar = $_FILES['gambar']['name'];

        $data = [
            'nama' => $nama,
            'nis' => $nis,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        // cek khusus untuk gambar
        // kalau gambar ga diubah tampilkan hal yg sama
        if ($gambar == '') {
            // kalau di ubah cek rules sbb
        } else {
            $nama_baru = date('dmyhis') . "_" . $_FILES['gambar']['name'];
            $config['upload_path'] = './assets/img/siswa/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '10000';
            $config['width_size'] = '5000';
            $config['height_size'] = '5000';
            $config['file_name'] = $nama_baru;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                // upload file yg sudah di generate masukan ke dalam variable gambar
                $gambar = $this->upload->data('file_name');
                // ubah yg ada di direktori penyimpanan dengan file gambar baru yg kita inputkan
                unlink('./assets/img/siswa/' . $this->input->post('gambar_lama'));
                $data['gambar'] = $gambar;
            }
        }
        // edit berdasarkan id
        $this->db->where('id', $this->input->post('id'));
        // setelah semua proses selesai update data di tabel siswa
        $this->db->update('siswa', $data);
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nis', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('siswa')->result_array();
    }
}
