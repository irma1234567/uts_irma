<?php

namespace App;
use Inc\Koneksi as Koneksi;

class sepatu extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_sepatu";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $sepatu_merk = $_POST['sepatu_merk'];
        $sepatu_ukuran = $_POST['sepatu_ukuran'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO tb_sepatu (sepatu_merk, sepatu_ukuran, harga) VALUES (:sepatu_merk, :sepatu_ukuran, :harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sepatu_merk", $sepatu_merk);
        $stmt->bindParam(":sepatu_ukuran", $sepatu_ukuran);
        $stmt->bindParam(":harga", $harga);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_sepatu WHERE sepatu_id=:sepatu_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sepatu_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $sepatu_merk = $_POST['sepatu_merk'];
        $sepatu_ukuran = $_POST['sepatu_ukuran'];
        $harga = $_POST['harga'];
        $sepatu_id = $_POST['sepatu_id'];

        $sql = "UPDATE tb_sepatu SET sepatu_merk=:sepatu_merk, sepatu_ukuran=:sepatu_ukuran, harga=:harga WHERE sepatu_id=:sepatu_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sepatu_merk", $sepatu_merk);
        $stmt->bindParam(":sepatu_ukuran", $sepatu_ukuran);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":sepatu_id", $sepatu_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_sepatu WHERE sepatu_id=:sepatu_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sepatu_id", $id);
        $stmt->execute();

    }

}