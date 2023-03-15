@extends('layouts.administration')

@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                @foreach(range(0,3) as $k=>$v)

                    <div class="col-xl-3 col-sm-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Vignettes</h6>
                                    <h2 class="mb-4 text-white">{{$total}}</h2>
                                    <span class="badge bg-info">  0 </span> <span class="ms-2">...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- end row -->


            <!-- end row -->


            <!-- end row -->

            <div class="row">


                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Liste des vignetttes</h4>

                            <div class="table-responsive">
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!--Morris Chart-->

@endsection


@section('scripts')
    <script src="{{asset('administration/assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('administration/assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('administration/assets/js/pages/dashboard.init.js')}}"></script>
    <script>
        $('#header-chart-1').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'bar',
            height: '32',
            barWidth: '5',
            barSpacing: '3',
            barColor: '#3eb7ba'
        });
        $('#header-chart-2').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'bar',
            height: '32',
            barWidth: '5',
            barSpacing: '3',
            barColor: '#7a6fbe'
        });
    </script>

@endsection
