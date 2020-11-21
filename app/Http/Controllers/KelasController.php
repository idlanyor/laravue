<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 0;
        $num= 0;
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('admin.datasource.kelas',compact('no','kelas','jurusan','num'));
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
    public function storejurus(Request $request)
    {
        $this->validate($request,[
            'nama_jurusan'=>'required',
            'seo_jurusan'=>'required',
        ]);
        $jurusan = New Jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->seo_jurusan  = $request->seo_jurusan;
        $jurusan->save();
        Alert::Success('sukses','Data berhasil disimpan');
        return redirect('admin/datasource/kelas');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kelas'=>'required',
            'seo_kelas'=>'required'
        ]);
        $kelas = New Kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->seo_kelas  = $request->seo_kelas;
        $kelas->save();
        Alert::Success('sukses','Data berhasil disimpan');
        return redirect('admin/datasource/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function apdet(Request $request, Jurusan $jurusan,$id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->seo_jurusan  = $request->seo_jurusan;
        $jurusan->save();
        Alert::Success('sukses','Data berhasil disimpan');
        return redirect('admin/datasource/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        Alert::Success('Sukses','Data berhasil di Hapus');
        return redirect('admin/datasource/kelas');
    }
    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        Alert::Success('Sukses','Data berhasil di Hapus');
        return redirect('admin/datasource/kelas');

    }
}
