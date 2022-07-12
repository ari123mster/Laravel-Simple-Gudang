<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\keluar;
use Barryvdh\DomPDF\Facade\Pdf;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::get();
        $keluar = keluar::with('barang')->get();
        return view('keluar.index', compact('barang', 'keluar'));
    }
    public function searchbarang(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $keluar = keluar::with('barang')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();

        return view('keluar.index', compact('keluar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::get();
        return view('keluar.create', compact('barang'));
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
            'team' => 'required',
            'tgl_keluar' => 'required',
            'keterangan' => 'required'
        ]);
        keluar::create($request->all());
        return redirect()->route('keluar.index')->with('success', 'Data Berhasil Disimpam!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluar = keluar::find($id);

        $pdf = PDF::loadView('keluar.cetak', [
            'keluar' => $keluar
        ]);

        return $pdf->download('report.pdf');
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
        $keluar = keluar::find($id);
        $keluar->delete();
        return redirect()->back()->with('warning', 'Data Berhasil Dihapus');
    }

    public function cetak($id)
    {
        $keluar = keluar::find($id);
        // return view('keluar.show', compact('keluar'));
        $pdf = PDF::loadView('keluar.cetak', [
            'keluar' => $keluar
        ]);

        return $pdf->download('report.pdf');
    }
}
