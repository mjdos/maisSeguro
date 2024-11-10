<?php

namespace App\Http\Controllers;

use App\Models\Demandas;
use App\Models\Panico;
use App\Models\InformacoesOcorrencia;
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

  ///////////////OcorrÊncias
  public function getAllOcorrencia()
  {
    $infOcorrencia = InformacoesOcorrencia::get()->toJson(JSON_PRETTY_PRINT);
    return response($infOcorrencia, 200);
  }

  public function storeInformacaoOcorrencia(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'latitude' => 'required|numeric',
      'longitude' => 'required|numeric',
      'informacoes' => 'required|string',
      'user_id' => 'required|integer',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'message' => 'Erro de validação',
        'errors' => $validator->errors()
      ], 422); // 422 Unprocessable Entity
    }

    // Criação da nova entrada de informação de ocorrência
    $informacaoOcorrencia = InformacoesOcorrencia::create([
      'latitude' => $request->input('latitude'),
      'longitude' => $request->input('longitude'),
      'informacoes' => $request->input('informacoes'),
      'user_id' => $request->input('user_id'),
    ]);

    // Retorno da resposta JSON com status 201 (criado)
    return response()->json([
      'message' => 'Informação de ocorrência criada com sucesso',
      'data' => $informacaoOcorrencia
    ], 201);
  }

  public function getOcorrencia($id)
  {
    $informacaoOcorrencia = InformacoesOcorrencia::find($id);

    if ($informacaoOcorrencia) {
      return response()->json($informacaoOcorrencia, 200, [], JSON_PRETTY_PRINT);
    } else {
      return response()->json([
        "message" => "informacao Ocorrencia not found"
      ], 404);
    }
  }
}
