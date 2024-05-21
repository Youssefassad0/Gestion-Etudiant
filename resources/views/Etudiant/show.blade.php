<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Etudiant</title>
</head>

<body>
    <div class="container mt-5">
        <a class="btn btn-primary" href="{{ route('etudiants.index') }}">
            Go Back
        </a>
        <div class="card mt-5">
       
        <h2>Les Informations de L'etudiant : {{ $etudiant->codeE }} </h2>
        
            <ul>
                <li>Le Code de l'etudiant : {{ $etudiant->codeE }}</li>
                <li>Le nom Complet de l'etudiant : {{ $etudiant->nom . ' ' . $etudiant->prenom }} </li>
                <li>L'adresse de l'etudiant : {{ $etudiant->adresse }}</li>
                <li>La date de naissance de l'etudiant : {{ $etudiant->date_naissance }}</li>
            </ul>
        </div>
        <div class="card mt-5">
            <h2 class="card-header">LEs infos de CLasse </h2>
            <div class="card-body">

                <ul>
                    <li>
                        L'id de classe :
                        {{ $classe->idC }}
                    </li>
                    <li>
                        Libelle de classe:
                        {{ $classe->libelle }}
                    </li>
                    <li>
                        LE nombre Maximal :
                        {{ $classe->NombreMax }}

                    </li>
                </ul>
            </div>
        </div>
        <div class="card mt-5">
            <h2 class="card-header">Les infos de Formation </h2>
            <div class="card-body">

                <ul>
                    <li>
                        L'id de classe :
                        {{ $formation->idf }}
                    </li>
                    <li>
                        Libelle de classe:
                        {{ $formation->titre }}
                    </li>
                    <li>
                        LE nombre Maximal :
                        {{ $formation->NbrHeure }}

                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>
