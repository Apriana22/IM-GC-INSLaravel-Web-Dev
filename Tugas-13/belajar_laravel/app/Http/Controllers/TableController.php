<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('table.index',
        [
            "title" => "table",
        ]);
    }

    public function datatables()
    {
        return view('table.datatables',
        [
            "title" => "Halaman Data Table",
        ]);
    }
}
