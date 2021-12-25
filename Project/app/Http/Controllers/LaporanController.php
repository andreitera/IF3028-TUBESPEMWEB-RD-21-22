<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Error;
use Exception;
use Facade\FlareClient\View;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    
    public function showAboutView() 
    {
        return view('about', []);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Laporan::orderBy('created_at', 'desc')->simplePaginate(4);
        
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
        try {
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
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            return response()->json([
                'error' => 'Cannot saved data',
                'msg' => $e->getMessage()
            ]);
        }
        
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

        return view('edit', [
            "item" => $laporan
        ]);
    }

    public function updateLaporan(Request $request) {
        // return response($request->all());

        try {
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
            $laporan->kategoriLaporan = $data['kategoriLaporan'];
            
            $path = $request->file('fileUpload')->store('files');
            Storage::delete($laporan->file);
            $laporan->file = $path;
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Cannot update data',
                'msg' => $e->getMessage()
            ]);
        }
        
        try {
            $laporan->save();
        } catch (Exception $e) {
            error_log($e->getMessage());
            return response()->json([
                'error' => 'Cannot update data',
                'msg' => $e->getMessage()
            ]);
        }
        

        return response()->json([
            'success' => 'data updated!',
            'data' => $laporan
        ]);
    }
}
    