<?php
    $conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: booklist.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM laporan4part2 WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $buku = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
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
                    <form action="proses_update.php" method="POST" enctype="multipart/form-data">
                    <fieldset>

                        <input type="hidden" name="id" value="<?php echo $buku['id'] ?>" />

                        <label for="gambar">Gambar : </label>
                        <input type="file" name="gambar" id="gambar">
                        <br>
                        <label for="">Judul : </label>
                        <input type="text" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>" />
                        <br>
                        <label for="">Deskripsi : </label>
                        <textarea name="deskripsi_buku"><?php echo $buku['deskripsi_buku'] ?></textarea>
                        <br>
                        <label for="">Harga : </label>
                        <input type="number" name="harga" value="<?php echo $buku['harga'] ?>" />
                        <br>
                        <label for="penerbit">Penerbit : </label>
                        <input type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" id="penerbit">
                        <br>
                        <label for="tgl_cetak">Tanggal Cetak : </label>
                        <input type="text" name="tgl_cetak" value="<?= $buku['tgl_cetak']; ?>" id="tgl_cetak">
                        <br>
                        <input type="submit" value="Simpan" name="simpan" />
                    
                    </fieldset>


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