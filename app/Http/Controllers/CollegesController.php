<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kampus = College::all();
        return view('admin.manage_colleges', compact('kampus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $college = new College;
        $college->nama_univ = $request->nama_univ;
        $college->jenis_univ = $request->jenis_univ;
        $college->status_univ = $request->status_univ;
        $college->akre_univ = $request->akre_univ;
        $college->prov_univ = $request->prov_univ;
        $college->jml_fak = $request->jml_fak;
        $college->jml_prodi = $request->jml_prodi;
        $college->deskripsi = $request->deskripsi;

        $college->save();

        return redirect('/admin/manage_colleges');
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
        $data = [
            "nama_univ" => $request->nama_univ,
            "jenis_univ" => $request->jenis_univ,
            "status_univ" => $request->status_univ,
            "akre_univ" => $request->akre_univ,
            "prov_univ" => $request->prov_univ,
            "jml_fak" => $request->jml_fak,
            "jml_prodi" => $request->jml_prodi,
            "deskripsi" => $request->deskripsi,
        ];

        College::where('id', $id)->update($data);

        return redirect('/admin/manage_colleges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::find($id);

        $college->delete();

        return redirect('/admin/manage_colleges');
    }
}