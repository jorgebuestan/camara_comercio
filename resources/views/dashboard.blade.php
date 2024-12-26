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

        .content-header {
            background: linear-gradient(to right, #0399E3, #42AFA2, #73C070);
            /* jbuestan */
            box-shadow: 1px 3px 0 1px #CCCCCC;
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

        .header {
            position: relative;
            z-index: 10;
        }

        .header #user-dropdown {
            position: absolute;
            z-index: 9999;
        }

        #user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            min-width: 200px;
            max-width: 300px;
            /* Limit the maximum width */
            max-height: 300px;
            /* Set max height for scrollable content */
            overflow-y: auto;
            /* Add vertical scroll if content exceeds max height */
            margin-top: 0.5rem;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            z-index: 9999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #user-dropdown span {
            word-wrap: break-word;
            /* Ensure long text wraps to the next line */
            white-space: normal;
            /* Prevent text from overflowing */
        }
    </style>
    <section class="body">

        <!-- start: header -->
        <header class="header flex items-center justify-between gap-2 w-full px-2 !fixed top-0 z-50 !h-[60px]">
            <div class="m-1 flex items-center">
                <!-- <a href="../4.0.0" class="">
                    <img src="{{ URL::asset('porto/img/logo.png') }}" width="75" height="35"
                        alt="CamaraAdmin" />
                </a> -->
            </div>
            <div></div>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse px-2 relative">
                <!-- userbox -->
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 hover:ring-gray-300 hover:ring-4"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <span
                        class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-gray-300 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user text-xs md:text-sm"></i>
                    </span>
                </button>

                <div class="hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                    id="user-dropdown">
                    <div class="px-4 py-3 flex flex-col gap-2">
                        <span class="block text-xs text-gray-900">{{ Auth::user()->name }}</span>
                        <span class="block text-xs text-gray-500 truncate">
                            @if (Auth::user()->hasRole('admin'))
                                Administrador
                            @elseif(Auth::user()->hasRole('camara'))
                                Cámara
                            @else
                                Colaborador
                            @endif
                        </span>
                    </div>
                    <ul class="list-unstyled py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 cursor-pointer"
                                href="{{ route('profile.edit') }}">Perfil</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="block px-4 py-2 text-xs text-gray-700 hover:bg-gray-100 cursor-pointer"
                                    :href="route('logout')"
                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-8 h-8 md:w-8 md:h-8 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened"
                    aria-controls="navbar-user" aria-expanded="false" id="mobile-menu-open">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </header>

        <!--<div class="inner-wrapper"> -->
        <div class="inner-wrapper !flex !min-h-[calc(100vh-60px)] !h-full !w-full !pt-[60px]">
            <!-- start: sidebar -->
            <aside id="sidebar-left"
                class="!bg-[#242B4E] w-64 overflow-y-auto top-[60px] left-0 h-[calc(100vh-60px)] z-[1000] fixed hidden">
                <div class="flex items-center justify-between p-3 border-b border-gray-700">
                    <div class="sidebar-toggle text-white text-lg hover:bg-gray-700 p-2 rounded-md cursor-pointer"
                        data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                    <span id="sidebar-title" class="text-white font-bold">Menu Principal</span>
                </div>
                <nav class="mt-2 p-3 flex-1">
                    <ul class="space-y-2 pl-0" id="sidebar-routes">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center gap-3 text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                <i class="bx bx-home-alt"></i>
                                <span>Inicio</span>
                            </a>
                        </li>

                        @can('Camara')
                            <li>
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                        <span class="flex items-center gap-3">
                                            <i class="bx bxs-building"></i>
                                            <span>Cámaras</span>
                                        </span>
                                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                    </summary>
                                    <ul class="ml-1 mt-2 space-y-2">
                                        @can('Admin')
                                            <li><a href="{{ route('admin.maestro_camaras') }}"
                                                    class="block text-gray-300 hover:text-white">Mantenimiento de Cámaras</a>
                                            </li>
                                        @endcan
                                        <li><a href="{{ route('admin.establecimientos_camara') }}"
                                                class="block text-gray-300 hover:text-white">Establecimientos por
                                                Cámara</a></li>
                                        <li><a href="{{ route('admin.obligaciones_camara') }}"
                                                class="block text-gray-300 hover:text-white">Obligaciones por Cámara</a>
                                        </li>
                                        <li><a href="{{ route('admin.socios_camara') }}"
                                                class="block text-gray-300 hover:text-white">Socios por Cámara</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                        <span class="flex items-center gap-3">
                                            <i class="bx bxs-user"></i>
                                            <span>Socios</span>
                                        </span>
                                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                    </summary>
                                    <ul class="ml-4 mt-2 space-y-2">
                                        <li><a href="{{ route('admin.maestro_socios') }}"
                                                class="block text-gray-300 hover:text-white">Mantenimiento de Socios</a>
                                        </li>
                                        <li><a href="{{ route('admin.establecimientos_socio') }}"
                                                class="block text-gray-300 hover:text-white">Establecimientos por
                                                Socios</a></li>
                                        <li><a href="{{ route('admin.obligaciones_socio') }}"
                                                class="block text-gray-300 hover:text-white">Obligaciones por Socios</a>
                                        </li>
                                        <li><a href="{{ route('admin.adherentes_socio') }}"
                                                class="block text-gray-300 hover:text-white">Adherentes por Socios</a></li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                        <span class="flex items-center gap-3">
                                            <i class="bx bxs-user-account"></i>
                                            <span>Entidades</span>
                                        </span>
                                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                    </summary>
                                    <ul class="ml-4 mt-2 space-y-2">
                                        <li><a href="{{ route('admin.maestro_entidades') }}"
                                                class="block text-gray-300 hover:text-white">Mantenimiento de Entidades</a>
                                        </li>
                                        <li><a href="{{ route('admin.maestro_obligaciones') }}"
                                                class="block text-gray-300 hover:text-white">Mantenimiento de
                                                Obligaciones</a></li>
                                        <li><a href="{{ route('admin.entidades_obligaciones') }}"
                                                class="block text-gray-300 hover:text-white">Obligaciones por Entidad</a>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                        <span class="flex items-center gap-3">
                                            <i class="bx bxs-report"></i>
                                            <span>Reportes</span>
                                        </span>
                                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                    </summary>
                                    <ul class="ml-4 mt-2 space-y-2">
                                        <li><a href="{{ route('admin.reporte_socios_camara') }}"
                                                class="block text-gray-300 hover:text-white">Socios por Cámara</a></li>
                                    </ul>
                                </details>
                            </li>
                        @endcan

                        @can('Camara')
                            {{-- <li>
                                <details class="group">
                                    <summary
                                        class="flex items-center justify-between text-white hover:bg-gray-700 p-2 rounded-md cursor-pointer">
                                        <span class="flex items-center gap-3">
                                            <i class="bx bx-git-merge"></i>
                                            <span>Subir archivos de Obligaciones</span>
                                        </span>
                                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                                    </summary>
                                    <ul class="ml-4 mt-2 space-y-2">
                                        <li><a href="{{ route('camara.archivos_obligaciones_camara') }}"
                                                class="block text-gray-300 hover:text-white">Obligaciones por Cámara</a>
                                        </li>
                                        <li><a href="{{ route('camara.archivos_obligaciones_socio') }}"
                                                class="block text-gray-300 hover:text-white">Obligaciones por Socios</a>
                                        </li>
                                    </ul>
                                </details>
                            </li> --}}
                        @endcan
                    </ul>
                </nav>
            </aside>
            <!-- end: sidebar -->

            <!-- Main Content -->
            <section role="main" id="content-body"
                class="content-body !flex-grow !flex !flex-col !w-screen !px-0 !pt-0 md:!ml-64 ml-0 !overflow-y-auto !h-[calc(100vh-60px)]">
                <header
                    class="py-3 px-4 border-b border-gray-300 flex flex-row items-center justify-start gap-4 content-header text-white">
                    <h4 class="font-bold">@yield('pagename', 'Dashboard')</h4>
                </header>
                <main class="p-2 w-full !max-w-full">
                    @yield('content')
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Bienvenido al Dashboard</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Esta es la página principal del sistema de la Cámara de Comercio. Utilice el
                                            menú de la izquierda para navegar por las diferentes secciones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </section>
        </div>
        <!-- end: page -->
    </section>
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let error = Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'Aceptar',
                    allowOutsideClick: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.error('Error' + ' - {{ session('error') }}');
                    }
                });
                return;
            });
        </script>
    @endif
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Constants for breakpoints and widths
            const MOBILE_BREAKPOINT = 768;
            const SIDEBAR_FULL_WIDTH = 'w-64';
            const SIDEBAR_COLLAPSED_WIDTH = 'w-[59px]';

            // Cache DOM elements
            const $sidebar = $("#sidebar-left");
            const $content = $("#content-body");
            const $sidebarRoutes = $("#sidebar-left #sidebar-routes");
            const $sidebarTitle = $("#sidebar-title");
            const $overlay = $('<div>')
                .addClass("fixed inset-0 bg-black bg-opacity-50 z-[999]")
                .hide()
                .appendTo('body');

            // Debounce function to limit rapid firing of resize events
            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this;
                    const args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), wait);
                };
            }

            function isMobile() {
                return $(window).width() < MOBILE_BREAKPOINT;
            }

            function updateSidebarState() {
                if (isMobile()) {
                    handleMobileState();
                } else {
                    handleDesktopState();
                }
            }

            function handleMobileState() {
                $sidebar.addClass(SIDEBAR_FULL_WIDTH);
                $sidebar.addClass("hidden");
                $overlay.hide();
                $content.removeClass(`md:!ml-64 md:!ml-[59px]`);

                // Ensure proper stacking and positioning for mobile
                $sidebar.addClass("fixed z-[1000]");
            }

            function handleDesktopState() {
                $sidebar.removeClass("hidden");
                $overlay.hide();

                // Restore desktop layout
                const isCollapsed = !$sidebar.hasClass(SIDEBAR_FULL_WIDTH);
                $content.toggleClass("md:!ml-64", !isCollapsed)
                    .toggleClass("md:!ml-[59px]", isCollapsed);
                $sidebarRoutes.toggleClass("hidden", isCollapsed);
                $sidebarTitle.toggleClass("hidden", isCollapsed);
            }

            // Event Handlers
            const debouncedUpdateSidebar = debounce(updateSidebarState, 250);
            $(window).on("resize", debouncedUpdateSidebar);

            $("#mobile-menu-open").on("click", function() {
                if (isMobile()) {
                    $sidebar.toggleClass("hidden");
                    $overlay.toggle(!$sidebar.hasClass("hidden"));
                    $sidebarRoutes.removeClass("hidden");
                    $sidebarTitle.removeClass("hidden");
                }
            });

            $overlay.on("click", function() {
                $sidebar.addClass("hidden");
                $(this).hide();
            });

            $(".sidebar-toggle").on("click", function() {
                if (isMobile()) {
                    $sidebar.toggleClass("hidden");
                    $overlay.toggle(!$sidebar.hasClass("hidden"));
                } else {
                    $sidebar.toggleClass(SIDEBAR_FULL_WIDTH);
                    const isCollapsed = !$sidebar.hasClass(SIDEBAR_FULL_WIDTH);
                    $content.toggleClass("md:!ml-64", !isCollapsed)
                        .toggleClass("md:!ml-[59px]", isCollapsed);
                    $sidebarRoutes.toggleClass("hidden", isCollapsed);
                    $sidebarTitle.toggleClass("hidden", isCollapsed);
                }
            });

            // User menu functionality
            $("#user-menu-button").on("click", function(e) {
                e.stopPropagation();
                $("#user-dropdown").toggleClass("hidden");
            });

            $(document).on("click", function(e) {
                if (!$(e.target).closest("#user-dropdown").length) {
                    $("#user-dropdown").addClass("hidden");
                }
            });

            // Initialize sidebar state on page load
            updateSidebarState();
        });
    </script>
</body>

</html>
