<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Accesorio;
use Illuminate\Http\Request;

class AccesorioController extends Controller
{
  public function index()
  {
    return response()->json(Accesorio::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'nombre' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Accesorio::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Accesorio::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Accesorio::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Accesorio::destroy($id);
    return response()->json(['message' => 'Accesorio eliminado']);
  }
}
