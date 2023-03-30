<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>train</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <div class="container p-5">
    
        <div class="row">
    
            
            @foreach($trains as $train)
            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Azienda: {{ $train->azienda}}</h5>
                        <h5 class="card-title">Stazione di partenza: {{ $train->stazioneDiPartenza}}</h5>
                        <h5 class="card-title">Stazione di arrivo: {{ $train->stazioneDiArrivo}}</h5>
                        <h5 class="card-title">data partenza: {{ $train->partenza}}</h5>
                        <h5 class="card-title">data arrivo: {{ $train->arrivo}}</h5>
                        <h5 class="card-title">codice: {{ $train->codice}}</h5>
                        <h5 class="card-title">numero carrozze: {{ $train->numCarrozze}}</h5>
                        <h5 class="card-title">in orario: {{ $train->inOrario}}</h5>
                        <h5 class="card-title">cancellato: {{ $train->cancellato}}</h5>

                        
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>