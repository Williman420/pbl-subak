<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjung = Pengunjung::all();
        return view('home', compact('pengunjung'));
    }
    public function create()
    {
        return view('pengunjung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:pengunjung,email',
            'password' => 'required|string|min:4',
            'no_tlp' => 'required|string|max:20',
        ]);

        // Create the user
        $pengunjung = Pengunjung::create([
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_tlp' => $request->no_tlp,
        ]);

        // ✅ Automatically log them in (save to session)
        session([
            'pengunjung_id' => $pengunjung->id_pengunjung,
            'pengunjung_nama' => $pengunjung->nama_lengkap,
        ]);

        // ✅ Redirect to the dashboard (or any page you like)
        return redirect()->route('pengunjung.index')->with('success', 'Registrasi berhasil! Selamat datang, ' . $pengunjung->nama_lengkap . '!');
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

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil dihapus.');
    }

    public function showLogin()
    {
        return view('login_page');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $pengunjung = Pengunjung::where('email', $request->email)->first();

        if (!$pengunjung) {
            return back()->with('error', 'Email not found.');
        }

        if (!Hash::check($request->password, $pengunjung->password)) {
            return back()->with('error', 'Incorrect password.');
        }

        session(['pengunjung_id' => $pengunjung->id_pengunjung, 'pengunjung_nama' => $pengunjung->nama_lengkap]);

        return redirect()->route('home')->with('success', 'Welcome back, ' . $pengunjung->nama_lengkap . '!');
    }


    public function home()
    {
        return view('Home');
    }
}
