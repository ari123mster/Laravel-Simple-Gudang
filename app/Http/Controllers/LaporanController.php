<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modemkeluar;
use App\Models\modemmasuk;
use App\Models\keluar;
use App\Models\masuk;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan.index');
    }

    public function cetakbrgmsk(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $masuk = masuk::with('barang')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();
        $pdf = PDF::loadView('masuk.cetak', [
            'masuk' => $masuk
        ]);

        return $pdf->stream('report.pdf');
    }
    public function cetakbrgklr(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $keluar = keluar::with('barang')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();
        $pdf = PDF::loadView('keluar.cetak2', [
            'keluar' => $keluar
        ]);

        return $pdf->stream('report.pdf');
    }
    public function cetakmdmmsk(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $modemmasuk = modemmasuk::with('modem')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();
        $pdf = PDF::loadView('modemmasuk.cetak', [
            'modemmasuk' => $modemmasuk
        ]);

        return $pdf->stream('report.pdf');
    }
    public function cetakmdmklr(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $modemkeluar = modemkeluar::with('modem')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();
        $pdf = PDF::loadView('modemkeluar.cetak', [
            'modemkeluar' => $modemkeluar
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
