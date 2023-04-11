<!-- Koneksi -->
<?php
    $conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Booklist</title>
        <link rel="stylesheet" href="style1.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>  
            .mode { 
                float:right; 
                margin-top: 20px;
                margin-right: 20px;
            } 
            .change { 
                cursor: pointer; 
                border: 1px solid #555; 
                border-radius: 10%; 
                width: 20px; 
                text-align: center; 
                padding: 8px; 
                margin-left: 8px; 
            } 
            .dark{ 
                background-color: grey; 
                background-image: url(../img/hehe.webp);
                color: #e6e6e6; 
            } 
            .container2 {
                background-color: purple; 
            }
        </style> 
    </head>
    <body>
        <div class="container" class="container2">
            <div class="header">
                <div class="mode"> 
                    <b>Nigth Mode: </b><span class="change">OFF</span> 
                </div>
                <script> 
                    $( ".change" ).on("click", function() { 
                        if( $( "body" ).hasClass( "dark" )) { 
                            $( "body" ).removeClass( "dark" );
                            $( ".container" ).removeClass( "container2" ); 
                            $( ".change" ).text( "OFF" ); 
                        } else { 
                            $( "body" ).addClass( "dark" ); 
                            $( ".container" ).addClass( "container2" );
                            $( ".change" ).text( "ON" ); 
                        } 
                    }); 
                </script> 
                <br>
                <h1 class="judul">Online Literacy</h1>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="booklist.php">Book List</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <h2>Book List</h2>
                    <form action="booklist.php" method="get">
                        <br>
                        <label for="cari">Cari : </label>
                        <input type="text" name="cari" id="">
                        <input type="submit" name="judul" value="judul">
                        <input type="submit" name="harga" value="harga">
                        <input type="submit" name="penerbit" value="penerbit">
                        <br><br>
                    </form>
                    <?php 
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            echo "<b>Hasil pencarian : ".$cari."<br>";
                        }
                    ?>
                    <?php 
                        if(isset($_GET['judul'])){
                            $cari = $_GET['cari'];
                            $sql = "SELECT * FROM laporan4part2 WHERE judul_buku LIKE '%".$cari."%'";
                            $query = mysqli_query($conn, $sql);
                        } elseif(isset($_GET['harga'])) {
                            $cari = $_GET['cari'];
                            $sql = "SELECT * FROM laporan4part2 WHERE harga LIKE '%".$cari."%'";
                            $query = mysqli_query($conn, $sql);
                        } elseif(isset($_GET['penerbit'])) {
                            $cari = $_GET['cari'];
                            $sql = "SELECT * FROM laporan4part2 WHERE penerbit LIKE '%".$cari."%'";
                            $query = mysqli_query($conn, $sql);
                        } else {
                            $sql = "SELECT * FROM laporan4part2";
                            $query = mysqli_query($conn, $sql);	
                        }

                        while($buku = mysqli_fetch_array($query)){ ?>
                            <div class="menu">
                                <img src="<?= 'file/' . $buku['gambar']; ?>" alt="" style="width: 150px;"><br>
                                <?php
                                echo "Judul : " . $buku['judul_buku'] . "<br>";
                                echo "Deskripsi : " . $buku['deskripsi_buku'] . "<br>";
                                echo "Harga : " . $buku['harga'] . "<br>";
                                echo "Penerbit : " . $buku['penerbit'] . "<br>";
                                echo "Tanggal Cetak : " . $buku['tgl_cetak'] . "<br>";
                                echo "<a href='updatebuku.php?id=".$buku['id']."'>Edit</a> | ";
                                echo "<a href='hapus.php?id=".$buku['id']."'>Hapus</a><br><br>"; ?>
                            </div> <?php
                            
                        }
                    ?>
                    <a href="tambahbuku.php"><p>Tambahkan Buku</p></a> 
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