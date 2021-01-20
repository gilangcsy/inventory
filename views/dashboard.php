<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <?php
                    include_once('../sim-inventory/auth/koneksi.php');
                    $perintah = "SELECT COUNT(*) as jml FROM barang";
                    $perintah2 = "SELECT SUM(stok) as stok FROM barang";
                    $perintah3 = "SELECT COUNT(DISTINCT(supplier)) as supplier FROM barang";

                    $hasil = mysqli_query($conn, $perintah);
                    $hasil2 = mysqli_query($conn, $perintah2);
                    $hasil3 = mysqli_query($conn, $perintah3);

                    $row = mysqli_fetch_array($hasil);
                    $row2 = mysqli_fetch_array($hasil2);
                    $row3 = mysqli_fetch_array($hasil3);
                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Barang</span>
                        <span class="info-box-number">
                            <?= $row['jml']; ?>
                            <small>Pcs</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Stok Barang</span>
                        <span class="info-box-number"><?= $row2['stok'] ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah supplier</span>
                        <span class="info-box-number"><?= $row3['supplier']; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>

    </div>
</section>