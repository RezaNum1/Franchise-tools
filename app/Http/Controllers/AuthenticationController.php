<?php
namespace App\Http\Controllers;

use App\Franchise\Core\Repository\UserRepository;
use App\Franchise\Core\Command\CreateUserCommand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function register(Request $request){
        return view('backend.register');
    }

    public function registerProcess(Request $request){
        $this->validate($request, [
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:5',
            'password' => 'required|min:5',
            'confirmation' => 'required|same:password',
            'email' => 'required|email',
        ]);

        $remember_token = md5($request->name . Carbon::now() . $request->email);
        $command = new CreateUserCommand($request->name,
            $request->username,$request->email,$request->password, 2, $remember_token);
        $exec = $command->handle();
        return $this->authProcess($exec);
    }

    public function login(Request $request){
        return view('backend.login');
    }

    public function loginProcess(Request $request){

        $username = $request->username;
        $password = $request->password;

        $userRepository = new UserRepository();
        $data = $userRepository->getByUsername($username);

        if(!$data || !Hash::check($password, $data->password)){
            return redirect()->route('login')->with('alert', 'Username atau password yang kamu masukkan salah!');
        }

        return $this->authProcess($data);
    }

    public function authProcess($data){
        Session::put('name', $data->name);
        Session::put('username', $data->username);
        Session::put('email', $data->email);
        Session::put('type', $data->type);
        Session::put('id', $data->id);
        Session::put('login', TRUE);

        if($data->type == 'admin'){
            return redirect('/admin');
        }
        else if($data->type == "2"){
            return redirect('/brand-owner');
        }
        else if($data->type == 'admin_franchise') {
            return redirect('/admin-franchise');
        }
        else if($data->type == 'owner_franchise') {
            return redirect('/owner-franchise');
        }
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login')->with('alert-success', 'Berhasil keluar!');
    }
}