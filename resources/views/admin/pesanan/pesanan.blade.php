@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">pesanan</li>
    </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header"> 
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Produk ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($pesanan as $pesan)  
                    </tr>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $pesan->tanggal }}</td>
                        <td>{{ $pesan->nama_pemesan }}</td>
                        <td>{{ $pesan->alamat_pemesan }}</td>
                        <td>{{ $pesan->no_hp }}</td>
                        <td>{{ $pesan->email }}</td>
                        <td>{{ $pesan->jumlah_pesanan }}</td>
                        <td>{{ $pesan->deskripsi }}</td>
                        <td>{{ $pesan->produk_id }}</td>
                        <td><a href="{{ url('admin/pesanan/edit/'. $pesan->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/pesanan/delete/'. $pesan->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        @php
                            $no++
                        @endphp
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection