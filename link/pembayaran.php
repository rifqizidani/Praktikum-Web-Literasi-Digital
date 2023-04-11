<html>
    <head>
        <title>Memasukkan Bilangan</title>
        <link rel="stylesheet" href="style4.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="judul">Online Literacy</h1>
                <ul>
                    <li><a href="../halamanutama.php">Home</a></li>
                    <li><a href="booklist.php">Book List</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <p><script language="JavaScript">
                        function konfirmasi() {
                            var uang = parseFloat(document.fform.pembayaran.value);
                            if (uang < 100000) {
                                alert("Uang Anda Tidak Cukup... Kurang Rp. " + (100000-uang));
                            }
                            if (uang >= 100000) {
                                alert("Pembayaran Sukses. Terima Kasih... Kembalian anda Rp. " + (uang-100000));
                            }
                        }
                    </script></p>
                    <form action="" name="fform">
                        <h1><br>Pembayaran</h1>
                        <pre>
                            <table>
                                <tr>
                                    <td style="font-weight: bold; width: 150px;">Judul Buku</td>
                                    <td>: Judul Buku</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Deskripsi</td>
                                    <td>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dolores ut facere magnam expedita mollitia esse deserunt dignissimos accusantium impedit?</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Harga</td>
                                    <td>: Rp. 100.000</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Uang Anda</td>
                                    <td>:  <input type="text" name="pembayaran" size="11"></td>
                                </tr>
                            </table>
                        </pre>
                        <p>
                            <input type="button" value="Konfirmasi" onclick="konfirmasi()">
                        </p>
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