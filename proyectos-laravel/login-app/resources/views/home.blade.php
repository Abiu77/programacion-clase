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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/home.css')}}">
</head>

<body>
  
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu Principal</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-gear"></i> <span class="ms-1 d-none d-sm-inline">Configuracion</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Productos</span> <i class=" fs-8 bi bi-caret-left-fill"></i> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>                        
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi bi-pc-display"></i> <span class="ms-1 d-none d-sm-inline">Contable</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>                      
                       <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">Ingresos</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-check2-square"></i> <span class="ms-1 d-none d-sm-inline">Egresos</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi bi-bar-chart"></i> <span class="ms-1 d-none d-sm-inline">Gráficas y estadisticas</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Nuevo proyecto</a></li>
                            <li><a class="dropdown-item" href="#">Ajustes</a></li>
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> 
                    
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Cerra Sesion') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-0 px-0">
                
                <div class="producto-cabe">
                    <nav class="categorias">Categorias</nav>
                    <nav class="buscador"> <input type="text" name="" id="" placeholder="Encuentre su producto"> </nav>
                    <nav class="ofertas">ofertas</nav>
                </div>
                <div class="producto">
                    <section class="popi">
                        <figure class="caja">
                            <img src="https://images.hola.com/imagenes/estar-bien/20230727236387/tomate-propiedades-saludables-dieta/1-286-101/tomate-t.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://saborusa.com.pa/imagesmg/imagenes/5ff3e6a0b703f_potatoes-food-supermarket-agriculture-JG7QGNY.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://www.molinosycia.com/wp-content/uploads/2023/03/cebolla_r_02.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://www.cuerpomente.com/medio/2023/06/15/zanahoria_7d572751_230615155206_1280x720.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://static.eldiario.es/clip/6d50a1af-72d2-411b-8d7f-b4c16307942b_16-9-aspect-ratio_default_0.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://chilli-no5.com/wp-content/uploads/2021/01/health-benefits-celery.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://thefoodtech.com/wp-content/uploads/2021/01/cebada.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://prama.com.ar/wp-content/uploads/2022/08/palta.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://cdn2.cocinadelirante.com/sites/default/files/images/2023/09/como-hacer-queso-con-1-litro-de-leche.jpg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2021/11/02/huevo-frito.jpeg" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://www.saborusa.com/wp-content/uploads/2023/07/sostenibilidad-frijol-1.webp" alt="">
                        </figure>
                        <figure class="caja">
                            <img src="https://s2.abcstatics.com/media/bienestar/2023/04/17/platano-beneficios-1-kVAG--620x349@abc.jpg" alt="">
                        </figure>
                    </section>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>