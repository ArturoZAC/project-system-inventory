<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Computadoras\Controllers\{
  PersonaController,
  ComputadoraController,
  CPUController,
  MonitorController,
  GPUPuertoController,
  GPUController,
  MotherboardPuertoController,
  MonitorPuertoController,
  ConexionVideoController,
  FuentePoderController,
  RAMController,
  StorageController,
  AccesorioController,
  CableController,
  AdaptadorController,
  MotherboardController
};

// ---------------------------
// 1️⃣ Personas
// ---------------------------
Route::get('personas', [PersonaController::class, 'index']);
Route::get('personas/{id}', [PersonaController::class, 'show']);
Route::post('personas', [PersonaController::class, 'store']);
Route::post('personas/update/{id}', [PersonaController::class, 'update']);
Route::delete('personas/{id}', [PersonaController::class, 'destroy']);

// ---------------------------
// 2️⃣ Computadoras
// ---------------------------
Route::get('computadoras', [ComputadoraController::class, 'index']);
Route::get('computadoras/{id}', [ComputadoraController::class, 'show']);
Route::post('computadoras', [ComputadoraController::class, 'store']);
Route::post('computadoras/update/{id}', [ComputadoraController::class, 'update']);
Route::delete('computadoras/{id}', [ComputadoraController::class, 'destroy']);

// ---------------------------
// 3️⃣ CPUs
// ---------------------------
Route::get('cpus', [CPUController::class, 'index']);
Route::get('cpus/{id}', [CPUController::class, 'show']);
Route::post('cpus', [CPUController::class, 'store']);
Route::post('cpus/update/{id}', [CPUController::class, 'update']);
Route::delete('cpus/{id}', [CPUController::class, 'destroy']);

// ---------------------------
// 4️⃣ Monitores
// ---------------------------
Route::get('monitores', [MonitorController::class, 'index']);
Route::get('monitores/{id}', [MonitorController::class, 'show']);
Route::post('monitores', [MonitorController::class, 'store']);
Route::post('monitores/update/{id}', [MonitorController::class, 'update']);
Route::delete('monitores/{id}', [MonitorController::class, 'destroy']);

// ---------------------------
// 5️⃣ GPU
// ---------------------------
Route::get('gpus', [GPUController::class, 'index']);
Route::get('gpus/{id}', [GPUController::class, 'show']);
Route::post('gpus', [GPUController::class, 'store']);
Route::post('gpus/update/{id}', [GPUController::class, 'update']);
Route::delete('gpus/{id}', [GPUController::class, 'destroy']);

// 6️⃣ GPU Puertos
Route::get('gpu-puertos', [GPUPuertoController::class, 'index']);
Route::get('gpu-puertos/{id}', [GPUPuertoController::class, 'show']);
Route::post('gpu-puertos', [GPUPuertoController::class, 'store']); // body debe traer gpu_id
Route::post('gpu-puertos/update/{id}', [GPUPuertoController::class, 'update']);
Route::delete('gpu-puertos/{id}', [GPUPuertoController::class, 'destroy']);

// ---------------------------
// 7️⃣ Motherboard Puertos
// ---------------------------
Route::get('motherboard-puertos', [MotherboardPuertoController::class, 'index']);
Route::get('motherboard-puertos/{id}', [MotherboardPuertoController::class, 'show']);
Route::post('motherboard-puertos', [MotherboardPuertoController::class, 'store']); // body: motherboard_id
Route::post('motherboard-puertos/update/{id}', [MotherboardPuertoController::class, 'update']);
Route::delete('motherboard-puertos/{id}', [MotherboardPuertoController::class, 'destroy']);

