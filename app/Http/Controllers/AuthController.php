<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function userHome()
    {
        return view('user.home');
    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user) {
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:20',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->with('failed', 'Username tidak ditemukan.');
        }

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if ($user->status == 'admin') {
                return redirect('/admin/home');
            } elseif ($user->status == 'user') {
                return redirect('/user/home');
            }
        }

        return back()->with('failed', 'Password salah.');
    }

    public function updatePasswordForDaus()
    {
        $user = User::where('username', 'daus')->first();

        if ($user) {
            $user->password = Hash::make('daus1234');
            $user->save();

            return "Password berhasil diperbarui!";
        } else {
            return "Pengguna tidak ditemukan.";
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
