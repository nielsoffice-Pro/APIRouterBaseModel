<?php

namespace App\Http\Controllers;

use App\Models\MsapiExamTypeApi;
use Illuminate\Http\Request;

class MsapiExamTypeApiController extends Controller
{
    public function index()
    {

        return response()->json(MsapiExamTypeApi::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'ms_type' => 'required|string',
            'ms_categories' => 'required|string',
        ]);

        $examType = MsapiExamTypeApi::create($validated);
        return response()->json($examType, 201);
    }

    public function show($id)
    {
        $examType = MsapiExamTypeApi::find($id);
        if (!$examType) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($examType);
    }

    public function update(Request $request, $id)
    {
        $examType = MsapiExamTypeApi::find($id);
        if (!$examType) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $validated = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'ms_type' => 'sometimes|string',
            'ms_categories' => 'sometimes|string',
        ]);

        $examType->update($validated);
        return response()->json($examType);
    }

    public function destroy($id)
    {
        $examType = MsapiExamTypeApi::find($id);
        if (!$examType) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $examType->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
