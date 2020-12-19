<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.manage_events', compact('events'));
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
        $events = new Event;
        $events->judul_ev = $request->judul_ev;
        $events->jenis_ev = $request->jenis_ev;
        $events->tanggal_ev = $request->tanggal_ev;
        $events->waktu_ev = $request->waktu_ev;
        $events->lokasi_ev = $request->lokasi_ev;
        $events->biaya_ev = $request->biaya_ev;
        $events->deskripsi = $request->deskripsi;
        $events->pamflet = $request->pamflet;

        $events->save();

        return redirect('/admin/manage_events');
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
            "judul_ev" => $request->judul_ev,
            "jenis_ev" => $request->jenis_ev,
            "tanggal_ev" => $request->tanggal_ev,
            "waktu_ev" => $request->waktu_ev,
            "lokasi_ev" => $request->lokasi_ev,
            "biaya_ev" => $request->biaya_ev,
            "deskripsi" => $request->deskripsi,
            "pamflet" => $request->pamflet,
        ];

        Event::where('id', $id)->update($data);

        return redirect('/admin/manage_events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);

        $events->delete();

        return redirect('/admin/manage_events');
    }
}