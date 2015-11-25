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
                        <li class="active nav-item sr-only"><a href="index.php">Home</a></li>
                        <li class="nav-item"><a  href="https://github.com/aikerim/ConnectAid">Documentation</a></li>
                        <li class="nav-item"><a class="scrollto" href="form.php">Give</a></li>
                        <li class="nav-item"><a class="scrollto" href="search.php">Get</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            
            <div class="container col-md-12">
               <div class="form">
                   <input type="text">
               </div>
                
            </div>
            
            <ul class="meta list-inline">
                <li><a href="#" target="_blank"> View on GitHub </a></li>
                <li><a href="https://github.com/twbs/bootstrap" target="_blank">Full Documentation </a></li>
                <li>Created by <a href="" target="_blank">Connect Aid Team</a> at NAU</li>
            </ul><!--//meta-->
        </div><!--//container-->

    </section><!--//promo-->
    
    
    
    

   <?php include("includes/footer.php"); ?>
   

