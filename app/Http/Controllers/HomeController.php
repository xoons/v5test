<?php

namespace App\Http\Controllers;

use Faker\Core\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index() {
        $response = Http::get('http://v5test.test/api/data');
        $names = $response->json('famousNames');
        return view('home', ['names' => $names]);
    }
}
