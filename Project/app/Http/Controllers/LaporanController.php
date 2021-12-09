<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $isValid = $request->validate([
                'judul' => 'required',
                'isiLaporan' => 'required',
                'lokasiKejadian' => 'required',
                'instansiTujuan' => 'required',
                'kategoriLaporan' => 'required',
                'tanggalKejadian' => 'required',
            ]);

        if($isValid) {
            $res = $request->all();
            $input = [
                'judul' => $res['judul'],
                'isiLaporan' => $res['isiLaporan'],
                'lokasiKejadian' => $res['lokasiKejadian'],
                'instansiTujuan' => $res['instansiTujuan'],
                'kategoriLaporan' => $res['kategoriLaporan'],
                'tanggalKejadian' => $res['tanggalKejadian']
            ];

            try {
                $saved = Laporan::create($input);
            } catch (\Illuminate\Database\QueryException $exception) {
                $errorInfo = $exception->errorInfo;
                return response($errorInfo);
            }
            

            return response()->json([
                'success' => 'data saved!',
                'data' => $saved
            ]);
        }

        return response()->json([
            'error' => 'Cannot saved data'
        ]);
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
