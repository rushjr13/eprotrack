<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>e-Protrack+</title>
  <link rel="shortcut icon" href="img/logo.png">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/the-big-picture.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" width="25"> e-<span class="text-danger">Pro</span>track+</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link <?php if(date('Y', time())=="2020"){echo "active";} ?>" href="2020">2020</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(date('Y', time())=="2021"){echo "active";} ?>" href="#">2021</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Page Content -->
  <section>
    <div class="ep">
      <div class="eprotrack">
        <h1 class="text-light text-shadow"><img src="img/logo.png" width="200"><br>e-<span class="text-danger">PRO</span>TRACK+</h1>
        <p class="text-light text-shadow"><strong>Elektronik <span class="text-danger">Procurement</span> Tracking</strong>, Adalah aplikasi untuk melacak data pengadaan yang ada di seluruh OPD Provinsi Gorontalo, dengan menggunakan metode pengadaan apapun dan jenis pengadaan apapun.</p>
        <span id="countdown">5</span>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    
    var seconds = document.getElementById("countdown").textContent;
    var countdown = setInterval(function() {
        seconds--;
        document.getElementById("countdown").textContent = seconds;
        if (seconds <= 0){
          clearInterval(countdown);
        }
    }, 1000);

  </script>

</body>

</html>