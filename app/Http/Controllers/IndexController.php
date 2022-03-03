<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cache;

class IndexController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $data = [];

        try{

        }catch(\Throwable $errorThrown){}

        return view('index.home');
    }
}
