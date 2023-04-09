<?php

$model = new Pembayaran();
$data_pembayaran = $model->dataPembayaran();
?>
<!-- Content Wrapper. Contains page contant -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembayaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NoKuitansi</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Ke</th>
                                <th>Pesanan_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_pembayaran as $row) {
                            ?>
                                <!-- code html untuk table data -->
                            <tr>
                                <td> <?= $no ?></td>
                                <td> <?=$row ['nokuitansi'] ?></td>
                                <td> <?=$row ['tanggal']  ?></td>
                                <td> <?=$row ['jumlah']  ?></td>
                                <td> <?=$row ['ke'] ?></td>
                                <td> <?=$row ['pesanan_id']  ?></td>
                            </tr>
                            
                            <?php
                            $no++;
                        }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->