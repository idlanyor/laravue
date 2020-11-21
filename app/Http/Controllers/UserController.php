<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 0;
        $user = User::all()->sortByDesc('id');
        return view('admin.users.show',compact('user','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name'=>'required',
            'password'=>'required | confirmed | min:8',
            'email'=>'required |unique:users'
        ]);
        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->jabatan= $request->jabatan;
        $user->password = bcrypt($request->password);
        $user->save();
        Alert::Success('Sukses','Data berhasil ditambahkan');
        return redirect('admin/roleuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {
        $user = User::find($id);
        if ($request->input('password')) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->jabatan= $request->jabatan;
            $user->password = bcrypt($request->password);
        }
        else{
            $user->name = $request->name;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->jabatan= $request->jabatan;
        }
            $user->update();
            Alert::success('Sukses','Data berhasil di Update');
            return redirect('admin/roleuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Sukses','Data berhasil di Hapus');
        return redirect('admin/roleuser');
    }
}
