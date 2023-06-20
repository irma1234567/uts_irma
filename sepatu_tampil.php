<?php

$cos = new App\sepatu;
$rows = $cos->tampil();

?>

<h2>Data Sepatu</h2>

<a href="index.php?hal=sepatu_input" class="btn">Tambah Data</a>

<table>
    <tr>
        <th>NO</th>
        <th>MERK SEPATU</th>
        <th>UKURAN SEPATU</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['sepatu_id']; ?></td>
        <td><?php echo $row['sepatu_merk']; ?></td>
        <td><?php echo $row['sepatu_ukuran']; ?></td>
        <td><?php echo $row['harga']; ?></td>
        <td><a href="index.php?hal=sepatu_edit&id=<?php echo $row['sepatu_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=sepatu_delete&id=<?php echo $row['sepatu_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
