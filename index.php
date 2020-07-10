
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Do que sua empresa precisa? Um site para divulgar seus produtos? Planilhas para controles? Propaganda impressa? Temos tudo isso e muito mais.">
    <meta name="keywords" content="websites, excel, mídia impressa, marketing visual, marketing digital, planilhas eletrônicas, redes sociais">
    <meta name="robots" content="">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Rogério Furquim da Fonseca">
	<link rel="shortcut icon" href="img/favicon.png" />
    <title></title>

    <!-- pure -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css" />
    <link rel="stylesheet" href="css/pure-min.css">
    <link rel="stylesheet" href="css/grids-responsive-min.css">
	
    <!--	meu script-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script src="js/meuScript.js"></script>
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.js"></script>


    <!--	meu css -->
    <link rel="stylesheet" href="css/style.css">
	
    <!-- fonts google -->
	<link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Permanent+Marker&family=Roboto+Slab:wght@100&family=Zilla+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
	
	<!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- icons -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-lg-1-4">
		
        <div class="header">
            <h3 class="brand-tagline topo" id="irtopo" ><i class="fa fa-chevron-up link-menu" aria-hidden="true"></i></h3>
            <h3 class="brand-tagline link-menu" id="top">Marketing Digital</h3>
			<h3 class="brand-tagline link-menu" id="idImp">Mídia Impressa</h3>
            <h3 class="brand-tagline link-menu" id="idPlan">Planilhas Eletrônicas</h3>
            <h3 class="brand-tagline rodape" id="irroda"><i class="fa fa-chevron-down link-menu" aria-hidden="true"></i></h3>
	    </div>
    </div>

    <div class="content pure-u-1 pure-u-lg-3-4" style="padding-top: 0px !important">
		    <?php include('header.php') ?>
        <div class="posts">
			<h1 class="content-subhead"><i class="fa fa-play" aria-hidden="true"></i>Meus serviços</h1>
			<?php include('websites.php') ?>
			<?php include('midias-impressas.php') ?>
			<?php include('planilhas.php') ?>
		</div>
			<?php include('footer.php') ?>
    </div>
	
</div>

	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>