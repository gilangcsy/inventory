<?php

include_once('../sim-inventory/auth/koneksi.php');
$perintah = $conn->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$row = $perintah->fetch_assoc();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 p-4">
            <h3>Ubah Data Barang</h3>
            <br>
            <?php
            if (isset($_POST['edit'])) {
                include_once('../sim-inventory/auth/koneksi.php');

                $supplier = $_POST['supplier'];
                $nama_barang = $_POST['nama_barang'];
                $harga = $_POST['harga'];
                $stok = $_POST['stok'];
                $tgl_masuk = $_POST['tgl_masuk'];

                $perintah = "UPDATE barang SET supplier = '$supplier', nama_barang = '$nama_barang', harga = '$harga', stok = '$stok', tgl_masuk = '$tgl_masuk' WHERE id_barang = '$_GET[id]'";
                $hasil = mysqli_query($conn, $perintah);

                if ($hasil) {
                    echo "<div class='alert alert-info'>Data Ter-update</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=master-data'>";
                }
            }
            ?>
            <form method="POST" href>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $row['supplier'] ?>" name="supplier" class="form-control" placeholder="Supplier...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $row['nama_barang'] ?>" name="nama_barang" class="form-control" id="" placeholder="Nama barang...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" value="<?= $row['harga'] ?>" name="harga" class="form-control" id="" placeholder="Harga...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" value="<?= $row['stok'] ?>" name="stok" class="form-control" id="" placeholder="Stok...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" value="<?= $row['tgl_masuk'] ?>" name="tgl_masuk" class="form-control" id="" placeholder="Tanggal masuk...">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>