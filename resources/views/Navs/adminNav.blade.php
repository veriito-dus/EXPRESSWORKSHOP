<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EXPRESSWORKSHOP</title>
  <!-- <link rel="stylesheet" href="css/plugins/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/plugins/font-awesome.css">
  <link rel="stylesheet" href="css/plugins/jquery.animatedheadline.css">
  <link rel="stylesheet" class="back-color" href="css/style-dark.css">
  <link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
  <link rel="stylesheet" class="theme-color" href="css/settings/red-color.css" />
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="loading-area">
      <div class="circle"></div>
    </div>
    <div class="left-side"></div>
    <div class="right-side"></div>
  </div>

  <!-- Main Site -->
  <div id="home">
    <div class="header-mobile">
      <a class="header-toggle"><i class="fas fa-bars"></i></a>
      <h2>EXPRESSWORKSHOP</h2>
    </div>

    <!-- Left Block -->
    <nav class="header-main">

      <!-- Logo -->
      <div class="logo">
        <a href="{{url('/')}}"><img src="img/logo.png" alt=""></a>
      </div>

      <ul>
        <!-- <li data-tooltip="home" data-position="top">
                    <a href="#home" class="icon-h fas fa-house-damage"></a>
                  </li>
                  <li data-tooltip="about" data-position="top">
                    <a href="#about" class="icon-a fas fa-user-tie"></a>
                  </li>
                  <li data-tooltip="resume" data-position="top">
                    <a href="#resume" class="icon-r fas fa-address-book"></a>
                  </li>
                  <li data-tooltip="portfolio" data-position="top">
                    <a href="#portfolio" class="icon-p fas fa-briefcase"></a>
                  </li>
                  <li data-tooltip="blog" data-position="top">
                    <a href="#blog" class="icon-b fas fa-receipt"></a>
                  </li>
                  <li data-tooltip="contact" data-position="bottom">
                    <a href="#contact" class="icon-c fas fa-envelope"></a>
                  </li> -->
      </ul>
    </nav>

    <!-- Home Section -->
    <div class="pt-home" style="background-image: url('img/home-bg.png')">
      <section>

        <!-- Banner -->
        <div class="banner">
          <div class="logIn-contenedor">
            <div class="logIn">
              <div class="logIn-texto">
                <img class="iconoUser" src="img/user.png" alt="">
                <p style="font-size:25px;">Iniciar Sesion</p>
              </div>
              <form action="" class="formLogIn">
                <div class="logIn-sesion">
                  <input autofocus type="text" value="" name="User" id="Usuario" placeholder="Ingrese su Usuario" />
                </div>
                <div class="logIn-contraseña">
                  <input type="password" value="" name="Password" id="Contraseña" placeholder="Ingrese su Contraseña" />
                </div>
                <div class="logIn-boton">
                  <input flat type="submit" class="ingresar" value="Ingresar">
                </div>
              </form>
            </div>
          </div>
          <!-- <h1>EXPRESSWORKSHOP</h1>
          <p class="cd-headline rotate-1">
            <span>Los mejores en </span>
            <span class="cd-words-wrapper">
              <b class="is-visible">Mantenimiento</b>
              <b>Calidad</b>
              <b>Tiempo</b>
              <b>Puntialidad</b>
            </span>
          </p> -->
          <!-- <input type="submit" class="iniciarSesion" value="Ingresar"> -->
        </div>



        <!-- Social -->
        <div class="social">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- All Script -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.animatedheadline.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
<style>
  .logIn-contenedor {
    align-items: center;
    display: flex;
    justify-content: center;
    height: 100%;
    width: 100%;
  }

  .logIn {
    background-color: rgba(255, 255, 255, 0);
    border-radius: 25px;
    font-family: sans-serif;
    text-align: center;
    line-height: 1;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    max-width: 50%;
    max-height: 50%;
    padding: 20px 40px;
    /* box-shadow: 2px 2px 5px #999; */
    box-shadow: 2px 2px 5px white;
  }

  .formLogIn {
    display: grid;
    grid-template: 100%;
    margin-top: 50px;
  }

  input[type="text"],
  [type="password"] {
    background: rgba(14, 15, 16, .6);
    border: none;
    border-radius: 20px;
    color: white;
    border: 1.5px solid rgba(14, 15, 16, .6);
    text-align: center;
    padding: 8px 40px;
    /* width: 200px; */
  }

  /* .logIn-sesion {
    margin-top: 30px;
  } */

  .logIn-contraseña {
    margin-top: 20px;
  }

  .ingresar {
    background: rgba(14, 15, 16, .6);
    border-radius: 30px;
    cursor: pointer;
    border: none;
    color: white;
    width: auto;
    font-size: 18px;
    padding: 5px 30px;
    margin-top: 30px;
  }

  .ingresar:hover {
    color: #d94c48;
    /* padding: 7px 32px; */
    font-size: 20px;

  }

  .logIn-texto {
    margin-top: -85px;
    padding: 0;
    text-align: center;
  }
  .iconoUser{
    margin: 0;
    padding: 0;
    width: 20%;
  }
  .logIn-boton{
    margin-bottom: 10px;
  }
</style>