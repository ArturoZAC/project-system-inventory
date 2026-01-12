<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\CPU;
use Illuminate\Http\Request;

class CPUController extends Controller
{
  public function index()
  {
    return response()->json(CPU::all());
    // return response()->json(CPU::with(['fuentePoder', 'motherboard', 'gpu'])->get());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'modelo' => 'required|string',
      'nucleos' => 'required|integer',
      'hilos' => 'required|integer',
      'frecuencia' => 'required|string',
      'fuente_poder_id' => 'required|exists:fuentes_poder,id',
      'ventiladores' => 'required|integer',
      'motherboard_id' => 'required|exists:motherboards,id',
      'gpu_id' => 'nullable|exists:gpus,id',
    ]);

    return response()->json(CPU::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(CPU::with(['fuentePoder', 'motherboard', 'gpu'])->findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $cpu = CPU::findOrFail($id);

    $data = $request->validate([
      'marca' => 'sometimes|string',
      'modelo' => 'sometimes|string',
      'nucleos' => 'sometimes|integer',
      'hilos' => 'sometimes|integer',
      'frecuencia' => 'sometimes|string',
      'fuente_poder_id' => 'sometimes|exists:fuentes_poder,id',
      'ventiladores' => 'sometimes|integer',
      'motherboard_id' => 'sometimes|exists:motherboards,id',
      'gpu_id' => 'nullable|exists:gpus,id',
    ]);

    $cpu->update($data);

    return response()->json($cpu);
  }

  public function destroy($id)
  {
    CPU::destroy($id);
    return response()->json(['message' => 'CPU eliminada correctamente']);
  }
}