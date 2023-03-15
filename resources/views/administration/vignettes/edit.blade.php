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
                                <h4 class="card-title">Ajouter une vignette</h4>
                                <a href="{{route('administration.print-all')}}" class="btn btn-danger"> Imprimer    <i class=" fa fa-print"></i></a>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">

                                    {!! Form::model($vignette,['method'=>'PUT', 'route' => [ 'administration.vignettes.update', $vignette->id]]) !!}
                                    <div class="mb-3 row">
                                        {{Form::label('entreprise','Nom de l\'entreprise ',['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::text('entreprise',$vignette->entreprise,['placeholder'=>'LCT', "class"=>"form-control"])}}
                                        </div>
                                        @error('entreprise')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 row">
                                        {{Form::label('immatriculation','Nom de l\'immatriculation ',['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::text('immatriculation',$vignette->immatriculation,['placeholder'=>'TG 2222 AR',"class"=>"form-control"])}}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        {{Form::label('typeengin','Nom de l\'typeengin ',['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::select('typeengin',['AUTO'=>'AUTO','MOTO'=>'MOTO'],$vignette->typeengin,[ "class"=>"form-control"])}}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        {{Form::label('annees','Nom de l\'annees ',['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::text('annees',$vignette->annees,['placeholder'=>'2022', "class"=>"form-control"])}}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        {{Form::label('typeimpression',"Selectionner la vignette",['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::select('typeimpression',$typeimpression,$vignette->typeimpression,['placeholder'=>'Rouge', "class"=>"form-control"])}}
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-secondary">Ajouter  la vignette<i class="fa fat-save"></i></button>
                                    {!! Form::close() !!}

                                </div>
                            </div>


                        </div>

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
