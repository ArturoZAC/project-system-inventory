<?php

namespace App\Modules\Computadoras\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Computadoras\Models\FuentePoder;
use Illuminate\Http\Request;

class FuentePoderController extends Controller
{
  public function index()
  {
    return response()->json(FuentePoder::all());
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'marca' => 'required|string',
      'modelo' => 'required|string',
      'watts' => 'required|integer',
      'eficiencia' => 'required|string',
      'estado' => 'required|string',
    ]);

    return response()->json(FuentePoder::create($data), 201);
  }

  public function show($id)
  {
    return response()->json(FuentePoder::findOrFail($id));
  }

  public function update(Request $request, $id)
  {
    $item = FuentePoder::findOrFail($id);
    $item->update($request->all());
    return response()->json($item);
  }

  public function destroy($id)
  {
    FuentePoder::destroy($id);
    return response()->json(['message' => 'Fuente de poder eliminada']);
  }
}
