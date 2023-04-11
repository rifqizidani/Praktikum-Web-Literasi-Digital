<?php
    $conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }

    error_reporting(0);

    session_start();

    if (isset($_SESSION['judul_buku'])) {
        header("Location:booklist.php");
    }

    if (isset($_POST['submit'])) {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $nama = $_FILES['gambar']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];

        

        $judul = $_POST['judul_buku'];
        $deskripsi = $_POST['deskripsi_buku'];
        $harga = $_POST['harga'];
        $penerbit = $_POST['penerbit'];
        $tgl_cetak = $_POST['tgl_cetak'];
        $sql = "SELECT * FROM laporan4part2 WHERE judul_buku='$judul'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0) {
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if($ukuran < 10400944070) {
                    move_uploaded_file($file_tmp, 'file/' .$nama);
                    $sql = "INSERT INTO laporan4part2 (judul_buku, deskripsi_buku, harga, penerbit, tgl_cetak, gambar) VALUES ('$judul', '$deskripsi', '$harga', '$penerbit', '$tgl_cetak', '$nama')";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        echo "<script>alert('Tambah Buku Berhasil!')</script>";
                        $judul = "";
                        $deskripsi = "";
                        $harga = "";
                        $penerbit = "";
                        $tgl_cetak = "";
                        $gambar = "";
                        header("Location:booklist.php");
                    } else {
                        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                    }
                } else {
                    echo "Ukuran File Terlalu Besar";
                }
            } else {
                echo "Ekstensi File Yang Di Upload Tidak Di Perbolehkan";
            }
        } else {
            echo "<script>alert('Woops! Judul buku sudah terdaftar.')</script>";
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Booklist</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="judul">Online Literacy</h1>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Book List</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <h2>Book List</h2>
                    <form action="" method="post" class="login-email" enctype="multipart/form-data">
                        <label for="judul_buku">Judul Buku : </label>
                        <input type="text" name="judul_buku" value="<?= $judul_buku; ?>" id="judul_buku" required>
                        <br>
                        <label for="deskripsi">Deskripsi : </label>
                        <input type="text" name="deskripsi_buku" value="<?= $deskripsi_buku; ?>" id="deskripsi" required>
                        <br>
                        <label for="harga">Harga : </label>
                        <input type="number" name="harga" value="<?= $harga; ?>" id="harga" required>
                        <br>
                        <label for="penerbit">Penerbit : </label>
                        <input type="text" name="penerbit" value="<?= $penerbit; ?>" id="penerbit" required>
                        <br>
                        <label for="tgl_cetak">Tanggal Cetak : </label>
                        <input type="text" name="tgl_cetak" id="tgl_cetak" value="<?= $tgl_cetak; ?>" required>
                        <br>
                        <label for="gambar">Gambar : </label>
                        <input type="file" name="gambar" id="gambar" required>

                        <button name="submit">Tambah</button>
                    </form>
                </div>
                <div class="sidebar">
                    <h3>Lastes Post</h3>
                    <ul>
                        <li><a href="">Mei 2022.</a></li>
                        <li><a href="">April 2022.</a></li>
                        <li><a href="">Maret 2022.</a></li>
                        <li><a href="">Other.</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p class="copy">Copyright 2022. rifqizidani.</p>
            </div>
        </div>
    </body>
</html>