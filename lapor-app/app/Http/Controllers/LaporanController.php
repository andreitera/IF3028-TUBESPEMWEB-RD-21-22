<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $list_laporan = Laporan::where('isi', 'LIKE', '%'.$cari.'%')
            ->orWhere('waktu','LIKE','%'.$cari.'%')
            ->get();
        return view('home', compact(
            'list_laporan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambah_laporan = new Laporan();
        return view('createLapor',compact(
            'tambah_laporan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = new DateTime('NOW');
        $tambah_laporan = new Laporan();
        $tambah_laporan->isi = $request->isi;
        $tambah_laporan->aspek = $request->aspek;
        $tambah_laporan->lampiran = $request->file('lampiran')->store('document');
        $tambah_laporan->waktu = $dt->format('Y-m-d H:i:s');
        $tambah_laporan->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Laporan::find($id);
        return view('detail', compact(
            'model'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_laporan = Laporan::find($id);
        return view('editLapor',compact(
            'edit_laporan'
        ));
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
        $dt = new DateTime('NOW');
        $edit_laporan = Laporan::find($id);
        $edit_laporan->isi = $request->isi;
        $edit_laporan->aspek = $request->aspek;
        $edit_laporan->lampiran = $request->file('lampiran')->store('document');
        $edit_laporan->waktu = $dt->format('Y-m-d H:i:s');
        $edit_laporan->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Laporan::find($id);
        $model->delete();
        return redirect('home');
    }
}
