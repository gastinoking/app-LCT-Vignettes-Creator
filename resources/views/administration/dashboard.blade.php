@extends('layouts.administration')

@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cube-outline float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Orders</h6>
                                <h2 class="mb-4 text-white">1,587</h2>
                                <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-buffer float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Revenue</h6>
                                <h2 class="mb-4 text-white">$46,782</h2>
                                <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-tag-text-outline float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Average Price</h6>
                                <h2 class="mb-4 text-white">$15.9</h2>
                                <span class="badge bg-warning"> 0% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-briefcase-check float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Product Sold</h6>
                                <h2 class="mb-4 text-white">1890</h2>
                                <span class="badge bg-info"> +89% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->


            <!-- end row -->

            <div class="row">


                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Orders</h4>

                            <div class="table-responsive">
                                <table class="table align-middle table-centered table-vertical table-nowrap mb-1">

                                    <tbody>
                                    <tr>
                                        <td>#12354781</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-1.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> Riverston Glass Chair
                                        </td>
                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                        <td>
                                            $185
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#52140300</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-2.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> Shine Company Catalina
                                        </td>
                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                        <td>
                                            $1,024
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#96254137</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-3.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> Trex Outdoor Furniture Cape
                                        </td>
                                        <td><span class="badge rounded-pill bg-danger">Cancel</span></td>
                                        <td>
                                            $657
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#12365474</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-4.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> Oasis Bathroom Teak Corner
                                        </td>
                                        <td><span class="badge rounded-pill bg-warning">Shipped</span></td>
                                        <td>
                                            $8451
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>#85214796</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-5.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> BeoPlay Speaker
                                        </td>
                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                        <td>
                                            $584
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#12354781</td>
                                        <td>
                                            <img src="{{asset('administration/assets/images/users/user-6.jpg')}}" alt="user-image"
                                                 class="avatar-xs me-2 rounded-circle" /> Riverston Glass Chair
                                        </td>
                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                        <td>
                                            $185
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                        </td>
                                    </tr>

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
