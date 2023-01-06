<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{

    public function index()
    {
        $carreras = Carreras::all();
        return view('carreras',compact('carreras'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
