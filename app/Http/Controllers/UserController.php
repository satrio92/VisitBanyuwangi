<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLogin() {
        return view('main.login');
    }

    public function login(Request $request) {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // @dd($credentials);
        if (Auth::attempt($credentials)) {
            // dd($credentials);
            return redirect('/');
        }
        return redirect()->back()->with(['message' => 'login gagal']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function showregister() {
        return view('main.register'); 
    }

    public function register(Request $request) {
        if($request->password == $request->repassword) {
            $validate = $request->validate([
                'nama' => 'required',
                'password' => 'required',
                'email' => 'required|email',
            ]);
            $validate['password'] = bcrypt($request['password']);
            // dd($validate);
            $user = new User($validate);
            $user->save();
            return redirect('/login');
        } else {
            return view('main.register')->with(['message' => 'Password tidak sama']);
        }
    }
}
