<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
  public function index()
  {
    return response()->json(Monitor::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'modelo' => 'required|string',
      'tamano' => 'required|string',
      'dpi' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Monitor::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Monitor::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Monitor::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Monitor::destroy($id);
    return response()->json(['message' => 'Monitor eliminado']);
  }
}
