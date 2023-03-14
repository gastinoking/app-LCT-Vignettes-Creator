<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVignetteRequest;
use App\Http\Requests\UpdateVignetteRequest;
use App\Models\Vignette;
use Dompdf\Dompdf;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function print()
    {
        $dompdf = new Dompdf();
        $dompdf->setPaper('340px', 'auto');
        $vignettes = Vignette::get() ;

        return \PDF:: loadView('vignettes.print',compact('vignettes')) ->setPaper('340px', 'auto')->stream("vignettes.pdf");


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
    public function store(StoreVignetteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vignette $vignette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vignette $vignette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVignetteRequest $request, Vignette $vignette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vignette $vignette)
    {
        //
    }
}
