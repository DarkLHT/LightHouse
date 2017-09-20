<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Light House Technology</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        
        <!-- Flexslider -->
        <link rel="stylesheet" href="assets/css/flexslider.css">
        
        <!-- Owl -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      
        <!--  loader  -->
        <div id="myloader">
            <div class="loader">
                <div class="grid">
                    <div class="cube cube1"></div>
                    <div class="cube cube2"></div>
                    <div class="cube cube3"></div>
                    <div class="cube cube4"></div>
                    <div class="cube cube5"></div>
                    <div class="cube cube6"></div>
                    <div class="cube cube7"></div>
                    <div class="cube cube8"></div>
                    <div class="cube cube9"></div>
                </div>
            </div>
        </div>
        
        <!--  Header & Menu  -->
        <header id="header">
            <div class="top-nav">
                <!--  Header Logo  -->
                 <div id="logo">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="normal" alt="logo">
                        <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                    </a>
                </div>
                <!--  END Header Logo  -->
                <div class="secondary-menu">
                    <ul>
                        <li class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="maito:info@LightHouse.com">info@lighthouse.com</a></li>
                        <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+212 614-669052</li>
                        <li class="lang">
                            <span class="current"><a href="#">FR</a></span>
                        </li>
                        <!-- Search Icon -->
                        <li class="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <!--  Classic menu, responsive menu classic  -->
                <div id="menu-classic">
                    <div class="menu-holder">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="active-item">Accueil</a>                                
                            </li>
                            <li>
                                <a href="principes.php">Nos principes </a>
                            </li>
                            <li>
                                <a href="services.php">Services & Produits</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!--  END Classic menu, responsive menu classic  -->
                <!--  Button for Responsive Menu Classic  -->
                <div id="menu-responsive-classic">
                    <div class="menu-button">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                    </div>
                </div>
                <!--  END Button for Responsive Menu Classic  -->
                <div class="secondary-menu-mobile">
                    <ul>
                        <li class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="maito:info@LightHouse.com">info@lighthouse.com</a></li>
                        <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+212 661-327752</li>
                        <li class="lang">
                            <span class="current"><a href="#">FR</a></span>
                        </li>
                        <!-- Search Icon -->
                        <li class="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="header-searchform">
                <form class="search-form">
                    <div class="form-input">
                        <input type="text" placeholder="Rechercher...">
                        <span class="form-button-close">
                            <button type="button"><i class="material-icons">close</i></button>
                        </span>
                        <span class="form-button">
                            <button type="button">Chercher</button>
                        </span>
                    </div>
                </form>
            </div>
        </header>
        <!--  END Header & Menu  -->
            
        <!--  Main Wrap  -->
        <div id="main-wrap">
            <!--  Page Content  -->
            <div id="page-content" class="header-static">
                <!--  Slider  -->
                <div id="flexslider-nav" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/conseil.jpg)">
                            <div class="text center">
                                <h1 class="heading center white margin-bottom-small flex-animation">Accompagnement & Conseil technique</h1>
                                <p class="heading white center margin-bottom flex-animation"></p>
                                <div class="padding-onlytop-md flex-animation">                                    
                                    <a href="services.php" class="btn-alt small shadow">Lire la suite</a>
                                </div>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <li style="background-image:url(assets/img/ApplicationBureau.jpg)">
                            <div class="text center">
                                <h1 class="heading center white margin-bottom-small flex-animation no-opacity">Création des sites web</h1>
                                <div class="padding-onlytop-md flex-animation">                                    
                                    <a href="services.php" class="btn-alt small shadow">Lire la suite</a>
                                </div>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <li style="background-image:url(assets/img/CreationSitesWeb.jpg)">
                            <div class="text center">
                                <h1 class="heading center white margin-bottom-small flex-animation no-opacity">Développement logiciel</h1>
                                <p class="heading white center margin-bottom flex-animation no-opacity"></p>
                                <div class="padding-onlytop-md flex-animation">                                    
                                    <a href="services.php" class="btn-alt small shadow">Lire la suite</a>
                                </div>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <li style="background-image:url(assets/img/Design.jpg)">
                            <div class="text center">
                                <h1 class="heading center white margin-bottom-small flex-animation no-opacity">Infographie & Design</h1>
                                
                                <div class="padding-onlytop-md flex-animation">
                                    
                                    <a href="services.php" class="btn-alt small shadow">Lire la suite</a>
                                </div>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                    <div class="slider-navigation">
                        <a href="#" class="flex-prev"><i class="material-icons">keyboard_arrow_left</i></a>
                        <div class="slider-controls-container"></div>
                        <a href="#" class="flex-next"><i class="material-icons">keyboard_arrow_right</i></a>
                    </div>
                    <div id="godown">
                        <a href="#home-wrap" class="btn-down">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
                    <!-- Abous us -->
                    <div class="container">
                        <!-- Section Image -->
                        <div>
                            <div class="col-md-6 padding-leftright-null">
                                <div data-responsive="parent-height" data-responsive-id="about" class="text">
                                    <h2 class="margin-bottom-null left">À propos de nous</h2>
                                    <div class="padding-onlytop-sm">
                                        <p class="margin-bottom grey"><b>Light House Technology</b> est une société de conception web, externalisation de développement d’applications windows, web et mobile spécifiques, spécialisée dans l'intégration d'applications de gestion innovantes dans l'entreprise, les solutions dédiées à l'industrie et l'outsourcing stratégique.<br/>
                                        - Nous mettons en place des solutions technologiques personnalisées et adaptées à nos clients. <br/>
                                        - Notre expérience combinée en informatique et en matière de gestion nous permet d'offrir à nos clients un ensemble de services synergiques de présence et de promotion sur internet. 
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-leftright-null" style="margin-bottom: 20px">
                                <div data-responsive="child-height" data-responsive-id="about" class="section-image height-auto-sm">
                                   <picture class="section right" >
                                       <img src="assets/img/tablet.png" class="img-responsive" alt="">
                                   </picture>
                               </div>
                            </div>
                        </div>
                        <!-- END Section Image -->
                    </div>
                    <!-- Services -->
                    <div class="light-background"> 
                        <div class="container padding-lg">
                           
                            <!-- END Services -->
							<div class="col-md-12 padding-leftright-null text-center">
                                    <h2 class="margin-bottom-small left">Services</h2>
                                </div>
							<section id="news" class="page">
							
                            <div class="news-items equal three-columns">
							
                                <!-- Single News -->
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news1.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Accompagnement & conseil technique<b></h3>
                                         
                                        </div>
                                        <a href="services.php#faisabilité" class="link"></a>
                                    </article>
                                </div>
                                <!-- END Single News -->
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news2.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Développement logiciel<br/><br/><b></h3>
                                            
                                        </div>
                                        <a href="services.php#développementLogiciel" class="link"></a>
                                    </article>
                                </div>
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news3.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Développement d'application Web<b></h3>
                                            
                                        </div>
                                        <a href="services.php#développementWeb" class="link"></a>
                                    </article>
                                </div>
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news4.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Développement sites Web<br/><br/></b></h3>
                                           
                                        </div>
                                        <a href="services.php#développementSiteWeb" class="link"></a>
                                    </article>
                                </div>
                                
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news5.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Héberegement Web <br/><br/><b></h3>
                                            
                                        </div>
                                        <a href="services.php#développementSiteWeb" class="link"></a>
                                    </article>
                                </div>
                                <div class="single-news one-item">
                                    <article>
                                        <img src="assets/img/news6.jpg" alt="">
                                        <div class="content">
                                            <h3><b>Infographie & Design <br/><br/><b></h3>
                                            
                                        </div>
                                        <a href="services.php#infographieDesign" class="link"></a>
                                    </article>
                                </div>
                                
                            </div>
                        </section>
							
                        </div>
                    </div>
                    <!-- END Services -->
                   
                    
                    
                  
                </div>
            </div>
            <!--  END Page Content -->
        </div>
        <!--  Main Wrap  -->
        
        

        <!--  Footer  -->
        <footer>
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-3 text">
                        <div class="logo">
                            <img src="assets/img/logo_white.png" class="normal" alt="logo">
                            <img src="assets/img/logo_white@2x.png" class="retina" alt="logo">
                        </div>
                        <p>Société de conception web, externalisation de développement d’applications windows, web et mobile.</p>
                        <div>
                            <ul class="social">
                                <li>Trouvez-nous sur :</li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   <div class="col-md-3 text small">
                        <h4 class="heading white margin-bottom-small weight-300">Notre Bureau</h4>
                        <p>LightHouse Technology <br>
                            61 Avenue Lalla Yacout Mustapha El Maani,
                            Centre Commercial Riad N°85 2éme Etage Casablanca, Maroc<br>
                            Lun. - Ven., 9 a.m. - 6.00 p.m.</p>
                    </div>
                    <div class="col-md-2 text small">
                        <h4 class="heading white margin-bottom-small weight-300">Liens Importants</h4>
                       <ul class="info">
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="principes.php">Nos principes</a></li>
                            <li><a href="services.php">Services & Produits</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text">
                        <h4 class="heading white margin-bottom-small weight-300">Nouveaux Abonnés</h4>
                        <p>Abonnez-vous à notre newsletter pour recevoir toutes nos nouvelles dans votre boîte de réception.</p>
                        <div id="newsletter-form">
                            <form class="search-form">
                                <div class="form-input">
                                    <input type="text" placeholder="Votre Adresse Courriel">
                                    <span class="form-button">
                                        <button type="button">S'inscrire</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="copy">
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-6 text">
                        <p>©2017 <a href="#">LightHouse Technology</a>. All rights reserved. </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--  END Footer. Class fixed for fixed footer  -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- All js library -->
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/smooth.scroll.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.scrolly.js"></script>
        <script src="assets/js/plugins-scroll.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>