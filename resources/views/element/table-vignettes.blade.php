
<div>



    <div class="d-flex justify-content-between mb-3">

        <div class="d-flex justify-content-between  align-items-center">
            <h4 class="card-title mr-3">Total vignettes  {{$listvignettes->count()}}</h4>
            <a target="_blank" href="{{route('administration.print-all',['type'=>$tyimp])}}" class="btn btn-danger"> Imprimer    <i class=" fa fa-print"></i></a>
        </div>

        <div class="">

            <a href="{{route('administration.vignettes.create')}}" class="btn btn-primary"> Ajouter une vignettes <i class=" fa fa-save"></i></a>
        </div>
    </div>

    <div class="">
        <app-vigette-table listvignettes="{{$listvignettes}}"></app-vigette-table>

    </div>
</div>


