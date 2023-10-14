<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lagu=Lagu::all();
        return view('lagu',['lagu'=>$lagu]);
    }

    public function lirik($id)
    {
        $lagu = Lagu::all();
        $lirik = $lagu->firstWhere('id', $id);
        $audio = $lagu->firstWhere('id', $id);
        return view('lirik-lagu',['lagu' => $lirik], ['audio' => $audio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Lagu $lagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lagu $lagu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lagu $lagu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lagu $lagu)
    {
        //
    }
}
