<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato | Big Trips</title>
<link href="img/logo.jpg" rel="Icon" type="image/jpg" hreflang="pt-pt"/>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">

		<!-- header -->
		<?php
			include("header.php")
		?>
		<!-- fim header -->

		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<article id="post-39" class="post-39 page type-page status-publish hentry">
				<header class="entry-header">
				<h1 class="entry-title">Contato</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
					<!-- BEGIN MAP -->
					<!-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
					<div style='overflow:hidden;height:380px;width:100%;'>
					<div id='gmap_canvas' style='height:380px;width:100%;'></div>
					<div>embed google maps</a></div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div>
					<p><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(3.4000221,-76.387969),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(3.4000221,-76.387969)});infowindow = new google.maps.InfoWindow({content:'<strong>Jane Photography</strong><br />Florida Beach<br />'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> -->
					<!-- END MAP -->
					<div class="wpcmsdev-columns">
						<div class="column column-width-two-thirds">
							<h4>E-mail</h4>
							<form class="wpcf7" method="post" action="contact.php" id="contactform">
								<div class="form">
									<p><input type="text" name="name" placeholder="Nome *"></p>
									<p><input type="text" name="email" placeholder="E-mail *"></p>
									<p><textarea name="comment" rows="3" placeholder="Mensagem *"></textarea></p>
									<input type="submit" id="submit" class="clearfix btn" value="Enviar">
								</div>
							</form>
							<div class="done">
								Mensagem enviada com sucesso Obrigado!
							</div>
						</div>
						<div class="column column-width-one-third">
							<h4>Telefone</h4>
							<p>
								<span style="font-weight:bold">Mauricio Inácio</span><br>
								(11)97395-3703<br>
							</p>
							<p>
								Segunda a Sexta: 09h00 às 17h00<br>
								Sábado: 10h00 às 14h00<br>
								Domingo: Fechado
							</p>
						</div>
					</div>
				</div>
				<!-- .entry-content -->
				</article>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->

	<!-- footer -->
	<?php
	include("footer.php")
	?>
	<!-- fim footer -->

</div>
<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/validate.js'></script>
</body>
</html>
