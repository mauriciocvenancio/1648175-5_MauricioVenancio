<?php 

function Redirecionamento($pagina = 0){

switch ($pagina):
    case 1:
        require('pages/quem_somos.php');
        break;
    case 2:
       require('pages/contato.php');
        break;
    case 3:
        require('pages/produtos.php');
        break;
	case 4:
        require('pages/produtos_detalhes.php');
        break;
    default:
        require('pages/produtos.php');
endswitch;
}


function Topo(){
	
	$topo = '
		<header id="header" class="header-section">
            <div class="container">
                <nav class="navbar">
                    <a href="index.php?pag=3" class="navbar-brand">
                        <img class="logo-dark" src="images/logo-dark.png" alt="Saasbiz">
                    </a>
                    <div class="d-flex menu-wrap">
                       <div id="mainmenu" class="mainmenu">
                           <ul class="nav">
                               <li><a data-scroll class="nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a> 
                                </li>
                                <li><a href="index.php?pag=1">Quem Somos</a></li>
                                <li><a href="index.php?pag=2">Contato</a></li>
								<li><a href="index.php?pag=3">Produtos</a></li>	
                            </ul>
                       </div>
                    </div>
                </nav>
            </div>
		</header>
		';
	return $topo;
}



function Rodape(){

$rodape = '
 <footer class="widget-section">
            <div class="footer-section align-center">
                <div class="container">
                    <p>SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET | MAURICIO DA COSTA VENÂNCIO | 1648175-5</p>
                </div>
		    </div><!-- /.footer-section -->
</footer><!--/.widget-section-->
';

return $rodape;

}

function Head(){

$head =  '<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MAPA - PROGRAMAÇÃO BACK END I">
        <meta name="author" content="ThemeEaster">
       
        <title>MAPA - PROGRAMAÇÃO BACK END I</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Elegant Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Flat Icons CSS -->
        <link rel="stylesheet" href="css/food-icon.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!--Slick Slider-->
        <link rel="stylesheet" href="css/slick.css">
        <!--Slider CSS-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox/venobox.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>';
	
	return $head;
	
}

function Js(){
	$js = '
		<script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/jquery.slicknav.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/smooth-scroll.min.js"></script>
		<script src="js/jquery.isotope.v3.0.2.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/venobox.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/main.js"></script>
		';	
	return $js;
}


?>
	