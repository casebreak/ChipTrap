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
    $(document).ready(function(){
      $(".popout").colorbox({inline:true, width:"70%", maxHeight:"80%"});
    });
    if ( $(window).width() >= 768) {
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
  <input type="hidden" id="refreshed" value="no">
  <?php  $page = 'products'; include '../inc/inc_nav.php'; ?>
  <div class="container" style="padding:0;margin:0 auto;">
    <div class="container">
      <h1 class="inner-heading">Our Products</h1>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-6">
          <div id="prod1" class="thumbnail fix"><!-- Thumbnail native size: 756x547 -->
            <img src="../images/ct_basic_hires.jpg" class="img-responsive" alt="Chip-Trap&trade; Basic Kit">
            <div class="caption">
              <h1 class="thumb-head">Chip-Trap&trade; Starter Kits</h1>
              <p class="thumb-body"><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Includes Chip-Trap&trade; tray, stand, replacement filters, and installation instructions. Our Deluxe Kit adds additional filters and our Filter Alert alarm.</p>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <a href="http://store-chiptrap.com/Coolant-Filter-Systems-c2/"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                  <a class="popout" href="#basic-kit"><button class="btn btn-primary">More Info</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div id="prod2" class="thumbnail fix">
            <img src="../images/filters_hires_resize.jpg" class="img-responsive" alt="Chip-Trap&trade; Replacement Filters">
            <div class="caption">
              <h1 class="thumb-head">Chip-Trap&trade; Replacement Filters</h1>
              <p class="thumb-body"><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> High Density replacement filters are sold in packs of 12, 36, and 96. Quantity discounts are available. Keeping a supply of filters on hand ensures your Chip-Trap&trade; unit operates at peak efficiency.</p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <a href="http://store-chiptrap.com/Replacement-Filters-c3/"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                  <a class="popout" href="#filters"><button class="btn btn-primary">More Info</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-lg visible-md"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="thumbnail fix">
            <img src="../images/tool_release.jpg" class="img-responsive" alt="Filter Alert">
            <div class="caption">
              <h1 class="thumb-head">Dry Tool Release Lube</h1>
              <p class="thumb-body"><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Our dry Tool Release lube will "stop the pop" when applied to the shanks of your tool holders. Coolant and tramp oil accumulate on your tool holders, often resulting in a tool stuck in your spindle, preventing proper tool changes and slowing down your productivity.</p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <a href="http://store-chiptrap.com/Coolant-Filter-Systems/Tool-Holder-Release-Lube-p11.html"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="thumbnail fix">
            <img src="../images/cloud_download_full.png" class="img-responsive" alt="Filter Alert">
            <div class="caption">
              <h1 class="thumb-head">EZ-Quote Quoting Software</h1>
              <p class="thumb-body"><span class="glyphicon glyphicon-chevron-right ct-maroon"></span> Keep your quotes consistent and accurate with our interactive spreadsheet. Saves time, giving you more money. This product is a digital download.</p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <a href="http://store-chiptrap.com/EZ-Quote-p10.html"><button class="btn btn-default">Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                  <a class="popout" href="#ezquote"><button class="btn btn-primary">More Info</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>        
      <div style="display:none;">
        <div id="ezquote" style="padding:10px;">
          <h1 class="thumb-head">EZ-Quote</h1>
          <p class="thumb-body">EZ-Quote benefits the manufacturing environment by making the quoting process quick easy and thorough! Follow the easy to use program to create consistent, accurate quotes time after time.</p>
          <p class="thumb-body">Don't buy an expensive shop control system if all you're after is a good quoting module.</p>
          <ul>
            <li><p class="thumb-body no-margin">Covers CNC machining, manual machining and all other manufacturing operation including design, sheet metal, welding, inspection, EDM, water jet, etc.</p></li>
            <li><p class="thumb-body no-margin">Quote multiple quantities at once. Allows for "what if" scenarios.</p></li>
            <li><p class="thumb-body no-margin">8 pages of information allows easy step-by-step quoting of even difficult jobs.</p></li>
            <li><p class="thumb-body no-margin">All rates are user customizable.</p></li>
            <li><p class="thumb-body no-margin">Extensive material planner.</p></li>
            <li><p class="thumb-body no-margin">"Hardware" page allows for fasteners, dowel pins, etc.</p></li>
            <li><p class="thumb-body no-margin">Job routing sheets instantly created for the shop.</p></li>
            <li><p class="thumb-body no-margin">Keep track of your quoting success in the "Quote History" section.</p></li>
            <li><p class="thumb-body no-margin">Complete instructions and instant help available at all times, right inside the program!</p></li>
            <li><p class="thumb-body no-margin">Pays for itself within a few uses.</p></li>
          </ul> 
          <br>          
          <div class="alert alert-warning" role="alert"><p class="thumb-body"><span class="glyphicon glyphicon-exclamation-sign"></span> Microsoft Excel 2000 or compatible alternative required. Excel alternative available free of charge if needed. Details at time of purchase.</div>
        </div>
        <div id="basic-kit" style="padding:10px;">
          <h1 class="thumb-head">Chip-Trap Basic and Deluxe Kits</h1>
          <p class="thumb-body">Our Chip-Trap&trade; Coolant Filter Systems fit Haas vertical AND horizontal CNC machines!</p>
          <h3>Basic Kit</h3>
          <p class="thumb-body">Our Basic Kit is all you need to get started on the road to a cleaner tank. It includes:</p>
          <ul>
            <li><p class="thumb-body no-margin">Chip-Trap&trade; Tray</p></li>
            <li><p class="thumb-body no-margin">4x High-Density Premium Filters</p></li>
            <li><p class="thumb-body no-margin">Adjustable stand (If required)</p></li>
          </ul>
          <h3>Deluxe Kit</h3>
          <p class="thumb-body">A step up from our Basic offering, the Deluxe Kit adds a lot of extras! It includes:</p> 
          <ul>
            <li><p class="thumb-body no-margin">Chip-Trap&trade; Tray</p></li>
            <li><p class="thumb-body no-margin">12x High-Density Premium Filters</p></li>
            <li><p class="thumb-body no-margin">Adjustable stand (If required)</p></li>
            <li><p class="thumb-body no-margin">Filter Alert</p></li>
          </ul> 
          <br>          
          <div class="alert alert-warning" role="alert"><p class="thumb-body"><span class="glyphicon glyphicon-exclamation-sign"></span> On machines not requiring a stand, we include 12x High-Density filters in its place. Please let us know in the comments section when you place your order.</p></div> 
          <div class="alert alert-info" role="alert"><p class="thumb-body"><span class="glyphicon glyphicon-info-sign"></span> The unit fits in an opening in the coolant tank (metal pan removed) a minimum of approx. 14” x 19”. This size is common to all models, however some older machines may vary.</p></div>          
        </div>
        <div id="filters" style="padding:10px;">
          <h1 class="thumb-head">Chip-Trap&trade; High-Density Replacement Filters</h1>
          <p class="thumb-body">Replacement premium "High Density" disposable filter elements are sold in quantities of 12, 36 and 96. Two filters should be stacked on top of each other for extra protection. Top filter should be changed weekly. Just discard the top one, rotate the bottom one up and put a fresh one on bottom. Double filtration with no additional cost!</p>
        </div>
      </div>
    </div><!-- Close inner-body Container --> 
  </div><!-- Close main body container --> 
  <?php include '../inc/inc_footer.php'; ?>
</body>

</html>