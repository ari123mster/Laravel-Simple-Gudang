<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\masuk;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::get();
        $masuk = masuk::with('barang')->get();

        return view('masuk.index', compact('barang', 'masuk'));
    }

    public function cari(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $masuk = masuk::with('barang')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();

        return view('masuk.index', compact('masuk'));
    }

    public function cetak()
    {

        $barang = barang::get();
        $masuk = masuk::with('barang')->get();
        // return view('barang.show', compact('barang'));
        $pdf = PDF::loadView('masuk.cetak', [
            'masuk' => $masuk
        ]);

        return $pdf->stream('report.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::get();
        return view('masuk.create', compact('barang'));
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
            'barang_id' => 'required',
            'qty' => 'required',
            'tgl_masuk' => 'required'
        ]);
        masuk::create([
            'barang_id' => request('barang_id'),
            'qty' => request('qty'),
            'tgl_masuk' => request('tgl_masuk')
        ]);
        return redirect()->route('masuk.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masuk = masuk::find($id);
        $masuk->delete();
        return redirect()->back()->with('warning', 'Data Berhasil Dihapus');
    }
}
