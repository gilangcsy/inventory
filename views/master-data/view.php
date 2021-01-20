<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Barang</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="index.php?halaman=tambah-master-data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Supplier</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Tanggal Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'auth/koneksi.php';
                            $nomor = 1;
                            $perintah = "SELECT * FROM barang";
                            $hasil = mysqli_query($conn, $perintah);
                            while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $row['supplier'] ?></td>
                                    <td><?= $row['nama_barang'] ?></td>
                                    <td><?= $row['harga'] ?></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td><?= $row['tgl_masuk'] ?></td>
                                    <td>
                                        <a href="index.php?halaman=hapus-master-data&id=<?= $row['id_barang'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?');">
                                            <i class=" fa fa-trash"></i>
                                        </a>

                                        <a href="index.php?halaman=edit-master-data&id=<?= $row['id_barang']; ?>" class="btn btn-sm btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>