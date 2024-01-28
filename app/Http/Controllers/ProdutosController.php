<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Produtos";
    }

    public function produto($id)
    {
        return "Produto: ".$id;
    }

}
