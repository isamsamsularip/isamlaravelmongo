<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Create a new ArticleController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $kendaraans = Kendaraan::all();
        return response()->json($kendaraans);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'merek' => 'required|string',
            'model' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
        ]);
       
        $kendaraan = new Kendaraan($data);
        $kendaraan->save();

        return response()->json(['message' => 'Kendaraan created successfully'], 201);
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::find($id);
        return response()->json($kendaraan);
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->update($request->all());

        return response()->json(['message' => 'Kendaraan updated successfully']);
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();

        return response()->json(['message' => 'Kendaraan deleted successfully']);
    }
}

