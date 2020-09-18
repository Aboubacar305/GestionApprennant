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
                        <h1 class=" test-white">Enregistrement d'un Apprenant</h1>
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
                <form action="{{route('store_apprenant')}}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="prenom">prenom:</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="date">Date_de_naissance :</label>
                            <input type="date" name="date_de_naissance" id="date" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Sexe:</label>
                            <input type="text" name="sexe" id="sexe" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="ville">ville:</label>
                            <input type="text" name="ville" id="ville" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="formation">Formation:</label>
                            <input type="text" name="formation" id="formation" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="etablissement">Etablissement:</label>
                            <input type="text" name="etablissement" id="etablissement" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="contact">Contact:</label>
                            <input type="number" name="contact" id="contact" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="contact_tuteur">Contact_tuteur:</label>
                            <input type="number" name="contact_tuteur" id="contact_tuteur" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-40 float-right">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
                    </div>
    </div>
</body>
</html>