<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Saod </title>

    <!-- Custom fonts for this template -->
    <link href="{{  asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->

    <!-- Custom styles for this page -->
    <link href="{{  asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <script src="{{ asset('vendor/jquery/jquery.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.com/libraries/jquery.mask"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <style type="text/css">
            .personal-image {
                text-align: center;
            }

            .personal-image input[type="file"] {
                display: none;
            }

            .personal-figure {
                position: relative;
                width: 80px;
                height: 80px;
            }

            .personal-avatar {
                margin-top: 24px;
                cursor: pointer;
                width: inherit;
                height: inherit;
                box-sizing: border-box;
                border-radius: 100%;
                border: 2px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.2);
                transition: all ease-in-out .3s;
            }

            .personal-avatar:hover {
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.5);
            }

            .personal-figcaption {
                margin-top: 24px;
                cursor: pointer;
                position: absolute;
                top: 0px;
                width: inherit;
                height: inherit;
                border-radius: 100%;
                opacity: 0;
                background-color: rgba(0, 0, 0, 0);
                transition: all ease-in-out .3s;
            }

            .personal-figcaption:hover {
                opacity: 1;
                background-color: rgba(0, 0, 0, .5);
            }

            .personal-figcaption>img {
                margin-top: 23.5px;
                width: 25px;
                height: 25px;
            }



            #inputCpf {


                margin-left: 15px;
            }

            #cpf {


                margin-left: 15px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tooth"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Saod<sup>2</sup></div>
            </a>




            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-week"></i>
                    <span>Consultas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header"> </h6>
                        @if( Auth::user()->admin)
                        <a class="collapse-item" href="{{route('home')}}">Visualizar Consultas</a>
                        <a class="collapse-item" href="{{route('create_horario')}}">Cadastrar Consulta</a>
                        <a class="collapse-item" href="{{route('create_procedimento')}}">Cadastrar Procedimentos</a>
                        <a class="collapse-item" href="{{route('procedimentos')}}">Visualizar Procedimentos</a>
                        @endif
                        @if( Auth::user()->admin == false)
                        <a class="collapse-item" href="{{route('horarios')}}">Visualizar Horários</a>
                        <a class="collapse-item" href="{{route('user_horarios')}}">Meus horários</a>
                        @endif

                    </div>
                </div>
            </li>
            @if( Auth::user()->admin == false)
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user"></i>


                    <span>Usuário</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('perfil')}}">Visualizar Perfil</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-white collapse-item">sair</button>
                        </form>
                    </div>
                </div>
            </li>
            @endif



            <!-- Divider -->
            @if( Auth::user()->admin)
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

                    <i class="fas fa-user"></i>

                    </i>
                    <span>Administrador</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('register_admin') }}">Cadastrar Administrador</a>
                        <a class="collapse-item" href="{{route('perfil')}}">Visualizar Perfil</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-white collapse-item">sair</button>
                        </form>



                    </div>
                </div>
            </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="card-body">

                    @yield('content')
                    @yield('home')
                    @yield('procedimento')
                    @yield('vprocedimento')
                    @yield('perfil')
                    @yield('uhome')
                    @yield('vhoras')
                    @yield('ccon')




                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>>
   


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>
@yield('script')

</html>