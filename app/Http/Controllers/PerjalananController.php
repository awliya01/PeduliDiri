<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perjalanan;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Perjalanan::where('id_user', Auth::user()->id)->get();
        return view('perjalanan.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'suhu_tubuh' => $request->suhu_tubuh,
            'id_user' => Auth::user()->id
        ];
        Perjalanan::create($data);
        return redirect('/diri');
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
    public function edit($id_perjalanan)
    {
        $edit = Perjalanan::find($id_perjalanan);
        return view('perjalanan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_perjalanan)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perjalanan)
    {
        $table = Perjalanan::find($id_perjalanan)->delete();
        return redirect('/diri');
    }
}
