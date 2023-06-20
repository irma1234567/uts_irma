<?php

$id = $_GET['id'];

$cos = new App\sepatu();
$rows = $cos->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=sepatu_tampil">Kembali</a>
</div>