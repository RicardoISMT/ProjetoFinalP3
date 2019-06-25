<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{

    public function index() {
        return Users::all();
        //Json vai mostrar a mensagem de sucesso
        return response()->json($users, 200, 201);
    }

    public function show($id) {
        return Users::find($id);
    }

    public function store(Request $request){
        return Users::create($request->all());
        return response()->json($users, 200, 201);
    }

    public function update(Request $request, $id){
        $users = Users::findORfail($id);
        $users->update($request->all());
        return response()->json($users, 200, 201);
    }
    
    public function delete(Request $request, $id){
        $users = Users::findOrfail($id);
        $users->delete();
        return response()->json(null, 200, 204);
    }
}
