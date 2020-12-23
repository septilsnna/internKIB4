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
        $judul_ev = $request->old('judul_ev');
        $jenis_ev = $request->old('jenis_ev');
        $tanggal_ev = $request->old('tanggal_ev');
        $waktu_ev = $request->old('waktu_ev');
        $lokasi_ev = $request->old('lokasi_ev');
        $biaya_ev = $request->old('biaya_ev');
        $deskripsi = $request->old('deskripsi');
        $pamflet = $request->old('pamflet');

        // form validation
        $request->validate([
            'judul_ev' => 'required|unique:events,judul_ev',
            'jenis_ev' => 'required',
            'tanggal_ev' => 'required|date|after:today',
            'waktu_ev' => 'required',
            'lokasi_ev' => 'required',
            'biaya_ev' => 'required|min:0',
            'deskripsi' => 'required',
            'pamflet' => 'required',
        ]);

        // saving pamflet
        $filename = time();
        $file = $request->pamflet->storeAs('/public/events', $filename);

        $events = new Event;
        $events->judul_ev = $request->judul_ev;
        $events->jenis_ev = $request->jenis_ev;
        $events->tanggal_ev = $request->tanggal_ev;
        $events->waktu_ev = $request->waktu_ev;
        $events->lokasi_ev = $request->lokasi_ev;
        $events->biaya_ev = $request->biaya_ev;
        $events->deskripsi = $request->deskripsi;
        $events->pamflet = $filename;

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

    public function search_events()
    {
        $data = [
            'events' => Event::all()
        ];

        if (session('auth')) {
            $data['nama_user'] = session('name');
            return view('users.search_events', $data);
        }

        return view('guests.search_events', $data);
    }
}