// ---------------------------
// 8️⃣ Monitor Puertos
// ---------------------------
Route::get('monitor-puertos', [MonitorPuertoController::class, 'index']);
Route::get('monitor-puertos/{id}', [MonitorPuertoController::class, 'show']);
Route::post('monitor-puertos', [MonitorPuertoController::class, 'store']); // body: monitor_id
Route::post('monitor-puertos/update/{id}', [MonitorPuertoController::class, 'update']);
Route::delete('monitor-puertos/{id}', [MonitorPuertoController::class, 'destroy']);

// ---------------------------
// 9️⃣ Conexión Video
// ---------------------------
Route::get('conexion-videos', [ConexionVideoController::class, 'index']);
Route::get('conexion-videos/{id}', [ConexionVideoController::class, 'show']);
Route::post('conexion-videos', [ConexionVideoController::class, 'store']); // body: motherboard_puerto_id, gpu_puerto_id, monitor_puerto_id, etc
Route::post('conexion-videos/update/{id}', [ConexionVideoController::class, 'update']);
Route::delete('conexion-videos/{id}', [ConexionVideoController::class, 'destroy']);

// ---------------------------
// 10️⃣ Fuente de poder
// ---------------------------
Route::get('fuentes-poder', [FuentePoderController::class, 'index']);
Route::get('fuentes-poder/{id}', [FuentePoderController::class, 'show']);
Route::post('fuentes-poder', [FuentePoderController::class, 'store']);
Route::post('fuentes-poder/update/{id}', [FuentePoderController::class, 'update']);
Route::delete('fuentes-poder/{id}', [FuentePoderController::class, 'destroy']);

// ---------------------------
// 11️⃣ RAMs
// ---------------------------
Route::get('rams', [RAMController::class, 'index']);
Route::get('rams/{id}', [RAMController::class, 'show']);
Route::post('rams', [RAMController::class, 'store']);
Route::post('rams/update/{id}', [RAMController::class, 'update']);
Route::delete('rams/{id}', [RAMController::class, 'destroy']);

// ---------------------------
// 12️⃣ Storages
// ---------------------------
Route::get('storages', [StorageController::class, 'index']);
Route::get('storages/{id}', [StorageController::class, 'show']);
Route::post('storages', [StorageController::class, 'store']);
Route::post('storages/update/{id}', [StorageController::class, 'update']);
Route::delete('storages/{id}', [StorageController::class, 'destroy']);

// ---------------------------
// 13️⃣ Accesorios
// ---------------------------
Route::get('accesorios', [AccesorioController::class, 'index']);
Route::get('accesorios/{id}', [AccesorioController::class, 'show']);
Route::post('accesorios', [AccesorioController::class, 'store']);
Route::post('accesorios/update/{id}', [AccesorioController::class, 'update']);
Route::delete('accesorios/{id}', [AccesorioController::class, 'destroy']);

// ---------------------------
// 14️⃣ Cables
// ---------------------------
Route::get('cables', [CableController::class, 'index']);
Route::get('cables/{id}', [CableController::class, 'show']);
Route::post('cables', [CableController::class, 'store']);
Route::post('cables/update/{id}', [CableController::class, 'update']);
Route::delete('cables/{id}', [CableController::class, 'destroy']);

// ---------------------------
// 15️⃣ Adaptadores
// ---------------------------
Route::get('adaptadores', [AdaptadorController::class, 'index']);
Route::get('adaptadores/{id}', [AdaptadorController::class, 'show']);
Route::post('adaptadores', [AdaptadorController::class, 'store']);
Route::post('adaptadores/update/{id}', [AdaptadorController::class, 'update']);
Route::delete('adaptadores/{id}', [AdaptadorController::class, 'destroy']);

// ---------------------------
// 16️⃣ Motherboards
// ---------------------------
Route::get('motherboards', [MotherboardController::class, 'index']);
Route::get('motherboards/{id}', [MotherboardController::class, 'show']);
Route::post('motherboards', [MotherboardController::class, 'store']);
Route::post('motherboards/update/{id}', [MotherboardController::class, 'update']);
Route::delete('motherboards/{id}', [MotherboardController::class, 'destroy']);
