<?php
// buat objeck dari class jenis_produk dan produk
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new produk();

// panggil fungsi data produk & jenis produk yang ada di model
$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();
?>
<!-- Content Wrapper. Contains page contant -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <form action="produk_controller.php" method="POST">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="harga_beli" name="harga_beli" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <input id="min_stok" name="min_stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="prod" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="prod" name="prod" class="custom-select"></select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses"  value="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <button type="submit" name="proses" value="batal" class="btn btn-danger">Batal</button>
    </div>
  </div>
</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
