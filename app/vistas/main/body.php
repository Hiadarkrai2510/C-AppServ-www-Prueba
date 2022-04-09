<body style= "color: black; ">
<nav class="navbar navbar-expand-lg navbar-light bg-upalt">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="sys/libs/images/LOGODESILOS.pnp" alt="" width="60" height="24"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showPortafolio()">portafolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">skillset</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section>
    <div id="pageView">
        <?php include "app/vistas/Home/Home.php"; ?>
    </div>
</section>