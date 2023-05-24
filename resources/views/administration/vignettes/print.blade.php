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
@php
    $total = $vignettes->count();
@endphp

@for($i=0; $i<$total; $i++)
    @php $v = $vignettes[$i]; @endphp

    @if($i % 6 == 0)
        @if($i != 0)
            <div class="page-break"></div>
        @endif
        <div style="position: relative;">
            @endif
            <div style="position: absolute; top: {{ floor(($i % 6) / 2) * 350 }}px; left: {{ (($i % 6) % 2) * 380 }}px; height: 300px; width: 300px; background: transparent;">
                <img src="{{ public_path().'/'.$v['typeimpression'] }}" alt="" style="height: 302px; width: 302px;">
                <div style="position: absolute; left: 120px; top: 96px; font-weight: bold; font-size: 20px">{{ $v['entreprise'] }}</div>
                <div style="position: absolute; left: 90px; top: 136px; font-weight: bold; font-size: 20px">{{ $v['immatriculation'] }}</div>
                <div style="position: absolute; left: 120px; top: 225px; font-weight: bold; font-size: 20px">{{ $v['typeengin'] }}</div>
                <div style="position: absolute; left: 130px; top: 257px; font-weight: bold; font-size: 20px">{{ $v['annees'] }}</div>
            </div>
            @if(($i+1) % 6 == 0 || ($i+1) == $total)
        </div>
    @endif

@endfor

</body>
</html>
