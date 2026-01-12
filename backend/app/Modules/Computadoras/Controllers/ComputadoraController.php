<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
  public function index()
  {
    return response()->json(Computadora::all());
    // return response()->json(Computadora::with(['persona', 'cpu'])->get());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'codigo_interno' => 'required|string|unique:computadoras,codigo_interno',
      'estado' => 'required|string',
      'fecha_asignacion' => 'nullable|date',
      'persona_id' => 'nullable|exists:personas,id',
      'case' => 'nullable|string',
      'cpu_id' => 'required|exists:cpus,id',
    ]);

    return response()->json(Computadora::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Computadora::with(['persona', 'cpu'])->findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $computadora = Computadora::findOrFail($id);

    $data = $request->validate([
      'codigo_interno' => 'sometimes|string|unique:computadoras,codigo_interno,' . $id,
      'estado' => 'sometimes|string',
      'fecha_asignacion' => 'nullable|date',
      'persona_id' => 'nullable|exists:personas,id',
      'case' => 'nullable|string',
      'cpu_id' => 'sometimes|exists:cpus,id',
    ]);

    $computadora->update($data);

    return response()->json($computadora);
  }

  public function destroy($id)
  {
    Computadora::destroy($id);
    return response()->json(['message' => 'Computadora eliminada correctamente']);
  }
}