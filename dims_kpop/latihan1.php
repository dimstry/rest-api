<?php
  $data=file_get_contents("data/itzy.json");
  $member=json_decode($data, true);
  $member=$member["itzy"];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Dims Kpop</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      
      <a class="navbar-brand" href="#"><img src="img/yeji.jpg" alt="yeji" width="50px" height="50px" class="rounded-circle"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Home</a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
    
    
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <h1>All Member</h1>
      </div>
    </div>
    <div class="row">
      <?php foreach ($member as $row ): ?>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top" src="img/<?= $row["Gambar"]; ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $row["Nama"]; ?></h5>
              <p class="card-text">Posisi : <?= $row["Posisi"]; ?></p>
              <p class="card-text">Negara : <?= $row["Negara"]; ?></p>
              <a href="#" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>