<!DOCTYPE html>
<html>
<?php
    include 'datos.php';
    session_start();
?>


<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js" integrity="sha512-5m2r+g00HDHnhXQDbRLAfZBwPpPCaK+wPLV6lm8VQ+09ilGdHfXV7IVyKPkLOTfi4vTTUVJnz7ELs7cA87/GMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flowmetro APP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Google fonts - Popppins for copy-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="a_data/css2.css" rel="stylesheet">
    <!-- Prism Syntax Highlighting-->
    <link rel="stylesheet" href="a_data/prism-toolbar.css">
    <link rel="stylesheet" href="a_data/prism-okaidia.css">
    <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
    <link rel="stylesheet" href="a_data/style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="a_data/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/img/favicon.png">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style id="1.7w3c2otlfz">#smgm_bgdiv{ text-align: center;position:fixed;top:0px;left:0px;z-index:9991;width:100%;height:100%;background-color:black;opacity:0.7;display:block;visibility:visible;}</style><style id="1.zgkaedwdhl">#smgm_dialogbox { vertical-align:middle;left:40px;top:15px;border:3px solid #000 !important;text-align:center !important;background-color:#fff !important;color:#000 !important;font-family:arial,verdana !important;z-Index:9999;position:fixed;width:18%;height:50%;margin-left:auto;margin-right:auto;display:block;visibility:visible;}</style><style id="1.q8f2nc0fxv">.smgm_buttons { color:#000 !important;font: 90% 'arial','trebuchet ms',helvetica,sans-serif !important;background-color:#B2CCFF !important;border:2px solid !important;border-color: #E0EBFF #000 #000 #E0EBFF !important;vertical-align: top !important;}</style><style id="1.nzj2uq90s5">.smgm_table { margin-bottom:10px !important;border:0px !important;border-collapse:collapse !important;margin-left:auto;margin-right:auto; }</style></head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a class="navbar-brand fw-bold text-uppercase text-base" ><span class="d-none d-brand-partial"></span><span class="d-none d-sm-inline">INICIO</span></a>
        <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item dropdown">
            <form class="ms-auto me-4 d-none d-lg-block" id="searchForm">
              
            </form>
            <div class="dropdown-menu dropdown-menu-animated text-sm" id="searchDropdownMenu">
              <h6 class="dropdown-header text-uppercase fw-normal">Recent pages</h6><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/cms-post.html"> <i class="far fa-file me-2"> </i>Posts</a><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/widgets-stats.html"> <i class="far fa-file me-2"> </i>Widgets</a><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/pages-profile.html"> <i class="far fa-file me-2"> </i>Profile</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header text-uppercase fw-normal">Users</h6><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/pages-profile.html"> <img class="avatar avatar-xs p-1 me-2" src="a_data/avatar-0.jpg" alt="Jason Doe"><span>Jason Doe</span></a><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/pages-profile.html"> <img class="avatar avatar-xs p-1 me-2" src="a_data/avatar-1.jpg" alt="Frank Williams"><span>Frank Williams</span></a><a class="dropdown-item py-1" href="https://demo.bootstrapious.com/bubbly/1-3/pages-profile.html"> <img class="avatar avatar-xs p-1 me-2" src="a_data/avatar-2.jpg" alt="Ashley Wood"><span>Ashley Wood</span></a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header text-uppercase fw-normal">Filters</h6><a class="dropdown-item py-1" href="#!"> <span class="badge me-2 badge-success-light">Posts</span><span class="text-xs">Search all posts</span></a><a class="dropdown-item py-1" href="#!"> <span class="badge me-2 badge-danger-light">Users</span><span class="text-xs">Only in users</span></a><a class="dropdown-item py-1" href="#!"> <span class="badge me-2 badge-warning-light">Campaigns</span><span class="text-xs">Only in campaigns</span></a>
            </div>
          </li>
          
          
          <li class="nav-item dropdown ms-auto"><a class="nav-link pe-0" id="userInfo" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar p-1" src="a_data/flowmetrito.png" alt="Jason Doe"></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated" aria-labelledby="userInfo">
              <div class="dropdown-header text-gray-700">
                <h6 class="text-uppercase font-weight-bold">
                <?php 
                  echo $_SESSION['user']['username'];
                ?>

                </h6><small>
                <?php 
                  echo $_SESSION['user']['mail'];
                ?>
                </small>
              </div>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div class="page-holder bg-gray-100">
        <div class="container-fluid px-lg-4 px-xl-5">
              <!-- Page Header-->
              <div class="page-header">
                <h1 class="page-heading">Resumen del dispositivo: <?php 
                  echo $diaActual;
                ?></h1>
                <h3> Hora Actualizacion:   
                  <?php
                    echo $hora;
                  ?>
                </h3>
              </div>
          <section class="mb-3 mb-lg-5">
            <div class="row mb-3">
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-red"> <?php 
                                echo $tempExt;
                            ?> °C </h4>
                            <p class="subtitle text-sm text-muted mb-0">Temperatura exterior</p>
                          </div>
                          <div class="flex-shrink-0 ms-3">
                                <svg class="svg-icon text-red">
                                  <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#speed-1"> </use>
                                </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-red-light">
                        
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-blue">
                                <?php 
                                echo $tempInt;
                            ?> °C
                            </h4>
                            <p class="subtitle text-sm text-muted mb-0">Temperatura Interior</p>
                          </div>
                          <div class="flex-shrink-0 ms-3">
                                <svg class="svg-icon text-blue">
                                  <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#news-1"> </use>
                                </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-blue-light">
                        
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-primary">
                                <?php 
                                echo $humedad;
                            ?> %
                            </h4>
                            <p class="subtitle text-sm text-muted mb-0">Humedad</p>
                          </div>
                          <div class="flex-shrink-0 ms-3">
                                <svg class="svg-icon text-primary">
                                  <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#bookmark-1"> </use>
                                </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-primary-light">
                        
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-green">
                            <?php 
                                echo $caudal;
                            ?> litros</h4>
                            <p class="subtitle text-sm text-muted mb-0">Flujo</p>
                          </div>
                          <div class="flex-shrink-0 ms-3">
                                <svg class="svg-icon text-green">
                                  <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#world-map-1"> </use>
                                </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-green-light">
                        <div class="row align-items-center text-green">

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
            </div>

                <h3>Consumo de agua en las ultimas horas</h3>

            <!-- GRAFICA -->
            <canvas id = "Migrafica" width="900" height="300"> </canvas>
              <script>
                let miCanvas = document.getElementById("Migrafica").getContext("2d");
                    var chart = new Chart(miCanvas,{
                        type: "bar",
                        data: {
                            labels:["8:00","9:00","10:00","11:00","12:00","13:00"],
                            datasets:[
                                {
                                label: "Flujo de agua cada hora",
                                backgroundcolor:"rgb(32,67,738)",
                                data:[ 
                                    <?php echo $h1; ?>,
                                    <?php echo $h2; ?>,
                                    <?php echo $h3; ?>,
                                    <?php echo $h4; ?>,
                                    <?php echo $h5; ?>,
                                    <?php echo $h6; ?>]
                                }
                            ]
                        }
                    })
                </script>

            






          </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-start fw-bold">
                <p class="mb-2 mb-md-0 fw-bold">Flowmetro © 2022</p>
              </div>
              <div class="col-md-6 text-center text-md-end text-gray-400">
                <p class="mb-0">Version 1.0.0</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="a_data/bootstrap.js"></script>
    <script src="a_data/js.js"></script>
    <!-- Data Tables-->
    <script src="a_data/simple-datatableslatest"></script>
    <!-- Init Charts on Homepage-->
    <script src="a_data/Chart.js"></script>
    <script src="a_data/charts-defaults.js"></script>
    <script src="a_data/index-default.js"></script>
    <!-- Main Theme JS File-->
    <script src="a_data/theme.js"></script>
    <!-- Prism for syntax highlighting-->
    <script src="a_data/prism.js"></script>
    <script src="a_data/prism-normalize-whitespace.js"></script>
    <script src="a_data/prism-toolbar.js"></script>
    <script src="a_data/prism-copy-to-clipboard.js"></script>
    <script type="text/javascript">
      // Optional
      Prism.plugins.NormalizeWhitespace.setDefaults({
      'remove-trailing': true,
      'remove-indent': true,
      'left-trim': true,
      'right-trim': true,
      });
          
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="a_data/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</body></html>