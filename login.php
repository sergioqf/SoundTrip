<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sound Trip</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css"
	href="bootstrap/css/bootstrap.min.css">


<style type="text/css">
body{
	padding-top: 5%;
}


.btn {
	background-color: #0E0D0D;
	color: #ffffff;
	font-weight: bold;
}

.btn:hover {
	background-color: #1C1C1C;
	color: #ffffff;
	font-weight: bold;
}

#imglogin {
	width: 100%;
	border: solid 1px;
}
</style>

</head>
<body>
	<div class="container">
		<div class="col-lg-4"></div>
		<div class="col-md-4">
			<div class="col-md-12">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<img id="imglogin" src="images/logotemporariaeditada.jpg"
						class="img-circle">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<form class="form" method="get">
				<div class="form-group">
					<label>Usuário:</label></span><input class="form-control"
						type="text" placeholder="Digite o nome de usuário" name="username">
				</div>
				<div class="form-group">
					<label>Senha</label> <input class="form-control" type="text"
						placeholder="Digite sua senha de acesso" name="password">

				</div>
				<input id="btnlogin" class="btn btn-block" type="submit" value="Entrar">
			</form>

		</div>
		<div class="col-lg-4"></div>
	</div>

</body>
</html>