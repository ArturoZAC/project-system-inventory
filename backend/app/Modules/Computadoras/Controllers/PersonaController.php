<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
  public function index()
  {
    return response()->json(Persona::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'nombre' => 'required|string',
      'rol' => 'required|string',
      'email' => 'required|email|unique:personas,email',
    ]);

    $persona = Persona::create($data);

    return response()->json($persona, 201);
  }

  public function show($id)
  {
    $persona = Persona::findOrFail($id);
    return response()->json($persona);
  }

  public function update(Request $request, $id)
  {
    $persona = Persona::findOrFail($id);

    $data = $request->validate([
      'nombre' => 'sometimes|string',
      'rol' => 'sometimes|string',
      'email' => 'sometimes|email|unique:personas,email,' . $id,
    ]);

    $persona->update($data);

    return response()->json($persona);
  }

  public function destroy($id)
  {
    $persona = Persona::findOrFail($id);
    $persona->delete();

    return response()->json(['message' => 'Persona eliminada correctamente']);
  }
}
