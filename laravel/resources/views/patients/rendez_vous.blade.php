<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

<!-- fonts style -->
<link href="/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="/css/font-awesome.min.css" rel="stylesheet" />
<!-- nice select -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
<!-- datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
<!-- Custom styles for this template -->
<link href="/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="/css/responsive.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head> 
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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

    <h1>Prendre Rendez_Vous</h1>
    <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="POST" action="/insert">
            <h4>
                
              Prendre <span>Rendez_Vous</span>
            </h4>
            @csrf
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Nom  </label>
                <input type="text" class="form-control" id="consultation" placeholder="" name ="nom">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Prenom  </label>
                <input type="text" class="form-control" id="consultation" placeholder="" name ="Prenom">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputPatientName">tel</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" name="tel">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputPatientName">email </label>
                <input type="email" class="form-control" id="consultation" placeholder="" name="email">
              </div>
            
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-4">
                <label for="inputSymptoms">Nom docteur</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="" name="nomD">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputPhone">tel</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" name="telD">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Medecin traitant</label>
                <select name="medecin" class="form-control wide" id="inputDoctorName">
                  <option value="Dentiste ">Dentiste</option>
                  <option value="Medecin generaliste ">Medecin generaliste</option>
                  <option value="Gynecologue">Gynecologue </option>
                  <option value="ophtamologue">ophtamologue </option>
                </select>
              </div>
              
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-4">
                <label for="">Date de Rendez vous</label>
                  
                <input type="date" class="form-control" id="inputdate" name="dateRdv">
                  

              </div>
              <div class="form-group col-lg-4">
                <label for="">heure de Rendez vous</label>
                  
                <input type="time" class="form-control" id="inputdate" name="heure">
                  

              </div>
              <div class="form-group col-lg-4">
                <label for="inputPhone">Motif</label>
                <textarea class="form-control" id="inputPhone" placeholder="" name="motif"></textarea>
              </div>
             
              
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Sauvegarder</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  <!-- jQery -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="/js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="/js/custom.js"></script>

  </body>
</html>