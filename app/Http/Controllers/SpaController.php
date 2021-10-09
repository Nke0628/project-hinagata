<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function app()
    {
        return json_encode(['test'=>'test']);
    }
}
