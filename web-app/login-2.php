<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bubbly - Boootstrap 5 Admin template by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Google fonts - Popppins for copy-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="login-2_data/css2.css" rel="stylesheet">
    <!-- Prism Syntax Highlighting-->
    <link rel="stylesheet" href="login-2_data/prism-toolbar.css">
    <link rel="stylesheet" href="login-2_data/prism-okaidia.css">
    <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
    <link rel="stylesheet" href="login-2_data/style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="login-2_data/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/img/favicon.png">
  <style id="1.772rtdwn35">#smgm_bgdiv{ text-align: center;position:fixed;top:0px;left:0px;z-index:9991;width:100%;height:100%;background-color:black;opacity:0.7;display:block;visibility:visible;}</style><style id="1.8k6q95dvn8">#smgm_dialogbox { vertical-align:middle;left:40px;top:15px;border:3px solid #000 !important;text-align:center !important;background-color:#fff !important;color:#000 !important;font-family:arial,verdana !important;z-Index:9999;position:fixed;width:18%;height:50%;margin-left:auto;margin-right:auto;display:block;visibility:visible;}</style><style id="1.xbsne8ezt7">.smgm_buttons { color:#000 !important;font: 90% 'arial','trebuchet ms',helvetica,sans-serif !important;background-color:#B2CCFF !important;border:2px solid !important;border-color: #E0EBFF #000 #000 #E0EBFF !important;vertical-align: top !important;}</style><style id="1.h4k5rd8w64g">.smgm_table { margin-bottom:10px !important;border:0px !important;border-collapse:collapse !important;margin-left:auto;margin-right:auto; }</style></head>
  <body>
    <div class="container-fluid px-0 overflow-x-hidden">
      <div class="row gx-0 min-vh-100">
        <div class="col-md-9 col-lg-6 col-xl-4 px-5 d-flex align-items-center shadow">
          <div class="w-100 py-5">
            <div class="text-center"><img class="img-fluid mb-4" src="a_data/flowmetrito.png" alt="..." style="max-width: 6rem;">
              <h1 class="h4 text-uppercase mb-5">Bienvenido!</h1>
            </div>
            <div class="text-center">
            <h4>
              <?php
              //mensaje de error proveniente de registrador.php
                if(isset($_GET['msg']))echo $_GET['msg'];
              ?>
          </h4>
          </div>
            <form method="POST" action="ingresar.php">
              <div class="mb-3">
                <!-- arreglar login -->
                <label class="form-label">Nombre de Usuario</label>
                <input class="form-control" id="username" name="username" type="text" autocomplete="off">
              </div>
              <div class="mb-4">
                <div class="row">
                  <div class="col">
                    <label class="form-label">Contraseña</label>
                  </div>
                  <div class="col-auto"><a class="form-text small text-muted" href="#">Olvidaste tu contraseña?</a></div>
                </div>
                <input class="form-control" id="pass" name="pass" type="password">
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" id="remember" type="checkbox">
                <label class="custom-control-label" for="remember">Recordar datos de inicio</label>
              </div>
              <!-- Submit-->
              <div class="d-grid mb-5">
                <button class="btn btn-primary text-uppercase">Iniciar Sesión</button>
              </div>
              <!-- Link-->
              <p class="text-sm text-muted text-center">
                 No tienes cuenta aún? <a href="https://demo.bootstrapious.com/bubbly/1-3/register-2.html">Registrate!</a>.</p>
            </form>
          </div>
        </div>
        <div class="col-md-3 col-lg-6 col-xl-8 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 me-n3" style="background-image: url(a_data/high-definition-water-wallpapers-water-drops-wallpapers-3342112605.jpg);"></div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="login-2_data/bootstrap.js"></script>
    <script src="login-2_data/js.js"></script>
    <!-- Main Theme JS File-->
    <script src="login-2_data/theme.js"></script>
    <!-- Prism for syntax highlighting-->
    <script src="login-2_data/prism.js"></script>
    <script src="login-2_data/prism-normalize-whitespace.js"></script>
    <script src="login-2_data/prism-toolbar.js"></script>
    <script src="login-2_data/prism-copy-to-clipboard.js"></script>
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
    <link rel="stylesheet" href="login-2_data/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</body></html>