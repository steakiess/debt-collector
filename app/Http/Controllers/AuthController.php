<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Repository\AuthRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('authentication.login');
    }
    public function login(LoginRequest $request)
    {
        $validated = $request->validated($request);

        $validated = $request->only('email', 'password');

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['auth' => 'Invalid email or password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    
    public function rememberMe(){

    }

    public function forgotPassword(){

    }
}
