<?php include("includes/head.php"); ?>

<body data-spy="scroll">
    
    <!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">            
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">ConnectAid</span>
                </a>
            </h1><!--//logo-->              
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                        <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a class="scrollto" href="#docs">Documentation</a></li>
                              <li class="nav-item"><a class="scrollto" href="form.php">Give</a></li>
                        <li class="nav-item"><a class="scrollto" href="/search.php">Get</a></li>
                        <li class="nav-item last"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">Connect<span class="highlight">Aid</span></h2>
            <p class="intro"> Platform where help is shared easily</p>
            <div class="btns">
                <a class="btn btn-cta-secondary" href="form.php">Give</a>
                <a class="btn btn-cta-primary" href="searchlist.php">Get</a>
            </div>
            <ul class="meta list-inline">
                <li><a href="#" target="_blank"> View on GitHub </a></li>
                <li><a href="https://github.com/twbs/bootstrap" target="_blank">Full Documentation </a></li>
                <li>Created by <a href="https://github.com/aikerim/connectaid" target="_blank">Connect Aid Team</a> at NAU</li>
            </ul><!--//meta-->
        </div><!--//container-->
        <div class="social-media">
            <div class="social-media-inner container text-center">
                <ul class="list-inline">
                    <li class="twitter-follow"><a href="https://twitter.com/aikyerim" class="twitter-follow-button" data-show-count="false">Follow @aikyerim</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-follow-->
                    <li class="twitter-tweet">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-tweet-->
                    <li class="facebook-like">
                         <div class="fb-like" data-href="http://themes.3rdwavemedia.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </li><!--//facebook-like-->
                    
                    <!--//
                    <li class="github-follow"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&type=follow&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe></li>
                    -->
                </ul>
            </div>
        </div>
    </section><!--//promo-->
    
    <!-- ******ABOUT****** --> 
    <section id="about" class="about section">
        <div class="container">
            <h2 class="title text-center">What is ConnectAid?</h2>
            <p class="intro text-center"><b>ConnectAid is a non-profit online platform that makes specific and flexible volunteering possible.</b></p>
            <div class="row">
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Volunteer</h3>
                        <p>Volunteer and get volunteers in one click.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Anytime</h3>
                        <p>Maximize your satisfaction about your schedule.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-crosshairs"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Anywhere</h3>
                        <p> Volunteer locally with your specific offers.</p>
                    </div><!--//content-->
                </div><!--//item-->           
                <div class="clearfix visible-md"></div>    
              <!--//item-->                
            <!--//item-->
                <!--//item-->               
            </div><!--//row-->            
        </div><!--//container-->
    </section><!--//about-->
    
    <!-- ******FEATURES****** --> 
    <section id="features" class="features section">
        <div class="container text-center">
            <h2 class="title">Choose your: </h2>
            <ul class="feature-list list-unstyled">
                <li><i class="fa fa-check"></i> role </li>
                <li><i class="fa fa-check"></i> location </li>
                <li><i class="fa fa-check"></i> time </li>
                <li><i class="fa fa-check"></i> specification </li>
                <li><i class="fa fa-check"></i> duration</li>
                <li><i class="fa fa-check"></i> get paired</li>
                <li><i class="fa fa-check"></i> ENJOY VOLUNTEERING! </li>
            </ul>
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******DOCS****** --> 
    <section id="docs" class="docs section">
        <div class="container">
            <div class="docs-inner">
                   
           <!--//block-->
            
            <!--//block-->
            
          <!--//block-->   
            <div class="block">
                <h3 class="sub-title text-center">Full Documentation</h3>
                <p>If your documentation is very long you can host the full docs page (including FAQ etc) on GitHub and provide a Call to Action button below to direct users there.</p>
                <p class="text-center">
                    <a class="btn btn-cta-primary" href="https://github.com/aikerim/connectaid" target="_blank">More on GitHub</a>
                </p>
            </div><!--//block-->
            
            </div><!--//docs-inner-->         
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******LICENSE****** --> 
   
    
    <!-- ******CONTACT****** --> 
    <section id="contact" class="contact section has-pattern">
        <div class="container">
            <div class="contact-inner">
                <h2 class="title  text-center">Contact</h2>
            
                <div class="author-message">                      
                    <div class="profile">
                        <img class="img-responsive" src="assets/images/volunteer.jpg" alt="" />
                    </div><!--//profile-->
                    <div class="speech-bubble">
                        <h3 class="sub-title">Welcome to ConnectAid!.</h3>
                      
                        <p>Our Mission is to make flexible and instant volunteering possible. <br><br> Beta version enables volunteers to register and people who need help to get the list of volunteers. 
                            <br><br> Gamma version strikes to automatically match volunteers and people who need. </p>
                    
                        <div class="source">
                            <span class="name"><a href="https://github.com/aikerim/connectaid" target="_blank">ConnectAid</a></span>
                            <br />
                            <span class="title">Aygerim Sauletkhan</span>
                            <br>
                            <span class = "title "> Omer Habedy</span>
                        </div><!--//source-->
                    </div><!--//speech-bubble-->                        
                </div><!--//author-message-->
                <div class="clearfix"></div>
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li><a href="https://twitter.com/aikyerim" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://linkedin.com/in/aikerim"><i class="fa fa-linkedin"></i></a></li>
                          
                        <li class="last"><a href="mailto: asaulyetkhan@na.edu"><i class="fa fa-envelope"></i></a></li>              
                    </ul>
                </div><!--//info-->
            </div><!--//contact-inner-->
        </div><!--//container-->
    </section><!--//contact-->  
   <?php include("includes/footer.php"); ?>
   

