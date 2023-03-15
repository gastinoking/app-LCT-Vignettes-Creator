<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ma page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    *{
        font-family: sans-serif;
        font-weight: bold;
    }
    .page-break {
        page-break-after: always;
    }

    html, body {
        height: 100%;
        width: 100%;

    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;

    }
    /* Optionnel : ajout d'une bordure pour visualiser le contenu centré */
    #pdf-container {
        border: 1px solid black;
    }
</style>
<body>
{{--<h1>Titre de la page 1</h1>--}}
{{--<div>Contenu de la page 1</div>--}}

@foreach($vignettes as $k=>$v)
   <div class="" style="position: relative;">

    <img src="{{public_path().'/'.  $v->typeimpression}}" alt="" style="height: 302px; width: 302px;margin-left: -25px;margin-top: -30px;margin-bottom: -55px">

       <div style="position: absolute; left: 100px ;top: 66px;font-weight: bold;font-size: 20px">{{$v->entreprise}}</div>
       <div style="position: absolute; left: 70px ;top: 106px;font-weight: bold;font-size: 20px">{{$v->immatriculation}}</div>
       <div style="position: absolute; left: 90px ;top: 195px;font-weight: bold;font-size: 20px">{{$v->typeengin}}</div>
       <div style="position: absolute; left: 100px  ;top: 226px;font-weight: bold;font-size: 20px">{{$v->annees}}</div>
   </div>

@endforeach



<!-- Saut de page -->


{{--<h1>Titre de la page 2</h1>--}}
{{--<div>Contenu de la page 2</div>--}}
</body>
</html>
