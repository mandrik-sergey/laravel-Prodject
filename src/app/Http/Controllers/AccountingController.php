<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
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
        return view('accounting.write-off');
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
