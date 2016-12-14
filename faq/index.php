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
        var heights = $(".fix").map(function() {
            return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);

        $(".fix").height(maxHeight);
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
  <?php  $page = 'faq'; include '../inc/inc_nav.php'; ?>
  <div class="container zeros">
    <div class="container">
      <h1 class="inner-heading">Frequently Asked Questions</h1>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">"How can I be sure the Chip-Trap&trade; will fit?"</div>
            <div class="panel-body fix">
              <h1 class="faq-icon"><span class="glyphicon glyphicon-resize-full"></span></h1>
              <p>Chip-Trap&trade; coolant filter systems were designed to fit HAAS vertical and horizontal machining centers. The unit fits in an opening in the coolant tank (metal pan removed) of approximately 13-1/4" x 18".</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">"Are there other sizes available?"</div>
            <div class="panel-body fix">
              <h1 class="faq-icon"><span class="glyphicon glyphicon-th-large"></span><span class="glyphicon glyphicon-th" style="margin-left:20px;"></span></h1>
              <p>Possibly. In many cases, a change in the mounting hardware is all that is necessary to fit Chip-Trap&trade; coolant filter systems to other machines. Please <a href="../contact/">contact us</a> with your request and we will try to accommodate your needs.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md visible-sm"></div>
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">"Are the filters reusable?"</div>
            <div class="panel-body">
              <h1 class="faq-icon" style="margin-top:7px;"><i class="fa fa-recycle fa-lg"></i></h1>
              <p>The Chip-Trap&trade; filter system uses a "High Density" filter that is designed to help trap the chips which actually embed into the filter. Some users find they can shake the filter to remove some of the chips, allowing you to reuse them a bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">"How often do the filters need to be changed?"</div>
            <div class="panel-body">
              <h1 class="faq-icon icon-lrgr"><span class="glyphicon glyphicon-time"></span></h1>
              <p>Chip-Trap&trade; High Density Filters last approximately one week before needing replacement. This depends on the type of material being machined and the number of hours the machine is run per week. Changing the filter takes less than one minute!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
          <a href="http://store-chiptrap.com/"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
        </div>
      </div>
    </div><!-- Close inner-body Container -->
  </div><!-- Close main body container -->   
  <?php include '../inc/inc_footer.php'; ?>
</body>

</html>