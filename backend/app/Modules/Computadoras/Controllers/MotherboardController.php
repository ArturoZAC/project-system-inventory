<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\Motherboard;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
  public function index()
  {
    return response()->json(Motherboard::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'modelo' => 'required|string',
      'socket' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(Motherboard::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(Motherboard::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = Motherboard::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    Motherboard::destroy($id);
    return response()->json(['message' => 'Motherboard eliminada']);
  }
}
