<?php

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::all();
        return response()->json($penjualans);
    }

    public function store(Request $request)
    {
        $penjualan = new Penjualan([
            'id_kendaraan' => $request->id_kendaraan,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'harga_penjualan' => $request->harga_penjualan
        ]);
        $penjualan->save();

        return response()->json(['message' => 'Penjualan created successfully'], 201);
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        return response()->json($penjualan);
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->update($request->all());

        return response()->json(['message' => 'Penjualan updated successfully']);
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();

        return response()->json(['message' => 'Penjualan deleted successfully']);
    }
}
