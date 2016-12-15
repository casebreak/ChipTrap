<!--############################################################
################################################################
################################################################
################### Built by <Scott Duncan> ####################
################ Email <codebyscott@gmail.com> #################
################### Twitter <@case_break> ######################
################################################################
################################################################
#############################################################-->
<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../inc/inc_links.php'; ?> 
  <script type="text/javascript">
    //This script finds the height of the highest .well div and sizes all wells accordingly.
    if ( $(window).width() > 768) {
      $( document ).ready(function() {
        var heights = $(".well").map(function() {
            return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);

        $(".well").height(maxHeight);
      });
    }

    $(window).on("orientationchange", function() {
      window.location.reload();
    });

    //This reloads the page when screen orientation is changed.
/*    window.onresize = function() { 
      window.location.reload(); 
    };*/
  </script>
</head>

<body>
  <?php  $page = 'home'; include '../inc/inc_nav.php'; ?>
  <div class="container zeros">
    <div class="container">
      <!-- Uncomment the line below to add buy now button to top -->
      <!-- <div class="row hidden-lg hidden-md">
        <div class="col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
          <a href="http://store-chiptrap.com/"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
        </div>
      </div> -->
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="well well-sm">
            <h1 class="glyph-heading"><span class="glyphicon glyphicon-trash home-glyph"></span><br>Chip Happens</h1>
            <p><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Chip-Trap&trade; is an American made, inexpensive yet highly effective replacement for your machine's inefficient factory tray. Easy to use and maintain, and adjusts to fit most of your HAAS machines.
          </div>       
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="well well-sm">
            <h1 class="glyph-heading"><span class="glyphicon glyphicon-time home-glyph"></span><br>Save Time</h1>
            <p><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Filter changes take less than one minute without having to roll the coolant tank away from the machine. Tool free installation and a fully adjustable stand ensure a proper fit.</p> 
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="well well-sm">
            <h1 class="glyph-heading"><span class="glyphicon glyphicon-usd home-glyph"></span><br>Save Money</h1>
            <p><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Protect your machine's expensive head and bearings from the damaging chips that clog your screens, pump, and coolant ports that are responsible for keeping your machine cool and stable.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
          <a href="http://store-chiptrap.com/"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
        </div>
      </div>
    </div><!-- Close inner container -->
  </div><!-- Close main body container --> 
  <?php include '../inc/inc_carousel.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="footer">
        <p class="footer"><span class="glyphicon glyphicon-chevron-right"></span> &copy; 2016 Machining Solutions Inc. All rights reserved <span class="glyphicon glyphicon-chevron-left"></span>
      <br>
      Chip-Trap&trade; Logo and associated images property of Machining Solutions Inc.
      </div>
    </div>
  </div>

</body>

</html>