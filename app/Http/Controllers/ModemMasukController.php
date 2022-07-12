<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modem;
use App\Models\modemmasuk;

class ModemMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modem = modem::get();
        $modemmasuk = modemmasuk::with('modem')->get();
        return view('modemmasuk.index', compact('modem', 'modemmasuk'));
    }
    public function carimodem(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $modemmasuk = modemmasuk::with('modem')
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();

        return view('modemmasuk.index', compact('modemmasuk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modem = modem::get();
        return view('modemmasuk.create', compact('modem'));
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
            'tgl_masuk' => 'required'
        ]);
        modemmasuk::create($request->all());
        return redirect()->route('ModemMasuk.index')->with('success', 'Data Berhasil Disimpan!');
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
        $modemmasuk = modemmasuk::find($id);
        $modemmasuk->delete();
        return redirect()->back()->with('warning', 'Data Berhasil Dihapus');
    }
}
