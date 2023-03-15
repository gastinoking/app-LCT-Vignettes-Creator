<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Vignette;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class VignetteContoller extends Controller
{

    public function dashboard()
    {

        return view('administration.dashboard') ;
    }

    public function print($id)
    {
        $vignettes = Vignette::where(['id'=> $id])->get();
        $dompdf = new Dompdf();
        $dompdf->setPaper('340px', 'auto');

        $customPaper = array(0,0,340.118110236,340.118110236);
//        '340px', '340px'
        return \PDF::loadView('administration.vignettes.print',compact('vignettes')) ->setPaper($customPaper, 'landscape' )->stream("vignettes.pdf");
    }

    public function printAll()
    {
        $vignettes = Vignette::get()->take(13) ;
        $dompdf = new Dompdf();
        $dompdf->setPaper('340px', 'auto');

        $customPaper = array(0,0,340.118110236,340.118110236);
//        '340px', '340px'
        return \PDF::loadView('administration.vignettes.print',compact('vignettes')) ->setPaper($customPaper, 'landscape' )->stream("vignettes.pdf");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vignettes = Vignette::orderBy('id','DESC')->paginate() ;
        return view('administration.vignettes.index',compact('vignettes')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ['entreprise'=>'', 'immatriculation'=>'','typeengin'=>'', 'annees'=>'', 'typeimpression'=>''] ;
        $vignette =    Vignette::firstOrCreate($data);
        $typeimpression = Vignette::$typesVignettes;
        return view('administration.vignettes.edit',compact('vignette','typeimpression'));
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
     * Show the form for editing the specified resource.
     */
    public function edit(Vignette $vignette)
    {

        $typeimpression = Vignette::$typesVignettes;
        return view('administration.vignettes.edit',compact('vignette','typeimpression'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vignette $vignette)
    {
      $data=   $request->validate([
            'entreprise'=>['required'],
            'immatriculation'=>['required'],
            'typeengin'=>['required'],
            'annees'=>['required'],
            'typeimpression'=>['required'],
        ]);

        $vignette->update($data) ;

        return  redirect()->route('administration.vignettes.index')->with('success',"La vignette a bien été enregistré") ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
