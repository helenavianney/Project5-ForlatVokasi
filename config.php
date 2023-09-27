<?php
// kode connect ke database //
$server = "localhost";
$user = "root";
$pass = "";
$database = "forlatvokasi";

$conn = mysqli_connect($server, $user, $pass, $database);

// jika gagal connect akan muncul alert //
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}