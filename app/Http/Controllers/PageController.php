<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return 'Selamat Datang!';
    }

    public function about() {
        return 'Wisang Garnies,2141762079';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan id'. $id;
    }
}
