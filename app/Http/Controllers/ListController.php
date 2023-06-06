<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\listbarang;
use App\Models\satuan;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Data';
        $DataBarang = listbarang::all();

        return view('listbarang', [
            'pageTitle' => $pageTitle,
            'DataBarang' => $DataBarang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Update barang';

        return view('update', [
            'pageTitle' => $pageTitle,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barangdb = new listbarangs;
        $barangdb->name_barang = $request->nama;
        $barangdb->description = $request->des;
        $barangdb->stock = $request->stock;
        $barangdb->harga = $request->harga;
        $barangdb->sn_id = $request->satuan;
        $barangdb->save();

        return redirect()->route('barang.index');
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
        $pageTitle = 'Edit';
        $satuans = satuan::all();
        $DataBarang = listbarangs::find($id);

        return view('edit', [
            'pageTitle' => $pageTitle,
            'satuans' => $satuans,
            'DataBarang' => $DataBarang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'des' => 'required',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barangdb = listbarangs::find($id);
        $barangdb->name_barang = $request->nama;
        $barangdb->description = $request->des;
        $barangdb->stock = $request->stok;
        $barangdb->harga = $request->harga;
        $barangdb->satuan_barang = $request->satuan;
        $barangdb->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        listbarangs::find($id)->delete();
        return redirect()->route('barang.index');
    }
}
