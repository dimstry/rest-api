<?php 
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL,'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCzgxx_DM2Dcb9Y1spb9mUJA&key=AIzaSyCrbQQ-XkhDWjiOmcSD7KlyCVS6ZaFQRI8');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  $result = json_decode($response, true);
  var_dump($result);
  if(curl_exec($ch) === false)
  {
      echo "Curl error: " . curl_error($ch);
  }
  else
  {
      echo "Operation completed without any errors";
  }
  curl_close($ch);
  ?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>Dims</title>
</head>
<body>
  <h1 class="text-center">Hello Word</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <h4>Sosial Media</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <img src="..." alt="" width="100px" class="rounded-circle thumbnail">
          </div>
          <div class="col-md-8">
            <h6>Twice</h6>
            <p>7 juta subscribe</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vPwaXytZcgI?rel=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <img src="..." alt="" width="100px" class="rounded-circle thumbnail">
          </div>
          <div class="col-md-8">
            <h6>Twice</h6>
            <p>7 juta Follower</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>