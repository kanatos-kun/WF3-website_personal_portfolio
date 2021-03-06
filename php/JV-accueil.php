<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/framework/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/template/jv-style.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jvScript.js"></script>
	<title>kanatos - Jeux-vidéo</title>
</head>
<body>
<!--************************************************************************************
								^navTop
*************************************************************************************-->
    <nav class="navbar navbar-default navTop">
          <div class="hidden-xs hidden-sm col-md-3"></div>
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="media/images/firefox_logo_redim.png" alt="logo firefox"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">ACCUEIL<span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GAME<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Game 01</a></li>
                <li><a href="#">Game 02</a></li>
                <li><a href="#">Game 03</a></li>
                <li><a href="#">Game 04</a></li>
              </ul>
            </li>
            <li><a href="#">ARTICLE</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>

          <form class="navbar-form navbar-left hidden-xs hidden-sm">
            <div class="form-group barreRecherche">
              <input type="text" class="form-control barreRecherche" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
	<main class="container">
	
<!--************************************************************ 
			^twitter
*************************************************************-->
	    <div class="twitter-position">
			<a class="twitter-timeline" data-width="300" data-height="600" href="https://twitter.com/geoffreydu891">Tweets by geoffreydu891</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
<!--************************************************************ 
			^section1 - Carousel + thumbnail
*************************************************************-->
	    <section class="row section1">
	      <div class="col-md-12">
			<div class="flexslider">
			  <ul class="slides">
			    <li>
			      <img src="media/images/cover1-1066x472.jpg" />
			      <div class="flex-caption hidden-xs hidden-sm">
			      		<h3>Game 1</h3>
			      		<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.
			      		</p>
			      </div>
			    </li>
			    <li>
			      <img src="media/images/cover2-1066x472.jpg" />
			      <div class="flex-caption hidden-xs hidden-sm">
			      		<h3>Game 2</h3>
			      		<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.
			      		</p>
			      </div>
			    </li>
			    <li>
			      <img src="media/images/cover3-1066x472.jpg" />
			      <div class="flex-caption hidden-xs hidden-sm">
			      		<h3>Game 3</h3>
			      		<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.
			      		</p>
			      </div>
			    </li>
			    <li>
			      <img src="media/images/cover4-1066x472.jpg" />
			      <div class="flex-caption hidden-xs hidden-sm">
			      		<h3>Game 4</h3>
			      		<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.
			      		</p>
			      </div>
			    </li>
			  </ul>
			</div>
	      </div><!--/.col-md-12-->
		      	<figure class="col-md-3 col-sm-6">
		      			<div class="image-container">
			      			<img src="media/images/thumbnail1-240x106.jpg" class="image"/>
				      		<div class="text-overlay">
					      		<h3 class="text">Game1</h3>
				      		</div>
		      			</div>
		      		<figcaption>
			      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.</p>
		      		</figcaption>
		      	</figure><!--./col-md-3-->
		      	<figure class="col-md-3 col-sm-6">
		      			<div class="image-container">
			      			<img src="media/images/thumbnail2-240x106.jpg" class="image"/>
				      		<div class="text-overlay">
					      		<h3 class="text">Game2</h3>
				      		</div>
		      			</div>
		      		<figcaption>
		      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.</p>
		      		</figcaption>
		      	</figure><!--./col-md-3-->
		      	<figure class="col-md-3 col-sm-6">
		      			<div class="image-container">
			      			<img src="media/images/thumbnail3-240x106.jpg" class="image"/>
				      		<div class="text-overlay">
					      		<h3 class="text">Game3</h3>
				      		</div>
		      			</div>
		      		<figcaption>
		      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.</p>
		      		</figcaption>
		      	</figure><!--./col-md-3-->
		      	<figure class="col-md-3 col-sm-6">
		      			<div class="image-container">
			      			<img src="media/images/thumbnail4-240x106.jpg" class="image"/>
				      		<div class="text-overlay">
					      		<h3 class="text">Game4</h3>
				      		</div>
		      			</div>
		      		<figcaption>
		      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at mattis neque, eu condimentum arcu.</p>
		      		</figcaption>
		      	</figure><!--./col-md-3-->
	    </section><!-- /.row section1-->
	    <section class="row section2">
	    	<h2 class="col-md-12">Latest news</h2>
<!--************************************************************ 
			^section2 - Flux d'actualité d'article
*************************************************************-->
	    	<article class="col-md-6 col-sm-6">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="media/images/img1-150x150.png" alt="image">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">Article 1</h4></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis tempor sem, non lacinia arcu. </p>
				  </div>
				</div>
	    	</article>
	    	<article class="col-md-6 col-sm-6">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="media/images/img2-150x150.png" alt="image">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">Article 2</h4></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis tempor sem, non lacinia arcu. </p>
				  </div>
				</div>
	    	</article>
	    	<article class="col-md-6 col-sm-6">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="media/images/img3-150x150.png" alt="image">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">Article 3</h4></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis tempor sem, non lacinia arcu. </p>
				  </div>
				</div>
	    	</article>
	    	<article class="col-md-6 col-sm-6">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="media/images/img4-150x150.png" alt="image">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">Article 4</h4></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis tempor sem, non lacinia arcu. </p>
				  </div>
				</div>
	    	</article>
	    	<article class="col-md-6 col-sm-6">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="media/images/img5-150x150.png" alt="image">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">Article 5</h4></a>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis tempor sem, non lacinia arcu. </p>
				  </div>
				</div>
	    	</article>
	    </section><!--/.row section2-->
	</main><!--./container-->
<!--************************************************************ 
			^footer
*************************************************************-->
	    <footer class="container-fluid">
	    	<div class="container">
	    		<div class="row">
	    			<p class="col-md-6 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu faucibus massa. Mauris volutpat porta est in pharetra. Aliquam eget augue id lorem porttitor bibendum id sit amet mi. Sed sagittis lacus quis magna viverra rhoncus. Curabitur condimentum mollis arcu eleifend vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque ultricies ante in turpis laoreet, vitae sollicitudin est consequat. </p>
					<p class="col-md-6 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu faucibus massa. Mauris volutpat porta est in pharetra. Aliquam eget augue id lorem porttitor bibendum id sit amet mi. Sed sagittis lacus quis magna viverra rhoncus. Curabitur condimentum mollis arcu eleifend vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque ultricies ante in turpis laoreet, vitae sollicitudin est consequat. </p>
	    		</div>
	    	</div>
	    </footer>
</body><!--/.container-fluid-->
</html>