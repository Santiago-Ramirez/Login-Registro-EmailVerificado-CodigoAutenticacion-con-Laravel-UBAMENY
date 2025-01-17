<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UbaMeny</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
		background: #eeeeee;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar {
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;
	}
	.navbar .navbar-brand i {
		font-size: 20px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }
    .search-box input {
		box-shadow: none;
        padding-right: 35px;
        border-radius: 3px !important;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar ul li i {
		font-size: 18px;
	}
	.navbar .dropdown-menu i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .dropdown.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}
	.navbar .dropdown-menu .material-icons {
		font-size: 21px;
		line-height: 16px;
		vertical-align: middle;
		margin-top: -2px;
	}
	.navbar .badge {
		background: #f44336;
		font-size: 11px;
		border-radius: 20px;
		position: absolute;
		min-width: 10px;
		padding: 4px 6px 0;
		min-height: 18px;
		top: 5px;
	}
	.navbar ul.nav li a.notifications, .navbar ul.nav li a.messages {
		position: relative;
		margin-right: 10px;
	}
	.navbar ul.nav li a.messages {
		margin-right: 20px;
	}
	.navbar a.notifications .badge {
		margin-left: -8px;
	}
	.navbar a.messages .badge {
		margin-left: -4px;
	}
	.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
		background: transparent !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
		}
		.input-group {
			width: 100%;
		}
	}
</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>Uba<b>Meny</b></a>
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		{{-- <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Web Development</a></li>
					<li><a href="#">Graphic Design</a></li>
					<li><a href="#">Digital Marketing</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul> --}}
		{{-- <form class="navbar-form form-inline"> --}}
			{{-- <div class="input-group search-box">
				{{-- <input type="text" id="search" class="form-control" placeholder="Search by Name">
				{{-- <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div> --}}
		{{-- </form> --}}
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
			{{-- <li><a href="#" class="messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li> --}}
			<li class="dropdown">
          
				<a href="#" data-toggle="dropdown" class="dropdown-toggle user-action">{{ auth()->user()->nombre }}<b class="caret"></b></a>
               

				<ul class="dropdown-menu">
					{{-- <li><a href="#"><i class="fa fa-user-o"></i> Profile</a></li> --}}
					{{-- <li><a href="#"><i class="fa fa-calendar-o"></i> Calendar</a></li> --}}
                    <li><a href="register"><i class="fa fa-user-o"></i> Registrar Usuarios</a></li> 
					<li class="divider"></li>
                            <li>
                                <a  href="{{ URL('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">&#xE8AC;</i> 
                                    Logout
                                </a>
                            </li>  
                            <form id="logout-form" action="{{ URL('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


				</ul>
			</li>
		</ul>
	</div>
</nav>

<CENTER><h1>USUARIOS</h1></CENTER>


<div class="container">

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Correo Validado</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Fecha de actualización</th>
            <th scope="col">Rol</th>
            <th scope="col">Accion</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($usuarios as $usuario)
            <td>{!! $usuario->nombre !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $usuario->email_verified_at !!}</td>
            <td>{!! $usuario->created_at !!}</td>
            <td>{!! $usuario->updated_at !!}</td>
            <td>{!! $usuario->id_role !!}</td>



            <td><a  href="{{ URL('editarUser',$usuario->id) }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form2').submit();"
                                class="btn btn-success btn-sm"
                                >Editar
            </a></td>



            <form id="logout-form2" action="{{ URL('editarUser',$usuario->id) }}" method="GET" class="d-none">
          
            </form>



            <td><button class="btn btn-danger btn-sm">BORRAR</button></td>
        
            
          </tr>

        </tbody>


        @endforeach

      </table>
</div>





</body>
</html>
{{--
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}

</script> --}}

