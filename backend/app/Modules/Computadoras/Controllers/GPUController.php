<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\GPU;
use Illuminate\Http\Request;

class GPUController extends Controller
{
  public function index()
  {
    return response()->json(GPU::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'modelo' => 'required|string',
      'vram' => 'required|string',
      'ventiladores' => 'sometimes|integer',
      'estado' => 'required|string',
    ]);

    return response()->json(GPU::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(GPU::with('puertos')->findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $gpu = GPU::findOrFail($id);
    $gpu->update($request->all());
    return response()->json($gpu);
  }

  public function destroy($id)
  {
    GPU::destroy($id);
    return response()->json(['message' => 'GPU eliminada']);
  }
}
