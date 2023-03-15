<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ma page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .page-break {
        page-break-after: always;
    }
</style>
<body>
{{--<h1>Titre de la page 1</h1>--}}
{{--<div>Contenu de la page 1</div>--}}

@foreach($vignettes as $k=>$v)
   <div class="" style="position: relative">
       <div style="">
           <img src="{{public_path().'/'.  $v->typeimpression}}" alt="" style="height: 302px">
       </div>
       <div style="position: absolute; left: 129px ;top: 108px;font-weight: bold;font-size: 20px">{{$v->entreprise}}</div>
       <div style="position: absolute; left: 100px ;top: 138px;font-weight: bold;font-size: 20px">{{$v->immatriculation}}</div>
       <div style="position: absolute; left: 113px ;top: 202px;font-weight: bold;font-size: 20px">{{$v->typeengin}}</div>
       <div style="position: absolute; left: 130px ;top: 226px;font-weight: bold;font-size: 20px">{{$v->annees}}</div>
   </div>

@endforeach



<!-- Saut de page -->


{{--<h1>Titre de la page 2</h1>--}}
{{--<div>Contenu de la page 2</div>--}}
</body>
</html>
