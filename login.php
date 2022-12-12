<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="img/clickeat logo.png">
    <title>ClickEats!</title>
</head>
<body>
  <nav class="autohide navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/clickeat logo hz png.png" alt="startup_logo" height="36"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div> -->
      </div>
    </nav>
    <div class="container">
        <section class="login_section">
            <form action="" method="post" onsubmit="return formValidateLogin()" class="col col-md-4 col-sm-2" id="login_container">
                <fieldset>
                    <!-- <div class="logo_section mb-2">
                        <img src="./img/clickeat logo png.png" alt="logo" id="logo_img">
                    </div> -->
                    <div class="mb-4 mt-3">
                        <h2 class="text-center form-header">Welcome!</h2>
                        <h6 class="text-center form-sub-header">Login to your account</h6>
                    </div>
                    <div class="input-group input-group-sm mb-2">
                        <div class="form-floating">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            <label for="email" class="form-label">Email</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                            <label for="pass" class="form-label">Password</label>
                        </div>
                    </div>
                    
                    <?php
                      include('validate_login.php');
                      if($count == 0 && $empty == false){
                        echo "
                          <div class='alert alert-danger' role='alert'>
                            <label id='error_label'>Wrong email or password entered</label>
                          </div>
                        ";
                      }
                    ?>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" unchecked>
                      <label class="form-check-label">Remember Me</label>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-lg col col-12">Log In</button>
                    </div>
                    <div class="mt-3">
                      <p class=".inter-weight-300">Create an account <a href="signup.php" class="link-primary">here</a></p>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
    <script type="text/javascript" src="main.js"></script>
    <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,26L80,41.2C160,56,320,87,480,91C640,95,800,74,960,56.3C1120,39,1280,26,1440,21.7C1600,17,1760,22,1920,30.3C2080,39,2240,52,2400,58.5C2560,65,2720,65,2880,56.3C3040,48,3200,30,3360,39C3520,48,3680,82,3840,80.2C4000,78,4160,39,4320,23.8C4480,9,4640,17,4800,19.5C4960,22,5120,17,5280,15.2C5440,13,5600,13,5760,10.8C5920,9,6080,4,6240,2.2C6400,0,6560,0,6720,2.2C6880,4,7040,9,7200,13C7360,17,7520,22,7680,23.8C7840,26,8000,26,8160,34.7C8320,43,8480,61,8640,65C8800,69,8960,61,9120,60.7C9280,61,9440,69,9600,73.7C9760,78,9920,78,10080,69.3C10240,61,10400,43,10560,41.2C10720,39,10880,52,11040,58.5C11200,65,11360,65,11440,65L11520,65L11520,130L11440,130C11360,130,11200,130,11040,130C10880,130,10720,130,10560,130C10400,130,10240,130,10080,130C9920,130,9760,130,9600,130C9440,130,9280,130,9120,130C8960,130,8800,130,8640,130C8480,130,8320,130,8160,130C8000,130,7840,130,7680,130C7520,130,7360,130,7200,130C7040,130,6880,130,6720,130C6560,130,6400,130,6240,130C6080,130,5920,130,5760,130C5600,130,5440,130,5280,130C5120,130,4960,130,4800,130C4640,130,4480,130,4320,130C4160,130,4000,130,3840,130C3680,130,3520,130,3360,130C3200,130,3040,130,2880,130C2720,130,2560,130,2400,130C2240,130,2080,130,1920,130C1760,130,1600,130,1440,130C1280,130,1120,130,960,130C800,130,640,130,480,130C320,130,160,130,80,130L0,130Z"></path></svg> -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./node_modules/bootstrap/dist/js/@popperjs/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>
</html>