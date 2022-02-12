<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpFoundation\Request;

class GameController extends Controller
{
    public function playerTwo(Request $request) {

        dd($request->all());
    }
}
