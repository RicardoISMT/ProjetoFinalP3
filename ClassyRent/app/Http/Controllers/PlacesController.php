<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Places;

class PlacesController extends Controller
{

    public function index() {
        return Places::all();
        //Json vai mostrar a mensagem de sucesso
        return response()->json($places, 200, 201);
    }

    public function show($id) {
        return Places::find($id);
    }

    public function store(Request $request){
        return Places::create($request->all());
        return response()->json($places, 200, 201);
    }

    public function update(Request $request, $id){
        $places = Places::findORfail($id);
        $places->update($request->all());
        return response()->json($places, 200, 201);
    }
    
    public function delete(Request $request, $id){
        $places = Places::findOrfail($id);
        $places->delete();
        return response()->json(null, 200, 204);
    }
    



}
