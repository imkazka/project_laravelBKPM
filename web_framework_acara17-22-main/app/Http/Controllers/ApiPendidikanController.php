<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll()
     {
         $pendidikan = pendidikan::all();
         return Response::json($pendidikan, 200);
     }

     public function getPen($id)
     {
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
     }

     public function createPen(Request $request)
     {
        pendidikan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
     }

     public function updatePen($id, Request $request)
     {
        Pendidikan::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil diubah'
        ], 201);
     }

     public function deletePen($id)
    {
        Pendidikan::destroy($id);

        return response()->json([
            'status' =>  'ok',
            'message' => 'Data berhasil dihapus'
        ], 201);
    }


}

    