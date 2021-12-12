<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Laporan::all();

        return view('index', [
            "items" => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateView()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response($request);
        $isValid = $request->validate([
                'judul' => 'required',
                'isiLaporan' => 'required',
                'kategoriLaporan' => 'required',
                'fileUpload' => 'required|mimes:jpeg,bmp,png,docs,docsx,pdf'
            ]);
        
        if($isValid) {
            $path = $request->file('fileUpload')->store('files');


            $res = $request->all();
            $input = [
                'judul' => $res['judul'],
                'isiLaporan' => $res['isiLaporan'],
                'kategoriLaporan' => $res['kategoriLaporan'],
                'file' => $path
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
    public function showLaporan($id)
    {
        $result = Laporan::findOrFail($id);

        return view('laporan', ["item" => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteLaporan($id)
    {

        $laporan = Laporan::find($id);

        if ($laporan == null) {
            return response()->json([
                'error' => 'laporan not found!'
            ]);
        }
        
        Storage::delete($laporan->file);

        $laporan->delete();

        return response()->json([
            'success' => 'data deleted!'
        ]);
    }

    public function showEditView($id) {
        $laporan = Laporan::find($id);

        return View('edit', [
            "item" => $laporan
        ]);
    }

    public function updateLaporan(Request $request) {
        // return response($request->all());
        $data = $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'isiLaporan' => 'required',
            'kategoriLaporan' => 'required',
            'fileUpload' => 'required|mimes:jpeg,bmp,png,docs,docsx,pdf'
        ]);


        $laporan = Laporan::find($data['id']);
        $laporan->judul = $data['judul'];
        $laporan->isiLaporan = $data['isiLaporan'];
        $laporan->kategoriLaporan = $data['isiLaporan'];
        
        $path = $request->file('fileUpload')->store('files');
        Storage::delete($laporan->file);
        $laporan->file = $path;
        
        $laporan->save();

        return response()->json([
            'success' => 'data updated!',
            'data' => $laporan
        ]);
    }
}
    