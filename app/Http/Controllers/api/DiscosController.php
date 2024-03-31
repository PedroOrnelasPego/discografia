<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Discos;

class DiscosController extends Controller
{

    public function index()
    {
        return Discos::all();
    }

   

    public function store(Request $request)
    {
       Discos::create($request->all());
    }


    public function show(string $id)
    {
       
    }

    public function update(Request $request, string $id)
    {
       
    }


    public function destroy(string $id)
    {
      
    }
}
