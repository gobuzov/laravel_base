<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMyController extends Controller
{
    public function index():string{
        return "<h2>Солнышко!</h2>";
    }
}
