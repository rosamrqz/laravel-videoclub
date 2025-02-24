<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function  index() {
        return view('catalog.index'); 
    }

    function show($id) {
        return view('catalog.show', ['id' => $id]);
    }

    function create() {
        return view('catalog.create');
    }

    function edit($id) {
        return view('catalog.edit', ['id' => $id]);
    }
}
