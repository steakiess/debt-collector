<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;

class UserController extends Controller
{
    private $repo;
    public function __construct(){
        $this->repo = new UserRepository;
    }

    public function index(){
        return view('user.index');
    }

    public function data(){

    }
}
