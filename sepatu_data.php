<?php

$cos = new App\sepatu;
$rows = $cos->tampil();

?>

<h2>Data Sepatu</h2>

<table>
    <tr>
        <th>NO</th>
        <th>MERK SEPATU</th>
        <th>UKURAN SEPATU</th>
        <th>HARGA</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['sepatu_id']; ?></td>
        <td><?php echo $row['sepatu_merk']; ?></td>
        <td><?php echo $row['sepatu_ukuran']; ?></td>
        <td><?php echo $row['harga']; ?></td>
    </tr>
    <?php } ?>
</table>
