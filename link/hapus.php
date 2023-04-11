<?php
    $conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }

    if( isset($_GET['id']) ){

        // ambil id dari query string
        $id = $_GET['id'];
    
        // buat query hapus
        $sql = "DELETE FROM laporan4part2 WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    
        // apakah query hapus berhasil?
        if( $query ){
            header('Location: booklist.php');
        } else {
            die("gagal menghapus...");
        }
    
    } else {
        die("akses dilarang...");
    }

?>
