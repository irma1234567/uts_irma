<?php

require_once "inc/Koneksi.php";
require_once "app/sepatu.php";

$cos = new App\sepatu();

if (isset($_POST['btn_simpan'])) {
    $cos->simpan();
    header("location:index.php?hal=sepatu_tampil");
}

if (isset($_POST['btn_update'])) {
    $cos->update();
    header("location:index.php?hal=sepatu_tampil");
}