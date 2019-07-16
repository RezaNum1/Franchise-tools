<?php

namespace App\Http\Controllers;

use App\Franchise\Core\Command\CreateUserCommand;
use Illuminate\Http\Request;

class UserControler extends Controller
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
        $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:5',
            'password' => 'required|min:5',
            'confirmation' => 'required|confirmed:password',
            'email' => 'required|email',
            'type' => 'required',
        ]);
        // ($request->name, $request->username,$request->email,$request->password, $request->type, $request->token);
        $command = new CreatUserCommand($request->name, $request->username,$request->email,$request->password, $request->type);
        $exec = $command->handle();
        
        return redirect('/backend.register')->with('alert-success', 'successfullt add users');

    }

    public function register(Request $request)
    {
        return view('backend.register');
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
