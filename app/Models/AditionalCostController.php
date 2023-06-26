<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AditionalCostController extends Model
{
    use HasFactory;
    // jika nama tabel tidak sesuai dengan aturan laravel, maka perlu dituliskan nama tabelnya
    // nama tabel yg sesuai untuk model Dosen yaitu dosens
    protected $table = 'additional_cost';

    protected $fillable = ['nama_pengeluaran', 'keterangan', 'biaya', 'tanggal_transaksi', 'nama_konsumen', 'email_konsumen'];
}
