<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $token = $request->user()->createToken($request->token_name);

        return back()->with('token', $token->plainTextToken);
    }


    public function delete(Request $request)
    {
        $request->user()->tokens()->where('id', $request->token_id)->first()->delete();

        return back();
    }
}
