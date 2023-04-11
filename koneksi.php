<?php

$conn = mysqli_connect("localhost", "root", "", "praktikumpbw");

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>