<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return view('auth.register');
    }


    public function store(Request $request): RedirectResponse
    {
        dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['nullable', 'integer'],
            'adresse' => ['nullable', 'string', 'max:255'],
            'profession' => ['nullable', 'string', 'max:255'],
            'npi' => ['nullable', 'integer'],
            'ifu' => ['nullable', 'integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'contact' => $request->contact,
            'adresse' => $request->adresse,
            'profession' => $request->profession,
            'npi' => $request->npi,
            'ifu' => $request->ifu,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user,));

  

        
    return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter pour accéder à votre compte.');

    }
}
