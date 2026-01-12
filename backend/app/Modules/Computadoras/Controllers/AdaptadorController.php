<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Adaptador;
use Illuminate\Http\Request;

class AdaptadorController extends Controller
{
  public function index()
  {
    return response()->json(Adaptador::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'tipo' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Adaptador::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Adaptador::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Adaptador::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Adaptador::destroy($id);
    return response()->json(['message' => 'Adaptador eliminado']);
  }
}