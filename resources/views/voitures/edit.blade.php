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

        <h1>Modifier la Voiture</h1>
        <form action="{{ route('voitures.update', $voiture->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" class="form-control"
                    value="{{ old('immatriculation', $voiture->immatriculation) }}" required>
                @error('immatriculation')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="num_assurance">Numéro d'Assurance</label>
                <input type="text" name="num_assurance" class="form-control"
                    value="{{ old('num_assurance', $voiture->num_assurance) }}" required>
                    @error('num_assurance')
                    <div class="error">{{ $message }}</div>
                @enderror
                </div>
            <div class="form-group">
                <label for="kilometrage">Kilométrage</label>
                <input type="number" name="kilometrage" class="form-control"
                    value="{{ old('kilometrage', $voiture->kilometrage) }}" required>
                    @error('kilometrage')
                    <div class="error">{{ $message }}</div>
                @enderror
                </div>
            <div class="form-group">
                <label for="date_debut_location">Date de Début de Location</label>
                <input type="date" name="date_debut_location" class="form-control"
                    value="{{ old('date_debut_location', $voiture->date_debut_location) }}">
                    @error('date_debut_location')
                    <div class="error">{{ $message }}</div>
                @enderror
                </div>
            <div class="form-group">
                <label for="date_fin_location">Date de Fin de Location</label>
                <input type="date" name="date_fin_location" class="form-control"
                    value="{{ old('date_fin_location', $voiture->date_fin_location) }}">
                    @error('date_fin_location')
                    <div class="error">{{ $message }}</div>
                @enderror
                </div>
            <div class="form-group">
                <label for="id_client">Client</label>
                <select name="id_client" class="form-control">
                    <option value="">Sélectionnez un client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $voiture->id_client == $client->id ? 'selected' : '' }}>
                            {{ $client->nom }} {{ $client->prénom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à Jour</button>
        </form>
    </div>
</body>

</html>
