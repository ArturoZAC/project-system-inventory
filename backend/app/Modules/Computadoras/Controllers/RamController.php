<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
  public function index()
  {
    return response()->json(Ram::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'capacidad' => 'required|string',
      'tipo' => 'required|string',
      'frecuencia' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Ram::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Ram::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Ram::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Ram::destroy($id);
    return response()->json(['message' => 'RAM eliminada']);
  }
}
