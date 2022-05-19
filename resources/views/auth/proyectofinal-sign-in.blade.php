<head>
    <title> Registrarse </title>
    <script src="{{ asset('js\jquery-1.12.4.min.js')}}"></script>
    <link href="{{ asset('css\bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('js\bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\proyectofinal-signin.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="{{ asset('css\style.css')}}">
    

</head>


<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('register')}}">
                @csrf

                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-name"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-email"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo@ejemplo.com" name="email" id="email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-password"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-repassword"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirme la Contraseña" name="password_confirmation" id="password_confirmation">
					</div>
                    <div class="row align-items-center remember">
						<input type="checkbox">Acepto los terminos y condiciones
					</div>
					<div class="form-group">
						<input type="submit" value="Registrarse" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿Ya tienes una cuenta?<a href="{{ route('login') }}">Inicia sesion!</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>