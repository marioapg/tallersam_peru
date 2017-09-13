<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SAM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ URL::asset('css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/roboto_font.css?family=Roboto:400,700,300|Material+Icons') }}" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					Taller
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <!-- <li class="active"> -->
	                <li>
	                    <a href="#">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="{{ route('create_ot_path') }}">
	                        <i class="material-icons">content_paste</i>
	                        <p>Registrar OT</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <i class="material-icons">library_books</i>
	                        <p>Consultar OT</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <i class="material-icons">library_books</i>
	                        <p>Facturas</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Aplicación de Facturación</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())

                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <!-- {{ Auth::user()->name }}  -->
                                   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 							   <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
					</div>
				</div>
			</nav>

			<div class="content">
            		@include('layout._errors')
            		@include('layout._messages')
            		@yield('content')    
			</div>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{ URL::asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ URL::asset('js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>



	<!-- Material Dashboard javascript methods -->
	<script src="{{ URL::asset('js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ URL::asset('js/demo.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>