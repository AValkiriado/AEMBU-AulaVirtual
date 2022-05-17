<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>AEMBU Login</title>
	<link rel="stylesheet" href="assets/css/style.css">
	 <link rel="icon" type="image/x-icon" href="assets/img/redondito.png">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<html>

 <body class="bodyLogin">
<div class="pageWrapperLogin">
	<div class="login">
		<div class="titolLogin">
            <img src="assets/img/logotip.png">
        </div>
        <div class="formWrapper">
			<form method="post" action="loginar.php" name="login">
				<p style="color: red; text-align: center;"><?php echo $errorLogin ?></p>
				<div class="email">
					<label>Nom d'usuari:</label><br>
					<input type="text" name="username" required />
				</div>
				<div class="pwd">
					<label>Contrasenya:</label><br>
					<input type="password" name="password" required />
				</div>
				<div class="buttonLogin">
				<button type="submit" name="entrar" value="login" class="btn btn-info">Entrar</button>
				</div>
			</form>
		</div>
	</div>
</div>

