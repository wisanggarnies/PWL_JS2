<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArcticlesController extends Controller
{
    //
    public function articles($id) {
        return 'Halaman Artikel dengan id'. $id;
    }
}
