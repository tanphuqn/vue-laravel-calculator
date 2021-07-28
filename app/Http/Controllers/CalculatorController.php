<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalculatorController extends Controller
{
    public function index(Request $request) {
        $validator = Validator::make($request->all(), [
            "numbA" => "required|numeric",
            "numbB" => "required|numeric"
        ]);

        if($validator->fails()) {
            return response()->json([
                "message" => "Numb a or b is required and is a numeric",
                "code" => 400,
                "errors" => $validator->errors()
            ], 400);
        }

        $a = $request->get("numbA");
        $b = $request->get("numbB");
        $res = (int)$a + (int)$b;

        return response()->json([
            "message" => "result",
            "data" => $res,
            "code" => 200
        ]);
    }
}
