<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class TaskController extends Controller
{
    public function index()
    {
        return view('accounting.index');
    }
    public function products()
    {
        return view('accounting.products');
    }
    public function writeOff()
    {
        return view('write-off.products');
    }
    public function leftovers()
    {
        return view('accounting.leftovers');
    }
    public function sales()
    {
        return view('accounting.sales');
    }
}
