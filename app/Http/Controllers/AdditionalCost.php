<?php

namespace App\Http\Controllers;

use App\Models\AditionalCostController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdditionalCost extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AditionalCostController::all();

        return view('aditional/index', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aditional/add');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_pengeluaran' => 'required|min:5',
            'keterangan' => 'required',
            'biaya' => 'required',
            'tanggal_transaksi' => 'required',
            'nama_konsumen' => 'required',
            'email_konsumen' => 'required',
        ]);
        AditionalCostController::create($request->all());
        return redirect(url('aditional'));

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('aditional.edit', compact('aditional'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $tabel_aditional =AditionalCostController::findOrFail($id);

        $tabel_aditional->nama_pengeluaran = $request->nama_pengeluaran;
        $tabel_aditional->keterangan = $request->keterangan;
        $tabel_aditional->biaya = $request->biaya;
        $tabel_aditional->tanggal_transaksi = $request->tanggal_transaksi;
        $tabel_aditional->nama_konsumen = $request->nama_konsumen;
        $tabel_aditional->email_konsumen = $request->email_konsumen;

        $tabel_aditional->save();

        if ($tabel_aditional) {
            return redirect()->route('aditional');
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $tabel_aditional = AditionalCostController::findOrFail($id);
        $tabel_aditional->delete();

        if ($tabel_aditional) {
            return redirect()->route('aditional');
        }

        //
    }
}
