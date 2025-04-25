<?php

namespace App\Http\Controllers;

use App\Mail\ClientWebMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function inicio()
    {
        return Inertia::render('Inicio');
    }

    public function iluminacion()
    {
        return Inertia::render('Iluminacion');
    }

    public function decoracion()
    {
        return Inertia::render('Decoracion');
    }

    public function banos()
    {
        return Inertia::render('Banos');
    }

    public function submit(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email',
            'telefono' => 'nullable|string|max:20',
            'mensaje' => '',
        ],
            [
                'nombre.required' => 'El campo nombre es obligatorio.',
                'correo.email' => 'El correo electrónico proporcionado no es válido.',
                'telefono.max' => 'El teléfono no puede tener más de 20 caracteres.',
                // Agrega más mensajes personalizados si es necesario
            ]
        );

        // Manejar los datos del formulario, como enviarlos por correo
        Mail::to('ventas@lacasadelonix.com')->send(new ContactMail($validated));
        //Mail::to($validated['correo'])->send(new ClientWebMail($validated));

        return back()->with('success', 'Formulario enviado con éxito!');

    }
}
