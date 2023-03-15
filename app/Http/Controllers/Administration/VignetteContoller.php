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
        $total = Vignette::count() ;
        $vignettes = Vignette::orderBy('id','DESC')->paginate() ;
        return view('administration.dashboard',compact('vignettes','total')) ;
    }

    public function print($id)
    {
        $vignettes = Vignette::where(['id'=> $id])->get();
        $vignettes[0]->etat = 1;
        $vignettes[0]->save() ;
        $dompdf = new Dompdf();
        $dompdf->setPaper('340px', 'auto');

        $customPaper = array(0, 0,   ((9*90)/3)-15 ,  ((9*90)/3)-15);
//        '340px', '340px'
        return \PDF::loadView('administration.vignettes.print',compact('vignettes')) ->setPaper($customPaper, 'landscape' )->stream("vignettes.pdf");
    }

    public function printAll()
    {

        $type = \request()->type ;
        $cond = '' ;
        if($type && $type=='rouge'){
            $cond = 'images/vignettes/vignette-rouge.png' ;
        }elseif($type && $type=='bleu'){
             $cond = 'images/vignettes/vignette-bleu.png' ;
       }elseif($type && $type=='jeune'){
            $cond = 'images/vignettes/vignette-jeune.png' ;
        }elseif($type && $type=='verte'){
            $cond = 'images/vignettes/vignette-vert.png' ;
        }else{
            $cond = '' ;
        }


        $vignettes = Vignette::where(['typeimpression'=>$cond])->where('typeimpression','<>','')->get() ;
//        $vignettes->update(['etat'=>1]);
        $customPaper = array(0, 0,   ((9*90)/3)-15 ,  ((9*90)/3)-15);
        return \PDF::loadView('administration.vignettes.print',compact('vignettes')) ->setPaper($customPaper, 'portrait' )->stream("vignettes.pdf");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vignettesrouge = Vignette::where(['typeimpression'=>'images/vignettes/vignette-rouge.png','etat'=>0])->orderBy('id','DESC')->get() ;
        $vignettesbleu= Vignette::where(['typeimpression'=>'images/vignettes/vignette-bleu.png','etat'=>0])->orderBy('id','DESC')->get() ;
        $vignettesjaunes= Vignette::where(['typeimpression'=>'images/vignettes/vignette-jeune.png','etat'=>0])->orderBy('id','DESC')->get() ;
        $vignettesvertes= Vignette::where(['typeimpression'=>'images/vignettes/vignette-vert.png','etat'=>0])->orderBy('id','DESC')->get() ;
        $vignettesdejaimprime= Vignette::where('etat','=',1)->orderBy('id','DESC')->get() ;
        return view('administration.vignettes.index',compact(
            'vignettesrouge',
            'vignettesbleu',
                    'vignettesjaunes',
                    'vignettesvertes',
                    'vignettesdejaimprime',
        )) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ['entreprise'=>'LCT', 'immatriculation'=>'TG-','typeengin'=>'', 'annees'=>'', 'typeimpression'=>''] ;
        $annees = array();
        for ($i = 2022; $i <= 2030; $i++) {
            $annees[$i] = $i;
        }
        $vignette =    Vignette::firstOrCreate($data);
        $typeimpression = Vignette::$typesVignettes;
        return view('administration.vignettes.edit',compact('vignette','typeimpression','annees'));
    }

    public function vignettesImporte()
    {

        return view('administration.vignettes.vignettesImporte');
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
        $annees = array();
        for ($i = 2022; $i <= 2030; $i++) {
            $annees[$i] = $i;
        }
        $typeimpression = Vignette::$typesVignettes;
        return view('administration.vignettes.edit',compact('vignette','typeimpression','annees'));
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
