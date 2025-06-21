<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(RumahSakit::all());
    }

    public function show($id)
    {
        $rumahSakit = RumahSakit::find($id);
        if (!$rumahSakit) return response()->json(['message' => 'Data Not Found'], 404);
        return response()->json($rumahSakit);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'telpon' => 'nullable',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $rumahSakit = RumahSakit::create($request->all());
        return response()->json($rumahSakit, 201);
    }

    public function update(Request $request, $id)
    {
        $rumahSakit = RumahSakit::find($id);
        if (!$rumahSakit) return response()->json(['message' => 'Data Not Found', 404]);

        $rumahSakit->update($request->all());
        return response()->json($rumahSakit);
    }

    public function destroy($id)
    {
        $rumahSakit = RumahSakit::find($id);
        if (!$rumahSakit) return response()->json(['message' => 'Data Not Found'], 404);

        $rumahSakit->delete();
        return response()->json(['message' => 'Data Deleted Successfully']);
    }
}
