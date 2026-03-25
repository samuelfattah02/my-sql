<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=kepegawaian", "root", "");
    echo "Koneksi berhasil!";

} catch (Exception $e) {
    echo "Koneksi Gagal: " . $e->getMessage();
}

