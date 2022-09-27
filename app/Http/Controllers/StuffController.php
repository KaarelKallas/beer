<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Stuff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function index() {
        return Stuff::with(['variation', 'category'])->get();
    }
}
