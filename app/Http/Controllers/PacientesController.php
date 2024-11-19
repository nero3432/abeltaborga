<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(Request $request)
    {
        // Verifica si se ha enviado un término de búsqueda
        $query = Pacientes::query();

        // Si se tiene un término de búsqueda, filtra por nombre o apellido
        if ($request->has('search') && $request->search != '') {
            $query->where(function ($query) use ($request) {
                $query->where('nombre', 'like', '%' . $request->search . '%')
                      ->orWhere('apellido', 'like', '%' . $request->search . '%');
            });
        }

        // Obtiene los pacientes filtrados
        $pacientes = $query->get();

        // Pasa los pacientes y la búsqueda al view
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create'); // Muestra el formulario para crear un nuevo paciente
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer',
            'diagnostico' => 'required|string|max:255',
            'area_derivada' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        Pacientes::create($request->all()); // Crea un nuevo paciente

        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente.');
    }

    public function edit(Pacientes $paciente)
    {
        return view('pacientes.edit', compact('paciente')); // Muestra el formulario para editar un paciente
    }

    public function update(Request $request, Pacientes $paciente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer',
            'diagnostico' => 'required|string|max:255',
            'area_derivada' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $paciente->update($request->all()); // Actualiza el paciente

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente.');
    }

    public function destroy(Pacientes $paciente)
    {
        $paciente->delete(); // Elimina el paciente

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado exitosamente.');
    }
}
