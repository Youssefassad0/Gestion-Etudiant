<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h1 class="text-center">
                Le Details de chaque formation 
            </h1>
            <h3>
                ID Formation  : {{ $formation->idf }}
            </h3>
            <h4>
              Le titre  : {{ $formation->titre }}
            </h4>
            <h4>
                Nombre Heure : {{ $formation->NbrHeure }} H
            </h4>
        </div>
        <div class="card">
            <h1 class="text-center">
                LEs CLasses 
            </h1>
            <h4>
                Le nombre de total de class de cette formation est : {{ count($classe) }}
            </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id Formation</th>
                        <th>Id CLasse</th>
                        <th>Libelle </th>
                        <th>Nombre CLass autorié</th>
                        <th>Nb Etudiant Enregister</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $x=1
                    @endphp
                    @foreach ($classe as $c)
                        <tr>
                            <td>{{ $x}}</td>
                            <td>{{ $c->idC }}</td>
                            <td>{{ $c->libelle }}</td>
                            <td>{{ $c->NombreMax }}</td>
                            {{-- <td>{{ count($c->etudiants) }}</td> --}}
                        </tr>
                        @php
                            $x=$x+1
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container mt-2">
            <h3>Les avis </h3>
            @if (count($avis)>0)
                @foreach ($avis as $av)
                    <h5> Code E : {{ $av->codeE }}</h5>
                    <p>Les Points données : {{ $av->pivot->points }} </p>
                @endforeach
            @else
                <p>pas d'avis </p>
                    
            @endif
        </div>
    </div>
</body>

</html>
