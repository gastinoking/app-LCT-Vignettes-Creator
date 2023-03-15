@if($errors->any() )
    <div class="alert alert-danger">
        @foreach($errors->all() as $k =>$v)
            <span style="display: block;">

            {{$v }}

    </span>
        @endforeach
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        <strong> {{ session('success') }}</strong>
    </div>
@endif

@if(session()->has('danger'))
    <div class="alert alert-danger">
        <strong> {{ session('danger') }}</strong>
    </div>
@endif
