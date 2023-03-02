<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $c=User::where('level','masyarakat')->get()->count();
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate(
            [
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'password' => 'required',
                'telepon' => 'required',
            ],
            [
                'name' => 'nama sudah ada',
                'name.required' => 'Isi Username',
                'name.unique' => 'Username Sudah ada',
                'password.required' => 'Isi Password'
            ]
        );

        User::create([
            'name' => $data['name'],
            'username' => Str::camel($data['username']),
            'password' => bcrypt($data['password']),
            'telepon' => $data['telepon'],
            'level' => 'petugas'
        ]);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
        $users = user::find($user->id);
        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
        $users = user::find($user->id);
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telepon' => 'required',
            'level' => 'required'
        ]);

        $users = user::find($user->id);
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = $request->password;
        $user->telepon = $request->telepon;
        $users->level = $request->level;
        $users->update();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
        $users = user::find($user->id);
        $users->delete();
        return redirect('user');
    }
}
