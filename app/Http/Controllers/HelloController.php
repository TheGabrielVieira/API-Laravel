<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller {

    public function hello(Request $request, $name) {
        return response()->json([
            'oi' => "Hello {$name}",
            'tchau' => $request->all()
        ]);
    }
}