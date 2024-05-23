<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>
                        ID Fomation
                    </th>
                    <th>
                        Titre
                    </th>
                    <th>
                        Nombre d'heure </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $f)
                    <tr>
                        <td>{{ $f->idf }}</td>
                        <td>{{ $f->titre }}</td>
                        <td>{{ $f->NbrHeure }}</td>
                        <td>
                            <a href=" {{ route('formations.show',$f->idf) }}" class="link-primary">Détails</a>
                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
