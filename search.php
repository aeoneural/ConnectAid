<?php include("includes/head.php"); ?>
<?php require_once ('includes/aid_db.php'); ?>

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
                <a class="scrollto" href="index.php">
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
                        <li class="nav-item"><a class="scrollto" href="form.php">Become Volunteer</a></li>
                        <li class="nav-item"><a class="scrollto" href="search.php">Find Volunteer</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h1 class="valuneteer"><i class="fa fa-heart-o"></i> Find Your Desired Volunteer</h1>
             
          
           
<?php
$query = "SELECT * FROM valunteer";
$select_valunteer = mysqli_query($connection, $query);

    if(!$select_valunteer){
        die("Failed " . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($select_valunteer)){
        $valunId = $row['valun_id'];
        $valunName = $row['valun_name'];
        $valunEmail = $row['valun_email'];
        $valunActivity = $row['valun_activity'];
        $date = $row['valun_date'];
        $valunDate = date("M d, Y", strtotime($date)); 
        $valunDuration = $row['valun_duration'];
        $valunAbout = $row['valun_about'];
    ?>

<div class="valunteerWrapper">
    <div class="valunteerName trans three"><?php echo $valunName; ?>  <span><i class="fa fa-heart-o"></i> Volunteer</span> </div>

    <div class="valunteerAbout trans one"><?php echo $valunAbout; ?>
        <div class="contactMe"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $valunEmail; ?>">Contact Me: <?php echo $valunEmail; ?></a></div>
    </div>
    <div class="valunteerInfo trans three">
        <div class="valuneerStatus">Activity:<span> <?php echo $valunActivity; ?></span>  <i class="fa fa-bar-chart"></i></div>
        <div class="valuneerStatus">On: <span> <?php echo $valunDate; ?></span>   <i class="fa fa-calendar-o"></i></div>
        <div class="valuneerStatus">For: <span> <?php echo $valunDuration; ?></span> <i class="fa fa-clock-o"></i></div>
    </div>
    
</div>
            
    <?php } ?>
            

            <ul class="meta list-inline">
                <li><a href="#" target="_blank"> View on GitHub </a></li>
                <li><a href="https://github.com/twbs/bootstrap" target="_blank">Full Documentation </a></li>
                <li>Created by <a href="" target="_blank">Connect Aid Team</a> at NAU</li>
            </ul><!--//meta-->
        </div><!--//container-->

    </section><!--//promo-->
    

   <?php include("includes/footer.php"); ?>