<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital la reference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">La reference</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href='/acceuil'>Acceuil</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/suivi">Gestion Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/rendez-vous">Gestion Rendez-Vous</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1>Ajout Des Patients</h1>
    <form class="row g-3" action="/insert" method="POST">
    @csrf
    
  <div class="col-md-6">
    <label for="inputnom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputnom" name="nom">
  </div>
  <div class="col-md-6">
    <label for="inputprenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="inputprenom" name="prenom">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="adresse" name="adresse">
  </div>
  <div class="col-12">
    <label for="inputtelephone" class="form-label">Telephone</label>
    <input type="tel" class="form-control" id="inputtelephone" placeholder="xxxxxxxxx" name="tel">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">E-Mail</label>
    <input type="email" class="form-control" id="inputAddress2" placeholder="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputjour" class="form-label">Jour</label>
    <input type="date" class="form-control" id="inputdate" name="jour">
  </div>
  <div class="col-md-6">
    <label for="inputheure" class="form-label">Heure</label>
    <input type="time" class="form-control" id="inputtime" name="heure">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>