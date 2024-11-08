<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseAuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = Firebase::auth();
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        try {
            $user = $this->auth->createUserWithEmailAndPassword($request->email, $request->password);
            // Manejar el registro exitoso
        } catch (\Exception $e) {
            // Manejar errores
        }
    }
}
