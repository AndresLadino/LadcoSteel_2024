<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect(route('dashboard'));
    }
    public function show(User $cliente)
    {
        //
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('editUser')->with('user', $user);
    }
    public function update(Request $request, $id)
    {
        try {
            // Obtener el usuario existente
            $user = User::find($id);

            // Verificar si el usuario existe
            if (!$user) {
                throw new \Exception('Usuario no encontrado');
            }

            // Actualizar los datos del usuario
            $user->name = $request->name;
            $user->email = $request->email;

            // Si se proporciona una nueva contraseña, actualizarla
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password);
            }

            $user->save();

            return redirect()->route('dashboard')->with('success', 'Tus datos se han actualizado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function showLoginForm()
    {
        // Verifica si el usuario ya ha iniciado sesión
        if (Auth::check()) {
            // El usuario ya está autenticado, redirigir a otra página (por ejemplo, el dashboard)
            return redirect()->route('dashboard');
        }

        // Si el usuario no ha iniciado sesión, muestra el formulario de inicio de sesión
        return view('login');
    }
    public function login(Request $request)
    {
        // Verifica si el usuario ya ha iniciado sesión
        if (Auth::check()) {
            // El usuario ya está autenticado, redirigir a otra página (por ejemplo, el dashboard)
            return redirect()->route('dashboard');
        }

        // Resto de la lógica de tu método para el inicio de sesión
        $credenciales = [
            "email" => $request->email,
            "password" => $request->password
        ];
        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        } else {
            return redirect('login')->withErrors(['error' => 'Credenciales incorrectas']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
