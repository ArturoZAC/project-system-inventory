<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\GPUPuerto;
use Illuminate\Http\Request;

class GPUPuertoController extends Controller
{
  public function index($gpuId)
  {
    return response()->json(GPUPuerto::where('gpu_id', $gpuId)->get());
  }

  public function store(Request $request, $gpuId)
  {
    $data = $request->validate([
      'tipo_puerto' => 'required|string',
      'estado' => 'required|string',
    ]);

    $data['gpu_id'] = $gpuId;

    return response()->json(GPUPuerto::create($data), 201);
  }

  public function show($gpuId, $id)
  {
    return response()->json(GPUPuerto::where('gpu_id', $gpuId)->findOrFail($id));
  }

  public function update(Request $request, $gpuId, $id)
  {
    $puerto = GPUPuerto::where('gpu_id', $gpuId)->findOrFail($id);
    $puerto->update($request->all());
    return response()->json($puerto);
  }

  public function destroy($gpuId, $id)
  {
    $puerto = GPUPuerto::where('gpu_id', $gpuId)->findOrFail($id);
    $puerto->delete();
    return response()->json(['message' => 'GPU Puerto eliminado']);
  }
}
