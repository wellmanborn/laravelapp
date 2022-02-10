<?php

namespace App\Http\Controllers;
use App\Models\Weather;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $data = Weather::filter($request->get('name'))->paginate(15);
        return response()->json($data);
    }

    public function another(Request $request){
        $data = Weather::filter($request->get('name'))->paginate(15);
        return view("another");
    }
}
