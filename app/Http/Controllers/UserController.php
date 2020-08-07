<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'retypepassword' => 'required',
            'email' => 'required'
        ]);

        User::create([
            'fullname' => $request->fullname,
            'dateofbirth' => $request->dateofbirth,
            'gender' => $request->gender,
            'password' => bcrypt($request->password),
            'retypepassword' => bcrypt($request->retypepassword),
            'email' => $request->email
        ]);

        return redirect('user')->with('status', 'User successfully added!');
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
    public function edit(User $user)
    {
        return view('edituser', compact('user'));
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
        $request->validate([
			'fullname' => 'required',
			'dateofbirth' => 'required',
			'gender' => 'required',
			'password' => 'required',
			'retypepassword' => 'required',
			'email' => 'required'
		]);
		User::where('id', $id)->update([
			'fullname' => $request->fullname,
			'dateofbirth' => $request->dateofbirth,
			'gender' => $request->gender,
			'password' => bcrypt($request->password),
			'retypepassword' => bcrypt($request->retypepassword),
			'email' => $request->email
		]);
		return redirect('user')->with('status','User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('user')->with('status', 'User successfully deleted!');
    }
}
