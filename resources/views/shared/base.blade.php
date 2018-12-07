<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inicial</title>

  <!-- Bootstrap core CSS-->
  <link href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('css/sb-admin.css')}}" rel="stylesheet">

  <!-- CSS Assistent School -->
  <link href="{{ asset ('css/inicial.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Opções da barra direita -->
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="Tela_Aluno_Inicial.html">Menu</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar pesquisa -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar de configurações -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configurações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.html" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Menu -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link">
          <i class="fas fa-graduation-cap"></i>
          <span>Área do aluno</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Tela_Aluno_Inicial.html">
          <i class="fas fa-home"></i>
          <span>Inicio</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Tela_Aluno_Professores.html">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Professores</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Tela_Aluno_Notas.html">
          <i class="fas fa-chart-line"></i>
          <span>Notas</span></a>
      </li>
    </ul>


    <div id="content-wrapper">
    @yield('content')
    </div>
    
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Assistent School © 2018</span>
          </div>
        </div>
      </footer>

    </div>

  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal de sair -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realmente deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" se você estiver pronto para terminar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="index.html">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset ('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset ('vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset ('js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset ('js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset ('js/demo/chart-area-demo.js') }}"></script>

</body>

</html>