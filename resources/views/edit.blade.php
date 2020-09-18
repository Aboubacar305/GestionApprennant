<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/bootstrap.min.css') }}" />
    <script src="{{ asset('Js/bootstrap.min.js') }}"></script>
    <title> Apprenant et Gestion</title>
</head>
<body>
    <div class="container pt-10">
    <form action=" {{route("update_apprenants",["apprenant"=>$apprenant])}} " method="post">
        @csrf
        <div class="row form-group">
            <div class="col-md-12">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{$apprenant->nom}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" id="model" class="form-control" value="{{$apprenant->prenom}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="date">Date de naissance</label>
                <input type="date" name="date_de_naissance" id="date" class="form-control" value="{{$apprenant->dat_de_naissance}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="nom">Sexe:</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{$apprenant->nom}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="ville">Ville:</label>
                <input type="text" name="ville" id="ville" class="form-control" value="{{$apprenant->ville}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="formation">Formation:</label>
                <input type="text" name="formation" id="formation" class="form-control" value="{{$apprenant->formation}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="etablissement">Etablissement:</label>
                <input type="text" name="etablissement" id="etablissement" class="form-control" value="{{$apprenant->etablissement}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="contact">Contact:</label>
                <input type="number" name="contact" id="contact" class="form-control" value="{{$apprenant->contact}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="email">Email:</label>
                <input type="mail" name="email" id="email" class="form-control" value="{{$apprenant->email}}">
            </div>
        </div>
        <div class="col-md-12">
                <label for="contact_tuteur">Contact Tuteur:</label>
                <input type="number" name="contact_tuteur" id="contact_tuteur" class="form-control" value="{{$apprenant->contact_tuteur}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success w-40 float-right">Valider</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>