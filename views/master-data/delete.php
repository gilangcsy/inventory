<?php
include_once('../sim-inventory/auth/koneksi.php');

$perintah = "DELETE FROM barang WHERE id_barang='$_GET[id]'";
$hasil = mysqli_query($conn, $perintah);

if ($hasil) {
    echo "<div class='alert alert-info'>Data Ter-hapus</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=master-data'>";
} else {
    echo "gagal";
}
