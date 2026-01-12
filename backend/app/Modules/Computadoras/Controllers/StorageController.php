<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
  public function index()
  {
    return response()->json(Storage::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'tipo' => 'required|string',
      'capacidad' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Storage::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Storage::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Storage::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Storage::destroy($id);
    return response()->json(['message' => 'Storage eliminado']);
  }
}