<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\MonitorPuerto;
use Illuminate\Http\Request;

class MonitorPuertoController extends Controller
{
  public function index($monitorId)
  {
    return response()->json(MonitorPuerto::where('monitor_id', $monitorId)->get());
  }

  public function store(Request $request, $monitorId)
  {
    $data = $request->validate([
      'tipo_puerto' => 'required|string',
      'estado' => 'required|string',
    ]);

    $data['monitor_id'] = $monitorId;

    return response()->json(MonitorPuerto::create($data), 201);
  }

  public function show($monitorId, $id)
  {
    return response()->json(MonitorPuerto::where('monitor_id', $monitorId)->findOrFail($id));
  }

  public function update(Request $request, $monitorId, $id)
  {
    $puerto = MonitorPuerto::where('monitor_id', $monitorId)->findOrFail($id);
    $puerto->update($request->all());
    return response()->json($puerto);
  }

  public function destroy($monitorId, $id)
  {
    $puerto = MonitorPuerto::where('monitor_id', $monitorId)->findOrFail($id);
    $puerto->delete();
    return response()->json(['message' => 'Monitor Puerto eliminado']);
  }
}
