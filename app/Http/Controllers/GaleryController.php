<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halaman.admin.galeri.index',[
            'galeries' => DB::table('galeries')->get()
        ]);
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
        $validated = $request->validate([
            'gambar' => 'required|image|max:2048',
            'deskripsi' => 'required',
        ],
        [
            'required' => 'Harap bagian :attribute di isi',
            'gambar.required' => 'Harap unggah gambar terlebih dahulu',
            'gambar.mimes' => 'Format file harus gambar',
            'gambar.max' => 'Ukuran file tidak boleh melebihi 2MB',
        ]
        );
        Galery::create([
            'gambar' => Storage::disk('public')->putFile('gambar', $request->file('gambar')),
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin/galeri')->with('status', 'Galeri Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('halaman.admin.galeri.edit',[
            'galery' => Galery::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'deskripsi' => 'required',
        ],
        [
            'required' => 'Harap bagian :attribute di isi',
        ]
        );
        Galery::where('id',$id)->
                update([
                    'deskripsi' => $request->deskripsi
                ]);

        return redirect('/admin/galeri')->with('status', 'Data Galeri Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galery::where('id',$id)->
                delete();

        return redirect('/admin/galeri')->with('status', 'Galeri Berhasil Dihapus!');
    }
}
