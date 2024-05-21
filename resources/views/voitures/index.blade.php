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
    <div class="container">
@if (Session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h1>Liste des Voitures</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Immatriculation</th>
                    <th>Numéro d'Assurance</th>
                    <th>Kilométrage</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
                    <tr>
                        <td>{{ $voiture->id }}</td>
                        <td>{{ $voiture->immatriculation }}</td>
                        <td>{{ $voiture->num_assurance }}</td>
                        <td>{{ $voiture->kilometrage }}</td>
                        <td>
                            <a href="{{ route('voitures.show', $voiture->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $voitures->links() }}
    </div>
</body>

</html>
