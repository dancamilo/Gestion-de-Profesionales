<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>informacion personal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar navbar-dark panel">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i></i></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    
                   
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa-solid fa-house"></i></a>
                    <a href="#" class="nav-item nav-link"><i class="fa-solid fa-graduation-cap"></i></a>   
                    <a href="widget.html" class="nav-item nav-link"><i class="fa-solid fa-user-group"></i></a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa-solid fa-user-shield"></i></a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa-solid fa-building"></i><a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa-solid fa-file-arrow-up"></i></a>
                    <a href="#" class="nav-item nav-link"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class=""></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars lineas"></i>
                </a>
                <a href="#" class="logo"></a>
                <a href="" class="gestor">Gestor de profesionales</a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- columnas -->
            <div class="container text-center">
                 <div class="row align-items-start">
                   <div class="col">
                     <div class="persona">
                         <div class="imagen"><img src="ruta-de-la-imagen.jpg"></div>
                           <div class="info">
                             <h2>Nombre Apellido</h2>
                                <p class="descripcion">Breve descripción</p>
                          <div class="contacto">
                          <div class="telefono"><i class="fas fa-phone"></i> Telefono 1</div>
                          <div class="telefono"><i class="fas fa-phone"></i> Telefono 2</div>
                          <div class="correo"><i class="fas fa-envelope"></i> Correo 1</div>
                          <div class="correo"><i class="fas fa-envelope"></i> Correo 2</div>
                        </div>
                      </div>
                    </div>

                   </div>
                   <div class="recuadro">
                     <h3>Información académica</h3>
                        <ul>
                         <li>Bachiller</li>
                         <li>Título universitario</li>
                       </ul>
                         <button>Añadir</button>
                   </div>
                   <div class="recuadro">
                      <h3>Experiencia laboral</h3>
                       <ul>
                      <li>Profesor - Universidad A - 2010-2015</li>
                      <li>Tutor - Universidad B - 2015-2020</li>
                       </ul>
                        <button>Añadir</button>
                   </div>
                   <div class="recuadro">
                       <h3>Documentos requeridos</h3>
                    <form>
                      <input type="file">
                      <button type="submit">Añadir</button>
                   </form>
                 </div>
                </div>

                   </div>
                   <div class="col">
                   <div class="columna">
  <div class="recuadro">
    <h3>Rol a desempeñar</h3>
    <p>Área especializada:</p>
    <ul>
      <li>Curso 1</li>
      <li>Curso 2</li>
    </ul>
    <button>Añadir</button>
  </div>
  <div class="recuadro">
    <h3>Horario</h3>
    <table>
      <thead>
        <tr>
          <th>Día</th>
          <th>Hora de inicio</th>
          <th>Hora de fin</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Lunes</td>
          <td><input type="time"></td>
          <td><input type="time"></td>
        </tr>
        <tr>
          <td>Martes</td>
          <td><input type="time"></td>
          <td><input type="time"></td>
        </tr>
        <tr>
          <td>Miércoles</td>
          <td><input type="time"></td>
          <td><input type="time"></td>
        </tr>
        <tr>
          <td>Jueves</td>
          <td><input type="time"></td>
          <td><input type="time"></td>
        </tr>
        <tr>
          <td>Viernes</td>
          <td><input type="time"></td>
          <td><input type="time"></td>
        </tr>
      </tbody>
    </table>
    <button>Añadir</button>
  </div>
</div>

                   </div>
                 </div>
           </div>

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid pt-4">
                <div class="bg-secondary rounded-top p-2 rounded">
                    <div class="row">
                        <div class="col-12 col-sm-6 footer">
                            <img class="rounded img-footer" src="{{asset('img/Logo1.png')}}" alt="">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @section('content')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Iconos font awesome -->
    <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script>
</body>

</html>