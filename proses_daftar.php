<?php
include 'koneksi.php';

if(isset($_POST ['daftar'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO calon_siswa (nama_lengkap, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama_lengkap','$alamat','$jenis_kelamin','$agama','$asal_sekolah')";
    $query = mysqli_query($db,$sql);


    // apakah query simpan berhasil
    if ($query){
        // kalau berhasil silahkan ke halaman index.php dengan status sukses
        header('Location: list-siswa.php?status=sukses');
    }else {
        // kalau gagal silahkan ke halaman index.php dengan status-gagal
        header('Location: list-siswa.php?status=gagal');
    }

}else {
    die('Akses dilarang..');
}



?>