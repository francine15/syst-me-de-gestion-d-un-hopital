<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hopital la reference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .table-responsive {
            overflow-x: auto;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">La reference</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href='/acceuil'>Acceuil</a>
                    <a class="nav-link" href="/rendez-vous">Prendre-RdV</a>
                    <a class="nav-link" href="/suivi">patients</a>
                    <a class="nav-link disabled" aria-disabled=""href="/notification">Notification</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-3">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">tel</th>
                        <th scope="col">email</th>
                        <th scope="col">nomD</th>
                        <th scope="col">telD</th>
                        <th scope="col">medecin</th>
                        <th scope="col">dateRdV</th>
                        <th scope="col">heure</th>
                        <th scope="col">motif</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patient as $RdV)
                    <tr>
                       <th scope="row">{{ $RdV->id }}</th>
                        <td>{{$RdV->nom}}</td>
                        <td>{{$RdV->prenom}}</td>
                        <td>{{$RdV->tel}}</td>
                        <td>{{$RdV->email}}</td>
                        <td>{{$RdV->nomD}}</td>
                        <td>{{$RdV->telD}}</td>
                        <td>{{$RdV->medecin}}</td>
                        <td>{{$RdV->dateRdV}}</td>
                        <td>{{$RdV->heure}}</td>
                        <td>{{$RdV->heure}}</td>
                        <td>
                            <div class="action-buttons">
                                <a class="btn btn-danger" href="/supprimer/{{$RdV->id}}">Supprimer</a>
                                <a class="btn btn-warning" href="/modifier/{{$RdV->id}}">Modifier</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
