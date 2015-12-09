<?php include("includes/head.php"); ?>
<?php require_once("includes/aid_db.php"); ?>

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




<?php

if(isset($_POST['submit'])){
    $valunName = $_POST['name'];
    $valunEmail = $_POST['email'];
    $valunAbout = $_POST['about'];
    $valunDate = $_POST['date'];
    $activity = $_POST['activity'];
    $duration = $_POST['duration'];
    
    $query = "INSERT INTO valunteer(valun_name, valun_email, valun_about, valun_activity, valun_duration, valun_date)";
    $query .= "VALUES('{$valunName}', '{$valunEmail}', '{$valunAbout}', '{$activity}', '{$duration}', '{$valunDate}')";
    
    $volunteerInfo = mysqli_query($connection, $query);
        if(!$volunteerInfo){
            die("Failed " . mysqli_error($connection));
        }
    
    echo "<div class='formMessage trans two'> Your information has been successfully submitted, Thank You.</div>";
    } 

?>










<form method="post">
    <fieldset class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required id="name" placeholder="Enter Name">
    </fieldset>

    <fieldset class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" class="form-control" required id="email" placeholder="Enter Email">
    </fieldset>
   
    <fieldset class="form-group">
        <label for="exampleSelect1" >Select Your Activity!</label>
        <select class="form-control" name="activity" required id="exampleSelect1">
          <option></option>
          <option value="Walking">Walking</option>
          <option value="Reading">Reading</option>
          <option value="Cleaning">Cleaning</option>
          <option value="Grocery">Grocery</option>
          <option value="Driving">Driving</option>
          <option value="Cooking">Cooking</option>
        </select>
    </fieldset>

    <fieldset class="form-group">
        <label for="entry_date">Date of Voluntary:</label>
        <input type="date" name='date' class="form-control" required id="entry_date">
    </fieldset>

    <fieldset class="form-group">
        <label for="time">How many hours you will be available?</label>
        <select name="duration" class="form-control" required id="time">
          <option></option>
          <option value="1-2 Hrs">1-2 Hrs</option>
          <option value="2-3 Hrs">2-3 Hrs</option>
          <option value="3-4 Hrs">3-4 Hrs</option>
          <option value="4-5 Hrs">4-5 Hrs</option>
          <option value="5-6 Hrs">5-6 Hrs</option>
          <option value="Half Day Morning">Half Day Morning</option>
          <option value="Full Day">Full Day</option>
          <option value="Flexiable Day">Flexiable Day</option>
          <option value="Contact Me">Contact Me</option>
        </select>
    </fieldset>

    <fieldset class="input-group">
        <label for="about">About Me:</label>
        <textarea name="about" class="form-control custom-control" required id="about"> </textarea> 
    </fieldset>

    <fieldset class="form-group inline">
        <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
    </fieldset>

</form>


            
            <ul class="meta list-inline">
                <li><a href="#" target="_blank"> View on GitHub </a></li>
                <li><a href="https://github.com/twbs/bootstrap" target="_blank">Full Documentation </a></li>
                <li>Created by <a href="" target="_blank">Connect Aid Team</a> at NAU</li>
            </ul><!--//meta-->
        </div><!--//container-->

    </section><!--//promo-->
    
<?php include("includes/footer.php"); ?>
   

