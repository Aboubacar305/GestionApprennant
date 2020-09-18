<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <!-- <script src="{{ asset('Js/bootstrap.min.js') }}"></script> -->
    <title></title>
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid bg-success p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class=" test-white">Modifier l'apprenant {{$apprenant->nom}} </h1>
                        <p class="lead test-white"></p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('update_apprenant',$apprenant)}}" method="post">
                @csrf
                {{method_field('put')}}
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" value="{{$apprenant->nom}}" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="prenom">prenom:</label>
                            <input type="text" name="prenom" value="{{$apprenant->prenom}}" id="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="date">Date_de_naissance :</label>
                            <input type="date" name="date_de_naissance" value="{{$apprenant->date_de_naissance}}" id="date" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Sexe:</label>
                            <input type="text" name="sexe" value="{{$apprenant->sexe}}" id="sexe" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="ville">ville:</label>
                            <input type="text" name="ville" value="{{$apprenant->ville}}" id="ville" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="formation">Formation:</label>
                            <input type="text" name="formation" value="{{$apprenant->formation}}" id="formation" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="etablissement">Etablissement:</label>
                            <input type="text" name="etablissement" value="{{$apprenant->etablissement}}" id="etablissement" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="contact">Contact:</label>
                            <input type="number" name="contact" value="{{$apprenant->contact}}" id="contact" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{$apprenant->email}}" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="contact_tuteur">Contact_tuteur:</label>
                            <input type="number" name="contact_tuteur" value="{{$apprenant->contact_tuteur}}" id="contact_tuteur" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-40 float-right">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
                    </div>
    </div>
</body>
</html>