<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\ConexionVideo;
use Illuminate\Http\Request;

class ConexionVideoController extends Controller
{
  public function index()
  {
    return response()->json(
      ConexionVideo::all()
      // ConexionVideo::with(['motherboardPuerto', 'gpuPuerto', 'monitorPuerto', 'cable', 'adaptador'])->get()
    );
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'motherboard_puerto_id' => 'nullable|exists:motherboard_puertos,id',
      'gpu_puerto_id' => 'nullable|exists:gpu_puertos,id',
      'monitor_puerto_id' => 'required|exists:monitor_puertos,id',
      'cable_id' => 'nullable|exists:cables,id',
      'adaptador_id' => 'nullable|exists:adaptadors,id',
      'estado' => 'required|string',
    ]);

    return response()->json(ConexionVideo::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(
      ConexionVideo::with(['motherboardPuerto', 'gpuPuerto', 'monitorPuerto', 'cable', 'adaptador'])->findOrFail($id)
    );
  }

  public function update(Request $request, $id)
  {
    $conexion = ConexionVideo::findOrFail($id);

    $data = $request->validate([
      'motherboard_puerto_id' => 'nullable|exists:motherboard_puertos,id',
      'gpu_puerto_id' => 'nullable|exists:gpu_puertos,id',
      'monitor_puerto_id' => 'sometimes|exists:monitor_puertos,id',
      'cable_id' => 'nullable|exists:cables,id',
      'adaptador_id' => 'nullable|exists:adaptadors,id',
      'estado' => 'sometimes|string',
    ]);

    $conexion->update($data);

    return response()->json($conexion);
  }

  public function destroy($id)
  {
    ConexionVideo::destroy($id);
    return response()->json(['message' => 'Conexión de video eliminada correctamente']);
  }
}