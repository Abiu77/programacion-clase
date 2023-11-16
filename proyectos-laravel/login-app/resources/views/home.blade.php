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
    <link rel="stylesheet" href="{{ asset('assets/home.css')}}">
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
            <a href="#">
              <i class="fs-4 bi bi-handbag-fill"></i>
              <span class="link-name">Productos</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">Productos</a></li>
            </ul>
          </li>
  
          <li>
            <div class="icon-link">
              <a href="./carrito.html">
                <i class="fs-4 bi bi-cart-plus-fill"></i>
                <span class="link-name">Carrito</span>
              </a>
              <i class="fas fa-caret-down arrow"></i>
            </div>
  
            <ul class="sub-menu">
              <li><a href="./carrito.blade.php" class="link-name">Carrito</a></li>
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
            <span style="font-size: 20px">TiendaOnline.com</span>
            <span>
              <a href="https://github.com/Abiu77" target="_blank"><i style="color: #fff; font-size: 28px" class="bi bi-github"></i></a>
              <a href="https://www.youtube.com/@tutosabiu/" target="_blank"><i style="color: #fff; font-size: 28px" class="bi bi-youtube"></i></a>
              <a href=""><i style="color: #fff; font-size: 28px" class="bi bi-twitter"></i></a>          
            </span>
          </article>
        </div>
    <div class="menu-cabecera">
        <div class="nike">
          <div class="img-nike">
            <img src="{{ asset('assets/logo.png') }}" style="width: 200px">
          </div>  
        </div>

        <label class="nike2" style="position:relative;">
            <input type="text" name="" id="" placeholder="Encuentre su producto favorito"> 
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                <path d="M21 21l-6 -6"></path>
              </svg> 
        </label>

        <div class="nike3">
            <a href="" class="ofertas">
              <div>Ofertas</div>
            </a>
        </div>
    </div>
        
    <div class="caja-principal">
      <div style="margin-bottom: 30px">
        <img style="width: 100%" src="https://images.falabella.com/v3/assets/blt422ac29cebae1d64/blt7878fcef99c303b3/655393bc4e01954980bf0b50/DESK.png?format=webp&quality=70&width=90p" alt="">
      </div>
      <div class="galeria">

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/518590-450-450/60769.jpg?v=637417681802200000" alt="">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Tomate Italiano</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 5.60 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/226526-512-512/zanahoria-entera.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Zanahoria</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 3.19 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/226537-1000-1000/120941.jpg?v=636977898135270000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Pimiento Marron</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 10.60 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/169297-450-450/60493.jpg?v=635769969532530000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Pepinillo</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 1.49 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/226524-450-450/132040.jpg?v=636977898052470000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Brócoli</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 2.49 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/646177-450-450/365826.jpg?v=637443514164330000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Papa Peruanita</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 6.90 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://www.supermercadosantamaria.com/documents/10180/10504/31041_G.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Vainita Americana</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 4.89 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/173637-450-450/993908.jpg?v=635785255623570000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Choclo Entero</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 3.69 un</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/177076-450-450/60288.jpg?v=635864715655970000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Limón Ácido</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 10.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/26975555-512-512/20017640.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Zapallo Macre</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 2.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/518589-512-512/844123.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Cebolla Roja</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 2.80 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/169268-450-450/59053.jpg?v=635769969252800000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Arveja</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 6.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/27139065-450-450/55338.jpg?v=638253506780370000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Apio Atado</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 1.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/646178-450-450/88406.jpg?v=637443514194630000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Yuca</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 5.50 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/518591-450-450/59961.jpg?v=637417681832070000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Kion</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 6.40 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/646179-512-512/59640.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Camote Morado</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 2.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/646189-512-512/180184.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Caigua x unidad</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 1.00 un</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/518592-450-450/60356.jpg?v=637417681866770000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Olluco</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 9.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/20372457-450-450/64576.jpg?v=638023231236300000">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Palta</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 11.00 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>

        <article class="galeria-box">

          <div class="pod-head">
            <img style="width: 80%; height: 90%" src="https://plazavea.vteximg.com.br/arquivos/ids/169290-512-512/maiz-morado-bolsa-1kg.jpg">
            <div class="hijo">
              <a href=""><i class="bi bi-heart"></i></a>
            </div>
          </div>

            <p style="line-height: 28px"> 
                <strong>Maiz morado</strong><br>
                <span style="font-size: 15px;"><i class="bi bi-check-circle-fill"></i> Retira tu compra <br>
                  <i class="bi bi-check-circle-fill"></i> Despacho a Domicilio
                </span>
                <br>
                <strong>S/ 6.50 x kg</strong>
            </p>
            
            <article>
              <span class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              </span>
            </article>
            
            <section>
              <a href="" class="shopping">
                <p>Agregar <i class="bi bi-cart3"></i></p>
              </a>
            </section>

        </article>
        
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