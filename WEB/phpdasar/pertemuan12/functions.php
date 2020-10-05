<?php
//koneksi database
$conn=mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[]= $row;
    }

    return $rows;
}

function tambah ($data) {
    global $conn;
     $nama = htmlspecialchars($data["nama"]);
     $nis = htmlspecialchars($data["nis"]);
     $kelas = htmlspecialchars($data["kelas"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $gambar = htmlspecialchars($data["gambar"]);

    
    $query = "INSERT INTO tbl_siswa VALUES 
    ('', '$nama', '$nis', '$kelas', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

   
   $query = "UPDATE tbl_siswa SET 
                nama = '$nama',
                nis = '$nis',
                kelas = '$kelas',
                jurusan = '$jurusan',
                gambar = '$gambar'

            WHERE id = $id
            ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM tbl_siswa WHERE 
    nama LIKE '%$keyword%' OR
    nis LIKE '%$keyword%' OR
    kelas LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

    return query($query);
}
?>