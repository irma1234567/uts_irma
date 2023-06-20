<?php

$id = $_GET['id'];
$cos = new App\sepatu();

$row = $cos->edit($id);
?>

<h2>Edit Data</h2>

<form action="sepatu_proses.php" method="post">
    <input type="hidden" name="sepatu_id" value="<?php echo $row['sepatu_id']; ?>">
    <table>
        <tr>
            <td>MERK SEPATU</td>
            <td><input type="text" name="sepatu_merk" value="<?php echo $row['sepatu_merk']; ?>"></td>
        </tr>
        <tr>
            <td>UKURAN SEPATU</td>
            <td><input type="text" name="sepatu_ukuran" value="<?php echo $row['sepatu_ukuran']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>