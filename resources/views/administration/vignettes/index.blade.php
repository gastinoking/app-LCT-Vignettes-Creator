@extends("layouts.administration")

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('flash')
                           <div class="d-flex justify-content-between">

                               <div class="d-flex justify-content-between  align-items-center">
                                   <h4 class="card-title mr-3">Liste des vignettes</h4>
                                   <a href="{{route('administration.print-all')}}" class="btn btn-danger"> Imprimer    <i class=" fa fa-print"></i></a>
                               </div>

                                <div class="">

                                    <a href="{{route('administration.vignettes.create')}}" class="btn btn-primary"> Ajouter une vignettes <i class=" fa fa-save"></i></a>
                                </div>
                           </div>



                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Vignettes</th>
                                    <th>Entreprise</th>
                                    <th>Immatriculation</th>
                                    <th>Engin</th>
                                    <th>Année</th>
                                    <th>Type de vignettes</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($vignettes as $k=>$v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td><img src="{{$v->img}}" alt="{{$v->entreprise}}" style="height: 100px;"></td>
                                        <td>{{$v->entreprise}}</td>
                                        <td>{{$v->immatriculation}}</td>
                                        <td>{{$v->typeengin}}</td>
                                        <td>{{$v->annees}}</td>
                                        <td>
                                            @php

                                                $type = "";
                                                $c = "";
                                                switch ($v->typeimpression):
                                                    case 'images/vignettes/vignette-vert.png';
                                                        $type = 'vert';
                                                        $c = 'bg-success';
                                                        break;
                                                    case 'images/vignettes/vignette-jeune.png';
                                                        $type = 'jaune';
                                                         $c = 'bg-warning';
                                                        break;

                                                     case 'images/vignettes/vignette-bleu.png';
                                                        $type = 'bleu';
                                                         $c = 'bg-primary';
                                                        break;
                                                     case 'images/vignettes/vignette-rouge.png';
                                                        $type = 'rouge';
                                                         $c = 'bg-danger';
                                                        break;

                                                endswitch;
                                            @endphp

                                           <span class="badge {{$c}}"> {{$type }}</span>
                                        </td>
                                        <td>
                                            <a href="{{route('administration.vignettes.edit',$v->id)}}" class="btn btn-sm btn-success">
                                                <i class=" fa fa-pen"></i>
                                            </a>

                                            <a href="{{route('administration.vignettes.edit',$v->id)}}" class="btn btn-sm btn-danger">
                                                <i class=" fa fa-trash"></i>
                                            </a>
                                            <a href="{{route('administration.print',$v->id)}}" class="btn btn-sm btn-primary">
                                                <i class=" fa fa-print"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                        {{$vignettes->links('')}}
                    </div>

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->


            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


@endsection


@section('css')

    <link href="{{asset("administration/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("administration/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css" />


    <link href="{{asset("administration/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet"type="text/css" />


@endsection
@section('scripts')


@endsection
