<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hôpital La Référence</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    @media (max-width: 767px) {
      .action-buttons {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">La Référence</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/ajout">Gestion Patients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/rendez-vous">Gestion Rendez-Vous</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container my-5">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Email</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Jour</th>
          <th scope="col">Heure</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($patient as $partient)
        <tr>
          <th scope="row">{{ $partient->id }}</th>
          <td>{{ $partient->nom }}</td>
          <td>{{ $partient->prenom }}</td>
          <td>{{ $partient->adresse }}</td>
          <td>{{ $partient->email }}</td>
          <td>{{ $partient->tel }}</td>
          <td>{{ $partient->jour }}</td>
          <td>{{ $partient->heure }}</td>
          <td>
            <div class="action-buttons">
              <a class="btn btn-primary" href="/dossier/{{ $partient->id }}">Suivre le dossier</a>
              <a class="btn btn-danger" href="/supprimer/{{ $partient->id }}">Supprimer</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>




