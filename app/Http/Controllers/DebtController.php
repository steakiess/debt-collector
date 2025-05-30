<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebtController extends Controller
{
    private $repo;

    public function __construct(){
        
    }

    public function index(){
        return view('debt.index');
    }
}
