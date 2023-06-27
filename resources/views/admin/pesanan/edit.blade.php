@extends('admin.layout.app')
@section('content')
@foreach ($pesanan as $pesan)

<form method="POST" action="{{ url('admin/pesanan/update/'. $pesan->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form edit data</h4>
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">tanggal</label> 
      <div class="col-8">
        <input id="tanggal" name="tanggal" value="{{ $pesan->tanggal }}" type="date" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label> 
      <div class="col-8">
        <input id="nama_pemesan" name="nama_pemesan" value="{{ $pesan->nama_pemesan }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label> 
      <div class="col-8">
        <textarea id="alamat_pemssan" name="alamat_pemesan" value="" cols="40" rows="5" class="form-control">{{ $pesan->alamat_pemesan }}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="no_hp" class="col-4 col-form-label">No HP</label> 
      <div class="col-8">
        <input id="no_hp" name="no_hp" value="{{ $pesan->no_hp }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">Email</label> 
      <div class="col-8">
        <input id="email" name="email" value="{{ $pesan->email }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
      <div class="col-8">
        <input id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $pesan->jumlah_pesanan }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
      <div class="col-8">
        <textarea id="deskripsi" name="deskripsi"  cols="40" rows="5" class="form-control">{{ $pesan->deskripsi }}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
      <div class="col-8">
        <select id="produk_id" name="produk_id" class="custom-select">
            @foreach ($produk as $prod)
                <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
            @endforeach
        </select>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Simpan & Edit Data</button>
      </div>
    </div>
  </form>
  @endforeach
  @endsection