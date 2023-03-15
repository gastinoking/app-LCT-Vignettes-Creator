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
                            </div>

                            <div class="row">
                                <div class="col-lg-6">

                                    {!! Form::open(['method'=>'POST', 'route' => [ 'home']]) !!}
                                    <div class="mb-3 row">
                                        {{Form::label('entreprise','Nom de l\'entreprise ',['class'=>'col-md-4 col-form-label'])}}
                                        <div class="col-md-8">
                                            {{Form::text('file',null,['placeholder'=>'LCT', "class"=>'form-control '])}}
                                            @if($errors->has('file'))
                                                <span class="text-danger"> {{ $errors->first('file')}}</span>
                                            @endif
                                        </div>


                                    </div>



                                    <button type="submit" class="btn btn-primary">Ajouter  la vignette<i class="fa fat-save"></i></button>
                                    {!! Form::close() !!}

                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">

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
