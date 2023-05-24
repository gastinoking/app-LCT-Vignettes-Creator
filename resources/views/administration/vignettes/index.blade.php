@extends("layouts.administration")

@section('content')

    <div class="page-content" id="app">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('flash')




                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#rouge" role="tab"  onclick="window.location.hash = '#rouge';">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block text-danger btn btn-danger text-white"><strong>Vignettes Rouges</strong></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#bleu" role="tab"  onclick="window.location.hash = '#bleu';">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block  text-primary btn btn-primary text-white"><strong>Vignettes Bleus</strong> </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#jaunes" role="tab"  onclick="window.location.hash = '#jaunes';">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block  text-warning btn btn-warning text-white"> <strong>Vignettes jaunes</strong> </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#vertes" role="tab"  onclick="window.location.hash = '#vertes';">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block  text-success btn btn-success text-white"><strong>Vignettes vertes</strong></span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#dejaimprime" role="tab" onclick="window.location.hash = '#imprimer';">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block  text-success btn btn-dark text-white"><strong>Vignettes déja imprimés</strong></span>
                                    </a>
                                </li>


                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active p-3" id="rouge" role="tabpanel">
                                    <p class="mb-0">
                                         @include('element.table-vignettes',['listvignettes'=>$vignettesrouge,'tyimp'=>'rouge'])
                                    </p>
                                </div>

                                <div class="tab-pane p-3" id="bleu" role="tabpanel">
                                    <p class="mb-0">
                                        @include('element.table-vignettes',['listvignettes'=>$vignettesbleu,'tyimp'=>'bleu'])
                                    </p>
                                </div>
                                <div class="tab-pane p-3" id="jaunes" role="tabpanel">
                                    <p class="mb-0">
                                        @include('element.table-vignettes',['listvignettes'=>$vignettesjaunes,'tyimp'=>'jeune'])
                                    </p>
                                </div>

                                <div class="tab-pane p-3" id="vertes" role="tabpanel">
                                    <p class="mb-0">
                                        @include('element.table-vignettes',['listvignettes'=>$vignettesvertes,'tyimp'=>'verte'])
                                    </p>
                                </div>

                                <div class="tab-pane p-3" id="dejaimprime" role="tabpanel">
                                    <p class="mb-0">
                                        @include('element.table-vignettes',['listvignettes'=>$vignettesdejaimprime,'tyimp'=>'dejaimprime'])
                                    </p>
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


    <link href="{{asset("administration/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}"
          rel="stylesheet" type="text/css"/>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection
@section('scripts')
    <script src="{{}}"></script>
    <style>
        nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #0049a7;
            background-color: rgba(113, 148, 113, 0.6);
            border-color: rgba(34, 158, 34, 0.6) rgba(17, 93, 17, 0.6) #fff;
        }
    </style>
@endsection
