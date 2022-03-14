<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = $request->password;
        $isi = [
            'role' => $request->role,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => bcrypt($password),
            'confirm_password' => $request->confirm_password
        ];

        User::create($isi);

        return redirect('/user');
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
        $edit = User::find($id);
        return view('user.edit', compact('edit'));
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
        if ($request->foto > 0) {
            $foto = $request->foto;
            $v_foto = time() . rand(100, 999) . "-" . $foto->getClientOriginalName();
        }

        $where = User::find($id);

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'email' => $request->email,
            'alamat' => $request->alamat
        ];



        if ($request->foto > 0 && isset($v_foto)) {
            $where->foto = $v_foto;
        }

        if (isset($v_foto) > 0) {
            $foto->move(public_path() . '/foto', $v_foto);
        }


        $where->update($data);
        // dd($id);
        return redirect("/user/edit/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/user');
    }
}
