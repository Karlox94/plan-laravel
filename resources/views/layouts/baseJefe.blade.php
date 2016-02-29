<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Elaboración, Seguimiento y Control de Planes de Mejoramiento en la Universidad de Córdoba ">
    <meta name="author" content="Casalcedo - Airfortiche">

	<title>@yield('titulo')</title>

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
</head>
<body  onLoad="initDynamicOptionLists()">
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand titulo" href="{{url('plan/create')}}">Sistema de Elaboración, Seguimiento y Control de Planes de Mejoramiento</a>
                <a class="navbar-brand titulo2" href="{{url('plan/create')}}">Plan de Mejoramiento</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i> Mis actividades <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Actividad 1 <span class="label label-default">Hasta 30/01/2016</span></a>
                        </li>
                        <li>
                            <a href="#">Actividad 2 <span class="label label-primary">Hasta 30/01/2016</span></a>
                        </li>
                        <li>
                            <a href="#">Actividad 3 <span class="label label-success">Hasta 30/01/2016</span></a>
                        </li>
                        <li>
                            <a href="#">Actividad 4 <span class="label label-info">Hasta 30/01/2016</span></a>
                        </li>
                        <li>
                            <a href="#">Actividad 5 <span class="label label-warning">Hasta 30/01/2016</span></a>
                        </li>
                        <li>
                            <a href="#">Actividad 6 <span class="label label-danger">Hasta 30/01/2016</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver todas</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('usuario')}}"><i class="fa fa-fw fa-user"></i> Cuenta</a>
                        </li>                        
                        <li class="divider"></li>
                        <li>
                            <a href="login.html"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{url('plan/create')}}"><i class="fa fa-fw fa-edit"></i> Crear Plan</a>
                    </li>
                    <li>
                        <a href="{{url('plan/estadoPlan')}}l"><i class="fa fa-fw fa-bar-chart-o"></i> Ver estado de Plan</a>
                    </li>  
                    <li>
                        <a href="{{url('plan/actividades')}}l"><i class="fa fa-fw fa-bar-chart-o"></i> Ver estado de Actividades</a>
                    </li>
                    <div class="logo">
                        <img src="{{asset('images/logo.svg')}}"/>
                        <p>Universidad de Córdoba</p>
                        <p>Carlos Salcedo - Aldair Fortiche <br> © - 2016</p>
                    </div>                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

	    	<div class="container-fluid">

            <!-- /contendo (formulario) -->
            	@yield('contenido')
            </div>
        </div>
    </div>  

            


    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>
    

</body>
</html>