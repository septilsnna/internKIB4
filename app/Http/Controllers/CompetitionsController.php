<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comps = Competition::all();

        return view('admin/manage_competitions', compact('comps'));
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
        $comps = new Competition;

        $comps->judul_lom = $request->judul_lom;
        $comps->penyelenggara_lom = $request->penyelenggara_lom;
        $comps->batas_submit = $request->batas_submit;
        $comps->deskripsi = $request->deskripsi;
        $comps->pamflet = $request->pamflet;

        $comps->save();

        return redirect('/admin/manage_competitions');
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
            "judul_lom" => $request->judul_lom,
            "penyelenggara_lom" => $request->penyelenggara_lom,
            "batas_submit" => $request->batas_submit,
            "deskripsi" => $request->deskripsi,
            "pamflet" => $request->pamflet,
        ];

        Competition::where('id', $id)->update($data);

        return redirect('/admin/manage_competitions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Competition::where('id', $id)->delete();

        return redirect('/admin/manage_competitions');
    }
}