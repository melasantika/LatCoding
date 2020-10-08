<?php

class Lapor_model extends CI_model
{
    // fungsi untuk menampilkan seluruh data siswa
    public function getAllLapor()
    {
        // balikin nilai nya ubah dlu jadi array
        return $this->db->get('pelapor')->result_array(); //mengambil hasil dari query menjadi bentuk array.
    }

    public function tambahDataLapor()
    {
        // tangkap data yg tuliskan ama user tampung dalam variable
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pernyataan = $this->input->post('pernyataan');
        $gambar = $_FILES['gambar']['name'];

        // jika gambar kosong, ga usah tampilin apa" (gambar kosong)
        if ($gambar == '') {
            // jika berhasil cek
        } else {
            $nama_baru = date('dmyhis') . "_" . $_FILES['gambar']['name']; // generate nama baru
            $config['upload_path'] = './assets/img/lapor/'; // tempat penyimpanannya
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // gambar yg bisa di upload
            $config['max_size'] = '10000'; // ukuran max gambar
            $config['width_size'] = '5000'; // ukuran lebar
            $config['height_size'] = '5000'; // ukuran tinggi
            $config['file_name'] = $nama_baru; // ubah file_name dengan nama yg sudah di generate tadi

            // panggil library upload
            $this->load->library('upload', $config);
            // jika gambar tidak lolos pengecekan tampilkan sbb
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                // jika berhasil upload tampung dalam $gambar
                $gambar = $this->upload->data('file_name');
            }
        }

        // smua data di tampung ke dalam array
        $data = [
            "nama" => $nama,
            "alamat" => $alamat,
            "pernyataan" => $pernyataan,
            "gambar" => $gambar

        ];

        // setelah itu data di masukan kedalam tabel siswa
        $this->db->insert('pelapor', $data);
    }

    // fungsi hapus
    public function hapusDatalapor($id)
    {
        // hapus data berdasarkan id. id yg di klik dan id yg ada di database
        $this->db->delete('pelapor', ['id' => $id]);
    }

    public function getLaporById($id)
    {
        // kembalikan data yg dipilih berdasarkan id ubah ke
        return $this->db->get_where('pelapor', ['id' => $id])->row_array(); // ambil data 1 baris berbentuk array
    }

    // fungsi ubah
    public function ubahDatalapor()
    {
        // tangkap data yg tuliskan ama user tampung dalam variable
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pernyataan = $this->input->post('pernyataan');
        $gambar = $_FILES['gambar']['name'];

        // setelah itu tampung ke dalam bentuk array. masukan dalam variable data
        $data = [
            "nama" => $nama,
            "alamat" => $alamat,
            "pernyataan" => $pernyataan

        ];

        // cek khusus untuk gambar
        // kalau gambar ga diubah tampilkan hal yg sama
        if ($gambar == '') {
            // kalau di ubah cek rules sbb
        } else {
            $nama_baru = date('dmyhis') . "_" . $_FILES['gambar']['name'];
            $config['upload_path'] = './assets/img/lapor/';
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
                unlink('./assets/img/lapor/' . $this->input->post('gambar_lama'));
                $data['gambar'] = $gambar;
            }
        }

        // edit berdasarkan id
        $this->db->where('id', $this->input->post('id'));
        // setelah semua proses selesai update data di tabel siswa
        $this->db->update('pelapor', $data);
    }

    // fungsi cari data
    public function cariDataLapor()
    {
        // tangkap keyword yg diketikan user tampung ke dalam $keyword
        $keyword = $this->input->post('keyword', true);
        // tangkap dan samakan di database berdasarkan nama, alamat, dan email
        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        // balikin nilai ubah dlu jadi array lalu kirimkan 
        return $this->db->get('pelapor')->result_array();
    }
}
