<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PengunjungController extends Controller
{

    public function index()
    {
        $pengunjung = Pengunjung::all();
        return view('home.homeData', compact('pengunjung'));
    }


    public function create()
    {
        return view('pengunjung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'       => 'required|string|max:255',
            'nama_lengkap'   => 'required|string|max:255',
            'email'          => 'required|email|unique:pengunjung,email',
            'password'       => 'required|string|min:4',
            'no_tlp'         => 'required|string|max:20',
        ]);

        $pengunjung = Pengunjung::create([
            'username'      => $request->username,
            'nama_lengkap'  => $request->nama_lengkap,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'no_tlp'        => $request->no_tlp,
        ]);

        Auth::login($pengunjung);

        return redirect()
            ->route('home.homeData')
            ->with('success', 'Registrasi berhasil! Selamat datang, ' . $pengunjung->nama_lengkap);
    }

    public function showLogin()
    {
        return view('login_page');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home.homeData'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function show($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        return view('pengunjung.show', compact('pengunjung'));
    }

    public function destroy($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect()
            ->route('pengunjung.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
