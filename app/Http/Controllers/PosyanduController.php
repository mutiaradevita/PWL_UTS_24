<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
            $posyandus = Posyandu::all(); // Mengambil semua isi tabel
            $posts = Posyandu::orderBy('no_urut', 'desc')->paginate(6);
            return view('posyandus.index', compact('posyandus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posyandus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
 $request->validate([
    'no_urut' => 'required',
    'nama' => 'required',
    'alamat' => 'required',
    'tanggal_lahir' => 'required',
    'bb_lahir' => 'required',
    'tb_lahir' => 'required',
    ]);
    //fungsi eloquent untuk menambah data
    Posyandu::create($request->all());
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('posyandus.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        $Posyandu = Posyandu::find($no_urut);
        return view('posyandus.detail', compact('Posyandu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        $Posyandu = Posyandu::find($no_urut);
        return view('posyandus.edit', compact('Posyandu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
            ]);
           //fungsi eloquent untuk mengupdate data inputan kita
            Posyandu::find($no_urut)->update($request->all());
           //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('posyandus.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {
        Posyandu::find($no_urut)->delete();
        return redirect()->route('posyandus.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}
