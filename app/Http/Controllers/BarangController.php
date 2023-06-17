<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        //ELOQUENT
        $barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        $satuans = Satuan::all();
        return view('barang.addbarang', compact('pageTitle','satuans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|unique:barangs,KodeBarang',
            'NamaBarang' => 'required',
            'HargaBarang' => 'required|numeric',
            'DeskripsiBarang' => 'required',
            'SatuanBarang' => 'required',
        ]);

        //ELOQUENT

        $barang = New Barang;
        $barang->KodeBarang = $request->KodeBarang;
        $barang->NamaBarang = $request->NamaBarang;
        $barang->HargaBarang = $request->HargaBarang;
        $barang->DeskripsiBarang = $request->DeskripsiBarang;
        $barang->satuans_id = $request->SatuanBarang;
        $barang->save();

        return redirect()->route('listbarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pageTitle = 'Detail Barang';
        $barang = Barang::find($id);

        return view('barang.show', compact('pageTitle','barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Edit Barang';
        $satuans = DB::table('satuans')->get();

        $satuans = Satuan::all();
        $barang = Barang::find($id);

        return view('barang.editbarang', compact('pageTitle','satuans','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'KodeBarang' => 'required|unique:barangs,KodeBarang,'.$id,
            'NamaBarang' => 'required',
            'HargaBarang' => 'required|numeric',
            'DeskripsiBarang' => 'required',
            'SatuanBarang' => 'required',
        ]);

        //ELOQUENT
        $barang = Barang::find($id);
        $barang->KodeBarang = $request->KodeBarang;
        $barang->NamaBarang = $request->NamaBarang;
        $barang->HargaBarang = $request->HargaBarang;
        $barang->DeskripsiBarang = $request->DeskripsiBarang;
        $barang->satuans_id = $request->SatuanBarang;
        $barang->save();


        return redirect()->route('listbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ELOQUENT
        $barang = Barang::find($id)->delete();

        return redirect()->route('listbarang.index');
    }
}
