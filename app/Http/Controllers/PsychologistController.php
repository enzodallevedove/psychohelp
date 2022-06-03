<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychologist;

class PsychologistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Psychologist::all(), 200);
    }

    /**
     * @param \App\Models\Psychologist $psychologist
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Psychologist $psychologist)
    {
        return response()->json($psychologist, 200);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $psychologist = Psychologist::create($request->all());

        return response()->json($psychologist, 201);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Psychologist $psychologist
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Psychologist $psychologist)
    {
        $psychologist->update($request->all());

        return response()->json($psychologist, 200);
    }

    /**
     * @param \App\Models\Psychologist $psychologist
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Psychologist $psychologist)
    {
        $psychologist->delete();

        return response()->json([], 204);
    }
}
