<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/carrito.css')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  
    <div class="sidebar close">
        <div class="logo">
            <i class="fs-4 bi bi-fire"></i>
          <span class="logo-name">Menu principal</span>
        </div>
  
        <ul class="nav-list">
          <li>
            <a href="{{route('home')}}">
              <i class="fs-4 bi bi-handbag-fill"></i>
              <span class="link-name">Productos</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="{{route('home')}}" class="link-name">Productos</a></li>
            </ul>
          </li>
  
          <li>
            <div class="icon-link">
              <a href="carrito">
                <i class="fs-4 bi bi-cart-plus-fill"></i>
                <span class="link-name">Carrito</span>
              </a>
              <i class="fas fa-caret-down arrow"></i>
            </div>
  
            <ul class="sub-menu">
              <li><a href="carrito" class="link-name">Carrito</a></li>
              <li><a href="#">Block Chain</a></li>
              <li><a href="#">Cryptography</a></li>
              <li><a href="#">Animation</a></li>
            </ul>
          </li>
  
          <li>
            <div class="icon-link">
              <a href="#">
                <i class="fs-4 bi bi-currency-dollar"></i>
                <span class="link-name">Ingresos</span>
              </a>
              <i class="fas fa-caret-down arrow"></i>
            </div>
  
            <ul class="sub-menu">
              <li><a href="#" class="link-name">Ingresos</a></li>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Card Design</a></li>
              <li><a href="#">Form Design</a></li>
            </ul>
          </li>

          <li>
            <div class="icon-link">
              <a href="#">
                <i class="fs-4 bi bi-check2-square"></i>
                <span class="link-name">Egresos</span>
              </a>
              <i class="fas fa-caret-down arrow"></i>
            </div>
  
            <ul class="sub-menu">
              <li><a href="#" class="link-name">Egresos</a></li>
              <li><a href="#">Python Compiler</a></li>
              <li><a href="#">Java Compiler</a></li>
              <li><a href="#">C Compiler</a></li>
            </ul>
          </li>
  
          <li>
            <a href="#">
              <i class="fs-4 bi bi-bar-chart"></i>
              <span class="link-name">Graficas y estadisticas</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Graficas y estadisticas</a></li>
            </ul>
          </li>
  
          <li>
            <a href="#">
              <i class="fas fa-bookmark"></i>
              <span class="link-name">Guardado</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Guardado</a></li>
            </ul>
          </li>
  
          <li>
            <a href="#">
              <i class="fas fa-clock-rotate-left"></i>
              <span class="link-name">Actividad</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Actividad</a></li>
            </ul>
          </li>
  
          <li>
            <a href="#">
              <i class="fas fa-heart"></i>
              <span class="link-name">Favoritos</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Favoritos</a></li>
            </ul>
          </li>
  
          <li>
            <a href="#">
              <i class="fas fa-gear"></i>
              <span class="link-name">Configuracion</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Configuracion</a></li>
            </ul>
          </li>
  
          <li>
                <div class="profile-details">
                <div class="profile-content">
                    <img src="https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg" alt="" />
                </div>
    
                <div class="name-job">
                    <div class="name">Usuario</div>
                    <div class="job">desconocido</div>
                    
                </div>
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fas fa-right-to-bracket"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>

          </li>
        </ul>
      </div>
  
      <div class="home-section">
        <div class="home-content">
          <i class="fas fa-bars" style="color: #fff"></i>
          <article class="cabecera-menu">
            <span style="font-size: 20px">TuVegano.com</span>
            <span>
              <a href="https://github.com/Abiu77" target="_blank"><i style="color: #fff; font-size: 28px" class="bi bi-github"></i></a>
              <a href="https://www.youtube.com/@tutosabiu/" target="_blank"><i style="color: #fff; font-size: 28px" class="bi bi-youtube"></i></a>
              <a href=""><i style="color: #fff; font-size: 28px" class="bi bi-twitter"></i></a>          
            </span>
          </article>
        </div>
        
    <div class="caja-principal">
      <div class="galeria">

    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">CarpiShop</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <p id="carrito-vacio" class="carrito-vacio">Tu carrito está vacío. <i class="bi bi-emoji-frown"></i></p>

                <div id="carrito-productos" class="carrito-productos disabled">
                    <!-- Esto se va a completar con el JS -->
                </div>

                <div id="carrito-acciones" class="carrito-acciones disabled">
                    <div class="carrito-acciones-izquierda">
                        <button id="carrito-acciones-vaciar" class="carrito-acciones-vaciar">Vaciar carrito</button>
                    </div>
                    <div class="carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>Total:</p>
                            <p id="total">$3000</p>
                        </div>
                        <button id="carrito-acciones-comprar" class="carrito-acciones-comprar">Comprar ahora</button>
                    </div>
                </div>

                <p id="carrito-comprado" class="carrito-comprado disabled">Muchas gracias por tu compra. <i class="bi bi-emoji-laughing"></i></p>

            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="{{ asset('assets/carrito.js')}}"></script>
    <script src="./js/menu.js"></script>

        
      </div>
    </div>

      </div>
      
      

      <script src="{{ asset('assets/menu.js')}}"></script>
            



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>