@extends("layouts.administration")

@section('content')

    <div class="page-content" id="app">
        <div class="container-fluid">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('flash')
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Importer le fichier</h4>
                            </div>

                                <upload-file></upload-file>




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

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection
@section('scripts')


@endsection
