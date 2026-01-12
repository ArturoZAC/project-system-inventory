<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Cable;
use Illuminate\Http\Request;

class CableController extends Controller
{
  public function index()
  {
    return response()->json(Cable::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'tipo' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Cable::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Cable::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Cable::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Cable::destroy($id);
    return response()->json(['message' => 'Cable eliminado']);
  }
}
