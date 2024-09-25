<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class DadosCidade extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      $info = explode('/',   ($request->getPathInfo()));

        $city = $info[2];

        return Local::where('cidade' , $city)->get();
      //)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
