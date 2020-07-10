<!DOCTYPE html>
<html lang="pt-br">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="">
	  <title>Email enviado</title>
	  <script src="js/vex.combined.js"></script>
	  <link rel="stylesheet" href="css/vex-theme-flat-attack.css" />
	  <link rel="stylesheet" href="css/vex.css" />
</head>
<body>

<?php
		date_default_timezone_set('America/Sao_Paulo');
		$arquivo = fopen("reg.txt", "a+");

		$cel	=	$_POST["cel"];
		$email	=	$_POST["email"];
		$mensagem	=	$_POST["mensagem"];
		$data = date('d/m/y');
		$hora = date('H:i:s');

		$conteudo	=	"\r\n$data \t$hora \t$email \t$cel \t$mensagem\r\n";

		$arquivo	= "reg.txt";

		if (!$abrir = fopen($arquivo, "a+")) {
				echo  "Erro abrindo arquivo ($arquivo)";
				exit;
		   }

		if (!fwrite($abrir, $conteudo)) {
			   print "Erro escrevendo no arquivo ($arquivo)";
			   exit;
		   }

		$mensagem = "Obrigado " . $email . ", sua mensagem foi enviada com sucesso!" ;

		fclose($abrir);
?>

<script type="text/javascript">
   alert( '<?php echo $mensagem ?>' );
    window.location.href = "http://localhost/site-rogerioweb";
</script>

</body>
</html>