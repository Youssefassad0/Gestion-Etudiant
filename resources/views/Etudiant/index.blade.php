<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>

                    <th>Code </th>
                    <th>Nom </th>
                    <th>Prenom </th>
                    <th>Adresse </th>
                    <th>date de naissance </th>
                    <th>CLasse </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $e)
                    <tr>
                        <td>{{ $e->codeE }}</td>
                        <td>{{ $e->nom }}</td>
                        <td>{{ $e->prenom }}</td>
                        <td>{{ $e->adresse }}</td>
                        <td>{{ $e->date_naissance }}</td>
                        <td>{{ $e->idclasse }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('etudiants.edit',$e->codeE) }}" >
                                Modifier
                            </a> <a class="btn btn-primary" href="{{ route('etudiants.show', $e->codeE) }}">
                                Afficher
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
