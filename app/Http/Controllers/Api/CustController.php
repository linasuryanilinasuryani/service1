<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AditionalCostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustController extends Controller
{
 public function index(){
    $data=AditionalCostController::all();
    return response()->json($data,200);
 }
 public function store(Request $request)
 {
    $validate = Validator::make($request->all(), [
        'nama_pengeluaran' => 'required|min:5',
        'keterangan' => 'required',
        'biaya' => 'required',
        'tanggal_transaksi' => 'required',
        'nama_konsumen' => 'required',
        'email_konsumen' => 'required',


    ]);
    
    if ($validate->fails()){
        return $validate->errors();
    }


    $data=AditionalCostController::created($request->all());

     return response()->json([
        'pesan' => 'Data Berhasil Disimpan',
        'data' => $data
     ], 201);

     //
 }
    //
}
