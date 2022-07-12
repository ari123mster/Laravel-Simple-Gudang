<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modem;
use App\Models\modemkeluar;
use Barryvdh\DomPDF\Facade\Pdf;

class ModemKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modem = modem::get();
        $modemkeluar = modemkeluar::with('modem')->get();
        return view('modemkeluar.index', compact('modem', 'modemkeluar'));
    }
    public function search(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $modemkeluar = modemkeluar::with('modem')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();

        return view('modemkeluar.index', compact('modemkeluar'));
    }

    public function pdfmodemklr($id)
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modem = modem::get();
        return view('modemkeluar.create', compact('modem'));
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
            'modem_id' => 'required',
            'qty' => 'required',
            'team' => 'required',
            'sn' => 'required',
            'tgl_keluar' => 'required',
            'keterangan' => 'required'
        ]);
        modemkeluar::create($request->all());
        return redirect()->route('ModemKeluar.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modemkeluar = modemkeluar::find($id);

        $pdf = PDF::loadView('modemkeluar.cetak2', [
            'modemkeluar' => $modemkeluar
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
        $modemkeluar = modemkeluar::find($id);
        $modemkeluar->delete();
        return redirect()->back()->with('warning', 'Data Berhasil Dihapus');
    }
}
