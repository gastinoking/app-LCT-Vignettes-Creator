<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ma page</title>
</head>
<body>
<h1>Titre de la page 1</h1>
<div>Contenu de la page 1</div>

@foreach($vignettes as $k=>$v)
   <div class="" style="position: relative">
       <div>
           <img src="{{public_path().'/'.  $v->typeimpression}}" alt="" height="302">
       </div>
       <div style="position: absolute; left: 100px ;top: 155px;font-weight: bold;font-size: 20px">{{$v->entreprise}}</div>
       <div style="position: absolute; left: 100px ;top: 155px;font-weight: bold;font-size: 20px">{{$v->entreprise}}</div>
   </div>
   <div style="page-break-after: always;" ></div>
@endforeach

<!-- Saut de page -->


<h1>Titre de la page 2</h1>
<div>Contenu de la page 2</div>
</body>
</html>
