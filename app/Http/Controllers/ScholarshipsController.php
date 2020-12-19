<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholars = Scholarship::all();

        return view('admin.manage_scholarships', compact('scholars'));
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
        $scholars = new Scholarship;
        $scholars->nama_bea = $request->nama_bea;
        $scholars->penyelenggara_bea = $request->penyelenggara_bea;
        $scholars->batas_submit = $request->batas_submit;
        $scholars->deskripsi = $request->deskripsi;
        $scholars->pamflet = $request->pamflet;

        $scholars->save();

        return redirect('/admin/manage_scholarships');
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
            "nama_bea" => $request->nama_bea,
            "penyelenggara_bea" => $request->penyelenggara_bea,
            "batas_submit" => $request->batas_submit,
            "deskripsi" => $request->deskripsi,
            "pamflet" => $request->pamflet,
        ];

        Scholarship::where('id', $id)->update($data);

        return redirect('/admin/manage_scholarships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scholarship::where('id', $id)->delete();

        return redirect('/admin/manage_scholarships');
    }
}