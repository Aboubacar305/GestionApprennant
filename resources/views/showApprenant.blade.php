<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <title>Document</title>
    <style></style>
</head>
<body>
    



<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Numero</th>
    <th scope="col">Nom</th>
    <th scope="col">Prenom</th>
    <th scope="col">Date De Naissance</th>
    <th scope="col">Sexe</th>
    <th scope="col">Ville</th>
    <th scope="col">Formation</th>
    <th scope="col">Etablissement</th>
    <th scope="col">Contact</th>
    <th scope="col">Email</th>
    <!-- <th scope="col">Nom Tuteur</th>
    <th scope="col">Prenom Tuteur</th>
    <th scope="col">Profession</th> -->
    <th scope="col">Contact Tuteur</th>
    <th scope="col">Option</th>


    <th></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$apprenant->id}}</th>
        <td>{{$apprenant->nom}}</td>
        <td>{{$apprenant->prenom}}</td>
        <td>{{$apprenant->date_de_naissance}}</td>
        <td>{{$apprenant->sexe}}</td>
        <td>{{$apprenant->ville}}</td>
        <td>{{$apprenant->formation}}</td>
        <td>{{$apprenant->etablissement}}</td>
        <td>{{$apprenant->contact}}</td>
        <td>{{$apprenant->email}}</td>
        <td>{{$apprenant->contact_tuteur}}</td>
        <td>

           <div class="">
           <a href="{{route('edit_apprenant',$apprenant)}}" class="btn btn-am btn-primary">Modifier</a>
            <form action="{{route('delete_apprenant',$apprenant)}}" method="post">
            @csrf
            {{method_field('delete')}}
            <button class="btn btn-danger">Supprimer</button>
            </form>
           </div>
        </td>
    </tr>
  </tbody>
</table>


</body>
</html>