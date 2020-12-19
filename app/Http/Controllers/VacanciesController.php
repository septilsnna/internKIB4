<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacans = Vacancy::all();

        return view('admin.manage_vacancies', compact('vacans'));
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
        $vacans = new Vacancy;
        $vacans->judul_low = $request->judul_low;
        $vacans->instansi_low = $request->instansi_low;
        $vacans->batas_submit = $request->batas_submit;
        $vacans->deskripsi = $request->deskripsi;
        $vacans->pamflet = $request->pamflet;

        $vacans->save();

        return redirect('/admin/manage_vacancies');
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
            "judul_low" => $request->judul_low,
            "instansi_low" => $request->instansi_low,
            "batas_submit" => $request->batas_submit,
            "deskripsi" => $request->deskripsi,
            "pamflet" => $request->pamflet,
        ];

        Vacancy::where('id', $id)->update($data);

        return redirect('/admin/manage_vacancies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vacancy::where('id', $id)->delete();

        return redirect('/admin/manage_vacancies');
    }
}