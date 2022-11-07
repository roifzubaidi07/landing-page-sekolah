<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('halaman.admin.jabatan.index',[
            'leaders' => DB::table('leaders')->get()
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
            'name' => 'required',
            'department' => 'required',
            'nip' => 'required',
        ],
        [
            'required' => 'Harap bagian :attribute di isi',
        ]
        );
        Leader::create([
            'name' => $request->name,
            'department' => $request->department,
            'nip' => $request->nip,
        ]);
        return redirect('/admin/jabatan')->with('status', 'Jabatan Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('halaman.admin.jabatan.edit',[
            'leader' => Leader::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'department' => 'required',
            'nip' => 'required',
        ],
        [
            'required' => 'Harap bagian :attribute di isi', 
        ]);
        Leader::where('id',$id)->
                update([
                    'name' => $request->name,
                    'department' => $request->department,
                    'nip' => $request->nip,
                ]);

        return redirect('/admin/jabatan')->with('status', 'Data Jabatan Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Leader::where('id',$id)->
                delete();

        return redirect('/admin/jabatan')->with('status', 'Jabatan Berhasil Dihapus!');
    }
}
