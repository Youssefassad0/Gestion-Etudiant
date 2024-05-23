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
    <h4>L'Ancienne Classe est : {{ $etudiant->classe->idc }}  </h4>
    <div class="mb-3">
    <form action="{{route('etudiants.update',$etudiant->codeE)}}" method="post">
        @csrf
        @method('put')
        <ul>

            <li>Id:{{$classe->idc}}</li>
            <li>Libelle:{{$classe->libelle}} </li>
            <li>Libelle:{{$classe->NombreMax}} </li>
        </ul>
        <h1>Choisir une nouvelle classe</h1>
        <select name="idc" id="">
            @foreach($idFind as $id)
            <option value="{{$id->idc}}">{{$id->idc}}</option>
            @endforeach
        </select>
        <button>Sauvgarder</button>
    </form>
    </div>    
</body>

</html>
