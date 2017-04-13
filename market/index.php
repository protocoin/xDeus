<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>XDMarket</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/st.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script>
	/* FIX SCROLL NAV COLOR */
	$(document).ready(function(){       
		var scroll_start = 0;
		var startchange = $('#startchange');
		var offset = startchange.offset();
		if (startchange.length){
			$(document).scroll(function() { 
				scroll_start = $(this).scrollTop();
			if(scroll_start > offset.top) {
			$(".navbar-default").css('background-color', '#111');
			} else {
				$('.navbar-default').css('background-color', 'transparent');
			}
			});
		}
	});
	</script>
	<script>
	/* PROGRESIVE SCROLL */
	$(document).ready(function () {
        $('a').click(function(e){
		    e.preventDefault();
		    $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
        });
    });
	</script>
</head>

<body>
	<?php
		if (!$cn = mysql_connect('', '', '')) {
			echo 'No pudo conectarse a mysql';
			exit;
		}

		if (!mysql_select_db('', $cn)) {
			echo 'No pudo seleccionar la base de datos';
			exit;
		}
	?>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll fix-color" href="#page-top">
                XDMARKET
                </a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#contact">CONTACTO</a></li>
				<li><a href="/market.html">MARKET</a></li>
				<li><a href="/login.php">LOGIN</a></li>
			</ul>
		</div>
		</div>
    </nav>
	
	<header id="page-top" class="head-bg">
		<div class="head-content">
			<div class="head-style startchange">

			</div>
			<img class="img-responsive center-block" src="img/logoc.png">
		</div>
		
	</header>
	<!-- FIX SCROLL NAV COLOR -->
	<div class="spacer"></div>
	<p id="startchange"></p>
	
	<!-- SECTION ABOUT -->
	<section id="about" class="sec-about">
		<div class="about-detail">
            
                <h2 class="heading-2"><i class="fa fa-3x fa-bar-chart"></i><br>El trading nunca fue tan sencillo</h2>
                <hr class="separator">
				<p class="text-ab">
                        XDMarket ofrece al usuario un sistema seguro de compra 
						y venta de xDeus, una criptomoneda vanguardista que basa 
						su valor en terrenos.
						XDMarket garantiza siempre un valor justo para xDeus en 
						todo momento, asi como seguridad en cada transacción gracias 
						a su cifrado SSL.
						Ya seas un pequeño o gran inversor, un usuario habitual de 
						las criptomonedas o un completo desconocido de las mismas, 
						XDMarket se adapta a ti	con una interfaz limpia y clara.
                </p>
        </div>
	
	
	</section>
	
	<!-- SECTION LIVE MARKET -->
    <section class="sec-live">
		<div class="live-left">
			<h2 class="heading-2"><br>Valor seguro</h2>
                <hr class="separator">
				<p class="text-ab">
                        El valor de XDEUS esta ligado al valor de las tierras. 
						Desde XDMarket controlamos que el valor de dichas tierras 
						se vea reflejado correctamente, cuidando al maximo detalles 
						como la revalorizacion anual de los terrenos y ofreciendo 
						siempre el mejor precio de mercado para cada XDeus. 
                </p>
		</div>
		<?php
			$lv = 'SELECT lastvalue FROM values';
			$lastvalue = mysql_query($lv);
			$bv = 'SELECT lastvalue FROM values';
			$buyvolume = mysql_query($bv);
			$sv = 'SELECT lastvalue FROM values';
			$sellvolume = mysql_query($sv);
		?>
			
		<div class="live-right">
			<h2 class="heading-2"><br>Datos en vivo</h2>
			<hr class="separator">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>Ultimo precio</th>
						<th>Volumen de compra</th>
						<th>Volumen de venta</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $lastvalue; ?></td>
						<td><?php echo $buyvolume; ?></td>
						<td><?php echo $sellvolume;?></td>
					</tr>
			</table>
		</div>
	</section>
	
	<!-- SECTION FOOTER -->
	<section id="contact" class="sec-footer">
		<img class="img-responsive center-block" src="img/logoc.png">
		<div class="foo-center">	
            <ul class="list-inline">
                <li>
                    <a href="https://twitter.com/"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                </li>
                <li>
                    <a href="https://facebook.com/"><i class="fa fa-facebook fa-2x  fa-fw"></i></a>
                </li>
                <li>
                    <a href="mailto://"><i class="fa fa-envelope-o fa-2x  fa-fw"></i></a>
                </li>
            </ul>
			<br>
            <p>©2017 XDEUS.ORG</p>
		</div>
	</section>

</html>
