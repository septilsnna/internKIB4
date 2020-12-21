<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        $name = explode(" ", $request->name);
        session(['auth' => $request->email]);
        session(['name' => $name[0]]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->email == 'akangironman@marvel.com' && $request->password == '123456789') {
            session(['auth' => 'akangironman@marvel.com']);
            return redirect('/admin/dashboard');
        } else {
            $users = User::where('email', $request->email)->get();
            if (!$users) {
                session(['invalid_pass' => 'Pengguna tidak terdaftar, harap periksa kembali email Anda'])->flash();
                return redirect('/login');
            } else {
                if ($request->password != $users[0]->password) {
                    session(['invalid_pass' => 'Password tidak sesuai, harap periksa kembali password Anda'])->flash();
                    return redirect('/login');
                } else {
                    $name = explode(" ", $users[0]->name);
                    session(['auth' => $users[0]->email]);
                    session(['name' => $name[0]]);
                    return redirect('/');
                }
            }
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}