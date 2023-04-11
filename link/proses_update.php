<?php

$conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $deskripsi_buku = $_POST['deskripsi_buku'];
    $harga = $_POST['harga'];
    $penerbit = $_POST['penerbit'];
    $tgl_cetak = $_POST['tgl_cetak'];
    
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama = $_FILES['gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    // buat query update
    move_uploaded_file($file_tmp, 'file/' .$nama);
    $sql = "UPDATE laporan4part2 SET judul_buku='$judul_buku', deskripsi_buku='$deskripsi_buku', harga='$harga', penerbit='$penerbit', tgl_cetak='$tgl_cetak', gambar='$nama' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: booklist.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>