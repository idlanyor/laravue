<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Rombel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 0;
        $rombel = Rombel::all();
        $kelas = Kelas::all();
        $jurusan= Jurusan::all();
        return view('admin.datasource.rombel',compact('no','rombel','kelas','jurusan'));
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

        $this->validate($request,[
            'nama_rombel'=>'required |unique:rombel',
            'seo_rombel'=>'required',
            'id_kelas'=>'required',
            'id_jurusan'=>'required'
        ]);

            $rombel = New Rombel;
            $rombel->nama_rombel = $request->nama_rombel;
            $rombel->seo_rombel = $request->seo_rombel;
            $rombel->id_kelas = $request->id_kelas;
            $rombel->id_jurusan = $request->id_jurusan;
            $rombel->save();
            Alert::Success('Sukses','Data berhasil ditambahkan');
            return redirect('admin/datasource/rombel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit(Rombel $rombel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rombel = Rombel::find($id);
        $rombel->nama_rombel = $request->nama_rombel;
        $rombel->seo_rombel = $request->seo_rombel;
        $rombel->id_kelas = $request->id_kelas;
        $rombel->id_jurusan = $request->id_jurusan;
        $rombel->update();
        return redirect('admin/datasource/rombel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rombel = Rombel::find($id);
        $rombel->delete();
        Alert::Info('Sukses','Hapus data berhasil');
        return redirect('admin/datasource/rombel');
    }
}
