<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengunjung;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('register_page');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Pengunjung::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'no_tlp' => ['required', 'string', 'max:15'],
        ]);

        $pengunjung = Pengunjung::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'no_tlp' => $request->no_tlp,
        ]);

        event(new Registered($pengunjung));

        Auth::login($pengunjung);

        return redirect(route('dashboard', absolute: false));
    }
}
