    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
            <small class="copyright">All rights reserved © 2015 </i><a href="github" target="_blank">ConnectAid</a></small>
        </div><!--//container-->
    </footer><!--//footer-->
     
    <!-- Javascript -->          
    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>       
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>  
     <script>
        // Basic FitVids Test
        $(".container").fitVids();
        // Custom selector and No-Double-Wrapping Prevention Test
        $(".container").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
      </script>     
</body>
</html> 