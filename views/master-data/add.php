<div class="container">
    <div class="row">
        <div class="col-sm-8 p-4">
            <h3>Tambah Data Barang</h3>
            <br>
            <?php
            if (isset($_POST['save'])) {
                include_once('../sim-inventory/auth/koneksi.php');

                $supplier = $_POST['supplier'];
                $nama_barang = $_POST['nama_barang'];
                $harga = $_POST['harga'];
                $stok = $_POST['stok'];
                $tgl_masuk = $_POST['tgl_masuk'];

                $perintah = "INSERT INTO barang(supplier, nama_barang, harga, stok, tgl_masuk) VALUES('$supplier', '$nama_barang', '$harga', '$stok', '$tgl_masuk')";
                $hasil = mysqli_query($conn, $perintah);

                if ($hasil) {
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=master-data'>";
                }
            }
            ?>
            <form method="POST" href>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" name="supplier" class="form-control" placeholder="Supplier...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_barang" class="form-control" id="" placeholder="Nama barang...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" class="form-control" id="" placeholder="Harga...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="stok" class="form-control" id="" placeholder="Stok...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_masuk" class="form-control" id="" placeholder="Tanggal masuk...">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="save">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>