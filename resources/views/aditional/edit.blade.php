@extends('master')
@section('judul', 'Edit Data Aditional')

@section('isi')
    <h1>Edit Data Aditional</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('aditional.update', $table_aditional->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <label for="">Nama Pengeluaran</label>
            <input type="text" class="form-control" name="pengeluaran" value="{{ old('pengeluaran') }}">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="Keterangan" value="{{ old('Keterangan') }}">

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
        <a href="{{ url('data-dosen') }}" class="btn btn-warning">Batal</a>
    </form>
@endsection
