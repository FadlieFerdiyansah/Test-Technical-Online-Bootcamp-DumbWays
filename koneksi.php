<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'web_course');

if (!$koneksi) {
    echo "Gagal Terhubung Ke Database";
}
