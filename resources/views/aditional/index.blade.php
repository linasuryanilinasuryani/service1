@extends('master')

@section('judul', 'Data Dosen')

@section('isi')
    <h1>Data Dosen</h1>
    <a href="{{ route('aditional.create')}}" class="btn btn-info float-end mt-2"> Tambah Data </a>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengeluaran</th>
            <th>Keterangan</th>
            <th>biaya</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Konsumen</th>
            <th>Email Konsumen</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nama_pengeluaran }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->biaya }}</td>
                <td>{{ $row->tanggal_transaksi }}</td>
                <td>{{ $row->nama_konsumen }}</td>
                <td>{{ $row->email_konsumen }}</td>
                <td>
                    <form action="{{ route('aditional.delete', $row->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        {{-- tombol hapus --}}
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda Yakin ?')"
                        >Hapus</button>
                        <a href="{{ route('aditional.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection
