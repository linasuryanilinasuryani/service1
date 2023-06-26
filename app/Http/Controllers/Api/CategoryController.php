<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
 public function index(){
   // $data=Category::all();
   $data=Category::with('product')->get();
    return response()->json($data,200);
 }
 //show data cara 1
//  public function show(Customer $id){

//     return response()->json($id,200);
//  }

 //show data cara 2
 public function show($id){

   $data = Category::where('id', $id)->first();
   if (empty($data)){
    return response()->json([
        'pesan' => 'Data Tidak Ditemukan',
        'data' => null
    ], 404);
   }
    return response()->json([
        'pesan' => 'Data Ditemukan',
        'data' => $data
    ], 200);
 }

 public function store(Request $request)
 {
    $validate = Validator::make($request->all(), [
        'name' => 'required',


    ]);

    if ($validate->fails()){
        return $validate->errors();
    }


    $data=Category::created($request->all());

     return response()->json([
        'pesan' => 'Data Berhasil Disimpan',
        'data' => $data
     ], 201);

     //
 }
 public function update(Request $request, $id)
 {
     $data = Category::where('id', $id)->first();

     // cek data dengan id yg dikirimkan
     if (empty($data)) {
         return response()->json([
             'pesan' => 'Data tidak ditemukan',
             'data' => $data
         ], 404);
     }

     // proses validasi
     $validate = Validator::make($request->all(), [
         'name' => 'required',

     ]);

     if ($validate->fails()) {
         return $validate->errors();
     }

     // proses simpan perubahan data
     $data->update($request->all());

     return response()->json([
         'pesan' => 'Data berhasil di update',
         'data' => $data
     ], 201);
 }
 public function delete($id)
 {
     $data = Category::where('id', $id)->first();
     // cek data dengan id yg dikirimkan
     if (empty($data)) {
         return response()->json([
             'pesan' => 'Data tidak ditemukan',
             'data' => $data
         ], 404);
     }

     $data->delete();

     return response()->json([
         'pesan' => 'Data berhasil di hapus',
         'data' => $data
     ], 200);
 }
    //
}
