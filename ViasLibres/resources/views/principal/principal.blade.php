<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>VIASlibres | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="{{asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
    <!--PARA usar api googlemaps-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCDOJbWiQOjRgzjSIi_ZQJ7U7zMG8ahPck&libraries=places"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]AIzaSyCDOJbWiQOjRgzjSIi_ZQJ7U7zMG8ahPck-->

  </head>
  <body class="skin-green">

    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('inicio')}}" class="logo"><b>VIAS</b>libres</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/imagenes/personas/{{ Auth::user()->imagen }}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/imagenes/personas/{{ Auth::user()->imagen }}" class="img-circle" alt="User Image" />
                    <p>
                      {{ Auth::user()->name }} - Web Developer
                      <small>Miembro desde 26/09/2017</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Salir</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/imagenes/personas/{{ Auth::user()->imagen }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>

              
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGACION</li>
            <li class="treeview">
              <a href="{{url('administracion/incidentes')}}">
                <i class="fa fa-laptop"></i> <span>Incidentes</span> 
              </a>
              <!--<i class="fa fa-angle-left pull-right"></i><ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Bandeja de incidentes </a></li>
              </ul>-->
            </li>
            <li class="treeview">
              <a href="{{url('administracion/mapa')}}">
                <i class="fa fa-files-o"></i>
                <span>Mapa</span>
              </a>
              <!--<i class="fa fa-angle-left pull-right"></i><ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Vista panorámica</a></li>
                
              </ul>-->
            </li>
            <li class="treeview">
              <a href="{{url('administracion/archivados')}}">
                <i class="fa fa-files-o"></i>
                <span>Incidentes archivados</span>
              </a>
            </li>
            

            <li class="treeview">
              <a href="{{url('administracion/usuario')}}">
                <i class="fa fa-book"></i>
                <span>Administrar Usuarios</span>
              </a>
            </li>

            <!--<li><a href="#"><i class="fa fa-book"></i> Documentacion</a></li>-->

            <li class="header">CLASIFICACIÓN</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Importantes </a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Peligrosos </a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Información </a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              @yield('contenido')
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Quality Studio</a>.</strong> Todos los derechos reservados.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dist/js/pages/dashboard.js')}}" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}" type="text/javascript"></script>
    
  </body>
</html>