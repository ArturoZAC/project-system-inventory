<?php
namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\MotherboardPuerto;
use Illuminate\Http\Request;

class MotherboardPuertoController extends Controller
{
  public function index($motherboardId)
  {
    return response()->json(MotherboardPuerto::where('motherboard_id', $motherboardId)->get());
  }

  public function store(Request $request, $motherboardId)
  {
    $data = $request->validate([
      'tipo_puerto' => 'required|string',
      'estado' => 'required|string',
    ]);

    $data['motherboard_id'] = $motherboardId;

    return response()->json(MotherboardPuerto::create($data), 201);
  }

  public function show($motherboardId, $id)
  {
    return response()->json(MotherboardPuerto::where('motherboard_id', $motherboardId)->findOrFail($id));
  }

  public function update(Request $request, $motherboardId, $id)
  {
    $puerto = MotherboardPuerto::where('motherboard_id', $motherboardId)->findOrFail($id);
    $puerto->update($request->all());
    return response()->json($puerto);
  }

  public function destroy($motherboardId, $id)
  {
    $puerto = MotherboardPuerto::where('motherboard_id', $motherboardId)->findOrFail($id);
    $puerto->delete();
    return response()->json(['message' => 'Motherboard Puerto eliminado']);
  }
}