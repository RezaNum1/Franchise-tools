<?php

namespace App\Http\Controllers;

use App\Franchise\Core\Command\CreateUserCommand;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:5',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|confirm:password',
            'email' => 'required|email',
            'type' => 'required'
        ]);

        $command = new CreateUserCommand($request->name,$request->username,$request->email,$request->password, $request->type);
        $exec = $command->handle();

        return redirect()->to('/')->with('alert-success', 'successfully add users!');
    }
}
