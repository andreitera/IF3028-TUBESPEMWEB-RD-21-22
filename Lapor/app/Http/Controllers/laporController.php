<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lapor;

class laporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lapor = \App\Models\lapor::all();
        return view('lapor.index', ['lapor' => $lapor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lapor.tambah');
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
        $request->validate([
            'nama' => 'required',
            'isi' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required'
        ]);

        lapor::create($request->all());
        return redirect('/')->with('status', 'selamat! data telah habis ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\lapor $lapor)
    {
        //
        return view('lapor.detail', compact('lapor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\lapor $lapor)
    {
        //
        return view('lapor.edit', compact('lapor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\lapor $lapor)
    {
        //
        $request->validate([
            'nama' => 'required',
            'isi' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required'
        ]);

        lapor::where('id', $lapor->id)
            ->update([
                'nama' => $request->nama,
                'isi' => $request->isi,
                'aspek' => $request->aspek,
                'lampiran' => $request->lampiran
            ]);

        // if ($request->hasFile('logo')) {
        //     $dataHimpunan->update([
        //         'logo' => url($request->file('logo')->move('Himpunan', $himpunan->namaSingkat . '.' . $request->file('logo')->extension())),
        //     ]);
        // }

        return redirect('/')->with('status', 'Selamat! Data telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\lapor $lapor)
    {
        //
        lapor::destroy($lapor->id);
        return redirect('/')->with('status', 'Selamat! Data Berhasil Dihapus.');
    }
}
