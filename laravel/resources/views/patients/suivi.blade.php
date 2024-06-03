<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hopital la reference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">.
    
  </head>
  <body>
    <h1> </h1>
    <table class="table table-striped table-hover">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">email</th> 
      <th scope="col">tel</th>
      <th scope="col">jour</th>
      <th scope="col">heure</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($patient as $partient)
    <tr>
      <th scope="row">{{$partient->id}}</th>
      <td>{{$partient->nom}}</td>
      <td>{{$partient->prenom}}</td>
      <td>{{$partient->adresse}}</td>
      <td>{{$partient->email}}</td>
      <td>{{$partient->tel}}</td>
      <td>{{$partient->jour}}</td>
      <td>{{$partient->heure}}</td>
      <td><a class="btn btn-primary" href="/dossier/{{$partient->id}}">suivre le dossier</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>