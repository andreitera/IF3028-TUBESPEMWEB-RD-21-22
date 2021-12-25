<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(request('keyword')){
            $posts = Laporan::where('isilaporan', 'Like', '%'. request('keyword') . '%')->get();
        } else{
            $posts = Laporan::orderBy('id', 'DESC')->get();
        }

        return view("index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("lapor");
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
        try {
            $validated = request()->validate([
                'laporan'   => 'required',
                'aspek'  => 'required',
                'lampiran'     => 'mimes:doc,docx,xls,xlsx,ppt,pptx,pdf,jpeg,jpg,png|max:2048',
            ]);


            Laporan::create([
                'isilaporan' => $request->laporan,
                'aspek' => $request->aspek,
                'lampiran' => $request->file('lampiran')->move('files', $request->file('lampiran')->hashName())
            ]);
        } catch (Exception $e) {
            return redirect()->route('index')->with('status', 'Gagal Lapor!');
        }

        return redirect()->route('index')->with('status', 'Berhasil Lapor!');
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
        $post = Laporan::where('id', $id)->firstOrFail();
        return view("detail", compact("post"));
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
        $post = Laporan::where('id', $id)->firstOrFail();
        if(\File::exists(public_path($post->lampiran))){
            \File::delete(public_path($post->lampiran));
        }

        $post->delete();

        return redirect()->route('index')->with('status', 'Berhasil Menghapus Lapor!');
    }
}
