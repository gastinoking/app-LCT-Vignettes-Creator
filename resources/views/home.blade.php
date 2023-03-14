@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-between d-flex">
                    <div class="">{{ __('Dashboard') }}</div>
                    <div class=""><a  class="btn btn-danger" href="{{route('print')}}">Imprimer </a></div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">vignette</th>
                                <th scope="col">Entreprise</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($vognettes as $k=>$v)
                                <tr>
                                    <th scope="row">{{$v->id}}</th>
                                    <th scope="row"><img src="{{$v->img}}" alt="{{$v->entreprise}}" style="height: 100px;"></th>
                                    <td>{{$v->entreprise}}</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
