<?php

namespace App\Http\Controllers;

use App\Models\Demandas;
use App\Models\Panico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
  public function getAllDemandas()
  {
    $demandas = Demandas::get()->toJson(JSON_PRETTY_PRINT);
    return response($demandas, 200);
  }

  public function storeDemanda(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'arquivo' => 'required|string',
      'tipo_arquivo' => 'required|string'
    ]);

    if ($validator->fails()) {
      return response()->json([
        'message' => 'Erro de validação',
        'errors' => $validator->errors()
      ], 422);
    }

    $demanda = Demandas::create([
      'arquivo' => $request->input('arquivo'),
      'tipo_arquivo' => $request->input('tipo_arquivo')
    ]);

    // Retorno da resposta JSON com status 201 (criado)
    return response()->json([
      'message' => 'Demanda criada com sucesso',
      'data' => $demanda
    ], 201);
  }

  public function getDemanda($id)
  {
    $demanda = Demandas::find($id);

    if ($demanda) {
      return response()->json($demanda, 200, [], JSON_PRETTY_PRINT);
    } else {
      return response()->json([
        "message" => "Demanda not found"
      ], 404);
    }
  }
  /////////////////// Pânico
  public function getAllPanico()
  {
    $panicos = Panico::get()->toJson(JSON_PRETTY_PRINT);
    return response($panicos, 200);
  }

  public function storePanico(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'user_id' => 'required|integer',
      'latitude' => 'required|numeric',
      'longitude' => 'required|numeric',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'message' => 'Erro de validação',
        'errors' => $validator->errors()
      ], 422);
    }

    $panico = Panico::create([
      'user_id' => $request->input('user_id'),
      'latitude' => $request->input('latitude'),
      'longitude' => $request->input('longitude'),
    ]);

    // Retorno da resposta JSON com status 201 (criado)
    return response()->json([
      'message' => 'Demanda criada com sucesso',
      'data' => $panico
    ], 201);
  }

  public function getPanico($id)
  {
    $demanda = Panico::find($id);

    if ($demanda) {
      return response()->json($demanda, 200, [], JSON_PRETTY_PRINT);
    } else {
      return response()->json([
        "message" => "Demanda not found"
      ], 404);
    }
  }
}
