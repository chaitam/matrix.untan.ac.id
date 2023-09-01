<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $foto=Kegiatan::all();
        return view('galeri',['foto'=>$foto]);
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
    public function show($id)
    {
        $kgt= Kegiatan::all();
        $arr = $kgt->firstWhere("id", $id)->foto_lengkap_kegiatan;
        $new_post = $kgt->firstWhere('id', $id);
        return view('kegiatan',["kgt" => $new_post])->with("arr", $arr);
    }

    public function galeri($id)
    {
        $kgt= Kegiatan::all();
        $arr = $kgt->firstWhere("id", $id)->foto_lengkap_kegiatan;
        $new_post = $kgt->firstWhere('id', $id);
        return view('detail-kegiatan',["kgt" => $new_post])->with("arr", $arr);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
