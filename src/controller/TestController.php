<?php

namespace Src\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function app()
    {
        return json_encode(['hoge'=>'fuga']);
    }
}
