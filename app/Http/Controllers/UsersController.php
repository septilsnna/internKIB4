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
        // store old value
        $name = $request->old('name');
        $email = $request->old('email');

        // form validation        
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password|min:8',
        ]);

        // create to users database
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
        // store old value
        $email = $request->old('email');

        // form validation        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($request->email == 'akangironman@marvel.com') {
            if ($request->password == '123456789') {
                session(['auth' => 'akangironman@marvel.com']);
                return redirect('/admin/dashboard');
            } else {
                session()->flash('invalid_login', 'Admin tidak terdaftar, harap periksa kembali akun Anda');
                return back()->withInput();
            }
        } else {
            $users = User::where('email', $request->email)->get();
            if ($users) {
                if ($request->password != $users[0]->password) {
                    session()->flash('invalid_login', 'Password tidak sesuai, harap periksa kembali password Anda');
                    return back()->withInput();
                } else {
                    $name = explode(" ", $users[0]->name);
                    session(['auth' => $users[0]->email]);
                    session(['name' => $name[0]]);
                    return redirect('/');
                }
            } else {
                session()->flash('invalid_login', 'Pengguna tidak terdaftar, harap periksa kembali email Anda');
                return back()->withInput();
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