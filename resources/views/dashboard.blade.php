<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Cámara de Comercio</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet"
        href="{{ URL::asset('porto/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/elusive-icons/css/elusive-icons.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/pnotify/pnotify.custom.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('porto/vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />


    <style>
        .dashed-line {
            border-left: 1px dashed #000;
            border-right: 1px dashed #000;
        }

        .dashed-line-left {
            border-left: 1px dashed #000;
        }

        .m-btn {
            background-color: #264025;
            /* Cambia el color de fondo */
            color: white;
            /* Cambia el color del texto */
        }

        .r-btn {
            background-color: #4C804A;
            /* Cambia el color de fondo */
            color: white;
            /* Cambia el color del texto */
        }

        .b-btn {
            background-color: #73C070;
            /* Cambia el color de fondo */
            color: white;
            /* Cambia el color del texto */
        }

        .mb-btn {
            background-color: #79CC76;
            /* Cambia el color de fondo */
            color: white;
            /* Cambia el color del texto */
        }
    </style>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ URL::asset('porto/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('porto/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('porto/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ URL::asset('porto/vendor/modernizr/modernizr.js') }}"></script>

    <!-- jbuestan -->
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}">

</head>

<body>
    <style>
        .url-container {
            text-align: center;
        }

        .url-container a {
            color: #242B4E;
            /* Cambia el color del texto del enlace dentro del contenedor */
            /* Otros estilos para el enlace si es necesario */
            font-family: 'Kanit';
        }
    </style>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <!-- <a href="../4.0.0" class="logo">
      <img src="{{ URL::asset('porto/img/logo.png') }}" width="75" height="35" alt="Porto Admin" />
     </a> -->

                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>

            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <!-- <form action="pages-search-results.html" class="search nav-form">
      <div class="input-group">
       <input type="text" class="form-control" name="q" id="q" placeholder="Buscar...">
       <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
      </div>
     </form> -->

                <span class="separator"></span>

                <ul class="notifications">
                    <!--  <li>
       <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
        <i class="bx bx-list-ol"></i>
        <span class="badge">3</span>
       </a>

       <div class="dropdown-menu notification-menu large">
        <div class="notification-title">
         <span class="float-end badge badge-default">3</span>
         Tasks
        </div>

        <div class="content">
         <ul>
          <li>
           <p class="clearfix mb-1">
            <span class="message float-start">Generating Sales Report</span>
            <span class="message float-end text-dark">60%</span>
           </p>
           <div class="progress progress-xs light">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
           </div>
          </li>

          <li>
           <p class="clearfix mb-1">
            <span class="message float-start">Importing Contacts</span>
            <span class="message float-end text-dark">98%</span>
           </p>
           <div class="progress progress-xs light">
            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
           </div>
          </li>

          <li>
           <p class="clearfix mb-1">
            <span class="message float-start">Uploading something big</span>
            <span class="message float-end text-dark">33%</span>
           </p>
           <div class="progress progress-xs light mb-1">
            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
           </div>
          </li>
         </ul>
        </div>
       </div>
      </li> -->
                    <li>
                        <!--  <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
        <i class="bx bx-envelope"></i>
        <span class="badge">4</span>
       </a>

       <div class="dropdown-menu notification-menu">
        <div class="notification-title">
         <span class="float-end badge badge-default">230</span>
         Mensajes
        </div>

        <div class="content">
         <ul>
          <li>
           <a href="#" class="clearfix">
            <figure class="image">
             <img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
            </figure>
            <span class="title">Joseph Doe</span>
            <span class="message">Lorem ipsum dolor sit.</span>
           </a>
          </li>
          <li>
           <a href="#" class="clearfix">
            <figure class="image">
             <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
            </figure>
            <span class="title">Joseph Junior</span>
            <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
           </a>
          </li>
          <li>
           <a href="#" class="clearfix">
            <figure class="image">
             <img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
            </figure>
            <span class="title">Joe Junior</span>
            <span class="message">Lorem ipsum dolor sit.</span>
           </a>
          </li>
          <li>
           <a href="#" class="clearfix">
            <figure class="image">
             <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
            </figure>
            <span class="title">Joseph Junior</span>
            <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
           </a>
          </li>
         </ul>

         <hr />

         <div class="text-end">
          <a href="#" class="view-more">View All</a>
         </div>
        </div>
       </div> -->
                    </li>
                    <li>
                        <!--   <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
        <i class="bx bx-bell"></i>
        <span class="badge">3</span>
       </a>

       <div class="dropdown-menu notification-menu">
        <div class="notification-title">
         <span class="float-end badge badge-default">3</span>
         Alertas
        </div>

        <div class="content">
         <ul>
          <li>
           <a href="#" class="clearfix">
            <div class="image">
             <i class="fas fa-thumbs-down bg-danger text-light"></i>
            </div>
            <span class="title">Server Caido!</span>
            <span class="message">Justo ahora</span>
           </a>
          </li>
          <li>
           <a href="#" class="clearfix">
            <div class="image">
             <i class="bx bx-lock bg-warning text-light"></i>
            </div>
            <span class="title">Usuario bloqueado</span>
            <span class="message">15 minutos atrás</span>
           </a>
          </li>
          <li>
           <a href="#" class="clearfix">
            <div class="image">
             <i class="fas fa-signal bg-success text-light"></i>
            </div>
            <span class="title">Conección restaurada</span>
            <span class="message">10/10/2021</span>
           </a>
          </li>
         </ul>

         <hr />

         <div class="text-end">
          <a href="#" class="view-more">View All</a>
         </div>
        </div>
       </div> -->
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-bs-toggle="dropdown">
                        <!-- <figure class="profile-picture">
        <img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
       </figure> -->
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">{{ Auth::user()->name }}</span>
                            <span class="role">
                                @if (Auth::user()->hasRole('admin'))
                                    <p>Administrador</p>
                                @elseif(Auth::user()->hasRole('camara'))
                                    <p>Cámara</p>
                                @else
                                    <p>Colaborador</p>
                                @endif
                            </span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <!-- <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a> -->
                                <a href="{{ route('profile.edit') }}">Perfil</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <!--<div class="inner-wrapper"> -->
        <div class="inner-wrapper" style="overflow: auto;max-height: 100vh;">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Menu Principal
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a class="nav-link" href="{{ route('dashboard') }}">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Inicio</span>
                                    </a>
                                </li>

                                @can('Admin')
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bxs-building" aria-hidden="true"></i>
                                            <span>Cámaras</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.maestro_camaras') }}">
                                                    Mantenimiento de Cámaras
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bxs-building-house" aria-hidden="true"></i>
                                            <span>Establecimientos</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.maestro_establecimientos') }}">
                                                    Mantenimiento de Establecimientos
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bxs-user" aria-hidden="true"></i>
                                            <span>Socios</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.maestro_socios') }}">
                                                    Mantenimiento de Socios
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bxs-user-account" aria-hidden="true"></i>
                                            <span>Entidades</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.maestro_entidades') }}">
                                                    Mantenimiento de Entidades
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.entidades_obligaciones') }}">
                                                    Obligaciones por Entidad
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bxs-user-detail" aria-hidden="true"></i>
                                            <span>Ogligaciones</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('admin.maestro_obligaciones') }}">
                                                    Mantenimiento de Obligaciones
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endcan
                                @can('Camara')
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            <i class="bx bx-file" aria-hidden="true"></i>
                                            <span>Gestor</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a class="nav-link" href="{{ route('dashboard') }}">
                                                    Cámara
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('dashboard') }}">
                                                    Cámara
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('dashboard') }}">
                                                    Socios
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{ route('dashboard') }}">
                                                    Establecimientos
                                                </a>
                                            </li>
                                            <!-- <li class="nav-parent">
                                                                    <a class="nav-link" href="#">
                                                                                                                    Socios
                                                                    </a>
                                                                    <ul class="nav nav-children">
                                                                    <li>
                                                                              <a class="nav-link" href="{{ route('dashboard') }}">
                                                                    Solicitud de Herramientas
                                                                    </a>
                                                                    </li>
                                                                    </ul>
                                                                    </li>
                                                                    <li>
                                                                    <a class="nav-link" href="{{ route('dashboard') }}">
                                                                    Solicitudes en Proceso
                                                                    </a>
                                                                    </li>  -->
                                        </ul>
                                    </li>
                                @endcan

                            </ul>
                        </nav>
                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>@yield('pagename')</h2>

                    <div class="right-wrapper text-end">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>

                            <li><span>Inicio</span></li>

                            <!-- <li><span>Default</span></li> -->

                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i
                                class="fas fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->

                <div class="container">
                    @yield('content')
                </div>
                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </section>

    <!-- Vendor -->
    <script src="{{ URL::asset('porto/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/common/common.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ URL::asset('porto/vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/raphael/raphael.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/morris/morris.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/gauge/gauge.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/snap.svg/snap.svg.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/liquid-meter/liquid.meter.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>


    <!-- Specific Page Vendor -->
    <script src="{{ URL::asset('porto/vendor/select2/js/select2.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/pnotify/pnotify.custom.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ URL::asset('porto/vendor/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/pnotify/pnotify.custom.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ URL::asset('porto/vendor/select2/js/select2.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}">
    </script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}">
    </script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}">
    </script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('porto/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::asset('porto/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ URL::asset('porto/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ URL::asset('porto/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ URL::asset('porto/js/examples/examples.dashboard.js') }}"></script>

    <!-- Examples -->
    <script src="{{ URL::asset('porto/js/examples/examples.modals.js') }}"></script>

    <!-- Examples -->
    <script src="{{ URL::asset('porto/js/examples/examples.wizard.js') }}"></script>


    <script src="{{ URL::asset('porto/js/examples/examples.datatables.default.js') }}"></script>
    <script src="{{ URL::asset('porto/js/examples/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ URL::asset('porto/js/examples/examples.datatables.tabletools.js') }}"></script>

</body>

</html>
