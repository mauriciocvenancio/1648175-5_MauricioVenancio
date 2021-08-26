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
           <div class="widget-wrap padding">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 sm-padding">
                            <div class="widget-content">
                                <a href="#"><img src="images/logo-light.png" alt="brand"></a>
                                <p>Building your own home is about desire, fantasy. But it’s achievable anyone can do it.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 sm-padding">
                            <div class="widget-content footer">
                                <h4>Company</h4>
                                <ul class="widget-links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Clients Reviews</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 sm-padding">
                            <div class="widget-content footer">
                                <h4>Headquaters</h4>
                                <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                                <span>Hello@teamXcel.net</span>
                                <span>(+123) 456 789 101</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 sm-padding">
                            <div class="widget-content footer">
                                <h4>Newslatter Subscription</h4>
                                <p>Subscribe and get 10% off from our <br>architecture company.</p>
                                <div class="subscribe-box clearfix">
                                    <div class="subscribe-form-wrap">
                                        <form action="#" class="subscribe-form">
                                            <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                            <button type="submit" class="submit-btn">Subscribe</button>
                                            <div id="subscribe-result">
                                                <p class="subscription-success"></p>
                                                <p class="subscription-error"></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section align-center">
                <div class="container">
                    <p>&copy; 2020 OrganZe Powered by ThemeEaster</p>
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
		<meta name="description" content="Organic Food &amp; Farming HTML Template">
        <meta name="author" content="ThemeEaster">
       
        <title>OrganZe | Organic Food &amp; Farming HTML Template</title>
        
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
	