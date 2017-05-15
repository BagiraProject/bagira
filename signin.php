<?php
	require_once 'config.inc.php';
        require_once 'inc/html/html_basic.php';
	init();
	if(!isset($_GET['email'])){
		$fieldval = "";
	} else {
		$em = htmlspecialchars(str_replace(",",".",$_GET['email']));
		if(preg_match(EMAIL_REGEX,$em)){
			$fieldval = "readonly value = \"".$em."\"";
			$er=false;
		} else {
			$fieldval = "";
			$er="Предоставленный в запросе адрес Email <strong>$em</strong> не является корректным";
		}
	}
	?>
<?=doctype()?>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://cdn.handle.rf.gd/bagira/icons/normal_google.png">
		<title>Багира ― Вход</title>
		<!-- Bootstrap core CSS -->
		<link id="themeLink" href="<?=ROOT?>/css/bootstrap-lumen.min.css" rel="stylesheet">
		<link href="<?=ROOT?>/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=ROOT?>/css/toastr.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="<?=ROOT?>/css/signin.css" rel="stylesheet">
		<link href="<?=ROOT?>/css/general.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Багира</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<?php
				if(@$er){
					echo <<<_ER
					<div class="alert alert-danger alert-dismissible" id="error" role="alert">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 <strong>Ошибка!</strong> $er
				</div>
_ER;
				}
				?>
			<form class="form-signin">
				<div class="media-left">
					<h2 class="form-signin-heading">Вход</h2>
				</div>
				<div class="row">
					<div id="emailErrorBox">
						<label id="emailError" class="control-label" for="inputEmail">Неправильно введен Email</label>
						<label for="inputEmail" class="sr-only">Email</label>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email" <?=$fieldval?> required autofocus>
					</div>
					<label for="inputPassword" class="sr-only">Пароль</label>
					<div id="passwordErrorBox">
						<label id="passwordError" class="control-label" for="inputPassword">Неправильно введен пароль</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
					</div>
					<button id="formSubmit" class="btn btn-primary btn-block" type="button" data-loading-text="Загрузка...">Вход <i class="fa fa-sign-in"></i></button>
					<div id="rememberCheck" class="checkbox checkbox-primary">
						<input id="rememberCheck1" value="1" type="checkbox">
						<label for="rememberCheck1">Запомнить меня</label>
					</div>
				</div>
				<div class="row">
				</div>
			</form>
		</div>
		<!-- /container -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?=ROOT?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=ROOT?>/js/toastr.min.js"></script>
		<script type="text/javascript" src="<?=ROOT?>/js/general.js"></script>
		<script type="text/javascript" src="<?=ROOT?>/js/signin.js"></script>
	</body>
</html>
