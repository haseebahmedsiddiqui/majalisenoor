<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAJALISENOOR</title>
	
    <!-- Bootstrap css-->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
    <!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- Default css-->
    <link href="css/style.css" rel='stylesheet' type='text/css'>
    <!-- Font Awesome css-->
    <link href="css/font-awesome.css" rel='stylesheet' type='text/css'>
    <!-- Flexslider css-->
    <link href="css/flexslider.css"rel='stylesheet' type='text/css'>
    
  </head>
  <body>
  	<header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <a href="index.html" class="logo">
                        <img class="img-responsive" src="img/logo.png" alt="LOGO"/>
                    </a>
                </div>
                <div class="col-sm-10 col-xs-12">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
			</div>
        </div>
		<div class="navigation">
			<div class="container">
			<div class="row">
				<div class="col-sm-9 col-xs-12">
					<div class="navbar-header visible-xs">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#responsive_menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					  </button>
					  <a class="navbar-brand" href="index.html">Majlis Noor</a>
					</div>
					<div class="collapse navbar-collapse" id="responsive_menu">
					<nav>
						<ul class="menu">
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="#about-us">About Us</a></li>
							<li><a href="#">Live Bayaan</a></li>
							<li><a href="bayanat.html">Bayanaat</a></li>
							<li><a href="#">Shajra</a></li>
							<li><a href="books.html">Books</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
					</div>
						
				</div>
				<div class="col-sm-3 col-xs-12">
					<ul class="links">
						<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://chat.whatsapp.com/invite/61czHzncms864i06MYnKQc" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC6AHVpBvGgC6WztL3QQrAPg" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
    </header>
    
    <section class="slider">
    	<div class="flexslider banner-slide">
        	<ul class="slides">
            	<li><img src="img/banner-img.jpg" alt=""/></li>
                <li><img src="img/banner-img.jpg" alt=""/></li>
                <li><img src="img/banner-img.jpg" alt=""/></li>
                <li><img src="img/banner-img.jpg" alt=""/></li>
            </ul>
        </div>
    </section>
    
    <section class="about-us border">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-12 col-xs-12 text-center">
                	<h2 class="heading" id="about-us">About Us</h2>
       	 			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------ LIVE API ------------------------------------------------>
    <section class="live-bayaan border">
    	<div class="container">
        	<h2 class="heading">LIVE BAYAAN</h2>
        	<div class="row">
            	<div class="col-sm-offset-2 col-sm-8 col-xs-12 text-center">
                	
                    
                    
                  <?php


require_once('EmbedYoutubeLiveStreaming.php');

$channelId = "UC6AHVpBvGgC6WztL3QQrAPg";
$api_key = "AIzaSyBt5p4xw8OBJfVYgU26rebDTEzalgKI2q4";

$YouTubeLive = new EmbedYoutubeLiveStreaming($channelId,$api_key);

if(!$YouTubeLive->isLive)
{
	echo " <b>There is no live streaming right now!</b> <br><br>";
 //	echo "<pre><code>";
	//var_dump($YouTubeLive->objectResponse);
	// print_r($YouTubeLive->arrayResponse);
	//echo "</code></pre>";
}
else
{
	echo <<<EOT

<h2> {$YouTubeLive->live_video_title}</h2>
<br>{$YouTubeLive->live_video_description}<br>
<br>


EOT;

	// $YouTubeLive->setEmbedSizeByWidth(200);
	// $YouTubeLive->setEmbedSizeByHeight(200);
	// $YouTubeLive->embed_autoplay = false;

	echo $YouTubeLive->embedCode();
}
?>

                    
                    
                    
                    
                </div>
            </div>
        </div>	
    </section>
  <!--------------------------------------------------- VIDEOS ---------------------------------------------->  
    <section class="bayanat border">
    	<div class="container">
        	<h2 class="heading">Bayanat</h2>
        	<div class="row text-center">
            	<div class="flexslider bayanat-slide">
                	<ul class="slides">
                    	<li>
                        	<div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="vdo-widget">
                                    <div class="bayaan-vdo">
                                        <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                   
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!---------------------------------- types of bayanat ------------------------------>
            <div class="row text-center">
            	<div class="col-sm-4 col-xs-12">
                    <div class="vdo-widget">
                        <div class="bayaan-vdo">
                            <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="vdo-widget">
                        <div class="bayaan-vdo">
                            <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="vdo-widget">
                        <div class="bayaan-vdo">
                            <iframe width="225" height="127" src="https://www.youtube.com/embed/zBSNqa-ZOY8" frameborder="0" allowfullscreen></iframe>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
<!----------------------------------------------- Books ------------------------------------------------->
    <section class="books border">
    	<div class="container">
        	<h2 class="heading">Books</h2>
        	<div class="row">
                <div class="col-sm-offset-2 col-sm-3 col-xs-12 book-img">
                	<img src="img/books.png" alt="book"/>
                </div>
                <div class="col-sm-7 col-xs-12 book-text">
                	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
            </div>
            <div class="row text-center">
            	<div class="col-sm-3 col-xs-12 book-link">
                	<a href="http://minhajbook.kortechx.netdna-cdn.com/images-books/tasmia-tul-quran/tasmia-tul-quran_1.pdf">
                	<img src="img/img1.jpg" alt="book"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer Nulla consequat massa quis enim.</p>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-12 book-link">
                	<a href="http://minhajbook.kortechx.netdna-cdn.com/images-books/Lafz-Rabbul-Alamin/Lafz-Rabbul-Alamin_1.pdf">
                	<img src="img/img2.jpg" alt="book"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer Nulla consequat massa quis enim.</p>
                    </a>
                </div>
				<div class="col-sm-3 col-xs-12 book-link">
                	<a href="http://minhajbook.kortechx.netdna-cdn.com/images-books/Kanzul-Imaan_Funi-Hysiat/Kanzul-Imaan_Funi-Hysiat_1.pdf">
                	<img src="img/img3.jpg" alt="book"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer Nulla consequat massa quis enim.</p>
                    </a>
                </div>
				<div class="col-sm-3 col-xs-12 book-link">
                	<a href="http://minhajbook.kortechx.netdna-cdn.com/images-books/marif-ism-Allah/marif-ism-Allah_1.pdf">
                	<img src="img/img4.jpg" alt="book"/>
                        <p>Lorem ipsum dolor sit amet, consectetuer Nulla consequat massa quis enim.</p>
                    </a>
                </div>
                <a href="books.html" class="btn-more"><span>More Books</span><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    
  	<section class="shajra border">
    	<div class="container">
        	<h2 class="heading">Shajra</h2>
        </div>
    </section>
    
    <section class="contact-us">
    	<div class="container">
        	<h2 class="heading">Contact Us</h2>
        	<div class="row">
            	<div class="col-sm-12 col-xs-12">
                    <form role="" id="contact-form">
                    	<div class="row">
                        <div class="col-sm-4 col-xs-12 form-group">
                            <input class="form-control" placeholder="Name">
                        </div>
                        <div class="col-sm-5 col-xs-12 form-group">
                            <input class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-sm-3 col-xs-12">
                        	<button class="btn btn-subs bg-grey">SUBSCRIBE NOW</button>
                        </div>
                        </div>
                        
                    </form>
                    <ul class="socials">
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        	
        </div>
    </section>
    
    <footer class="bg-grey">
    	<div class="container">
        	<div class="row">
            	<p>© copyright 2017 . All rights reserved </p>
            </div>
        </div>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flexslider js-->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Default js-->
    <script src="js/custom.js"></script>
  </body>
</html>
