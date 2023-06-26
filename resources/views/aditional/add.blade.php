@extends('master')
@section('judul', 'Tambah Data Additional Costs')

@section('isi')
    <h1>Tambah Data Additional</h1>
    <a href="{{ route('aditional.index') }}" class="btn btn-warning float-right">Kembali</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('aditional.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Nama Pengeluaran</label>
            <input type="text" class="form-control" name="nama_pengeluaran" value="{{ old('nama_pengeluaran') }}">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}">

        </div>
        <div class="form-group">
            <label for="">biaya</label>
            <input type="text" class="form-control" name="biaya" value="{{ old('biaya') }}">
        </div>
        <div class="form-group">
            <label for="">Tanggal Transaksi</label>
            <input type="text" class="form-control" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}">
        </div>
        <div class="form-group">
            <label for="">Nama Konsumen</label>
            <input type="text" class="form-control" name="nama_konsumen" value="{{ old('nama_konsumen') }}">
        </div>
        <div class="form-group">
            <label for="">Email Konsumen</label>
            <input type="text" class="form-control" name="email_konsumen" value="{{ old('email_konsumen') }}">
        </div>


        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
    </form>
@endsection
