<?php

namespace App\Http\Controllers;

use App\pramuka;
use Illuminate\Http\Request;

class PramukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pramuka = pramuka::all();
        return view('pramuka.index', compact('pramuka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pramuka.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        pramuka::create($request->all());
       return redirect('/pramuka')->with('status','Data pramuka berhasil di tambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pramuka  $pramuka
     * @return \Illuminate\Http\Response
     */
    public function show(pramuka $pramuka)
    {
        return view('pramuka.show', compact('pramuka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pramuka  $pramuka
     * @return \Illuminate\Http\Response
     */
    public function edit(pramuka $pramuka)
    {
        return view('pramuka.edit',compact('pramuka'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pramuka  $pramuka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pramuka $pramuka)
    {
        pramuka::where('id', $pramuka->id)
                ->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'handphone' => $request->handphone,
                ]);

                return redirect('/pramuka')->with('status','Data pramuka berhasil di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pramuka  $pramuka
     * @return \Illuminate\Http\Response
     */
    public function destroy(pramuka $pramuka)
    {
        pramuka::destroy($pramuka->id);
        return redirect('/pramuka')->with('status','Data pramuka berhasil di hapus!!!');
       
    }
}
