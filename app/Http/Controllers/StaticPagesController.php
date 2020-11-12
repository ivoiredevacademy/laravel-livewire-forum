<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index()
    {
        return view("static.index");
    }

    public function create()
    {
        return view("static.questions-create");
    }

    public function store()
    {
        dd(request()->all());
    }
}
