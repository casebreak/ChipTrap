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
  </script>
</head>

<body> 
  <?php  $page = 'contact'; include '../inc/inc_nav.php'; ?>
  <div class="container" style="padding:0;margin:0 auto;">
    <div class="container">
      <h1 class="inner-heading">Contact Us</h1>
      <div class="well" style="padding:25px;padding-bottom:5px;">
      <p class="text-center">Have a question or comment? We'd love to hear from you. <a class="popout hidden-xs" href="#privacy">View our privacy policy</a><a class="hidden-lg hidden-md hidden-sm" href="../inc/inc_privacy.php">View our privacy policy</a>.</p>
      <div id="form-spacer" class="hidden-xs"></div>
      <form method="POST" action="../mail/send.php" id="contact-form">
        <div class="row">
        <div class="form-group">
          <label for="name" class="control-label col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 thumb-head">Name</label>
          <div class="input-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control thumb-body input-lg" name="name" placeholder="Required" required>
          </div>
        </div>        
        </div>
        <div class="row">
        <div class="form-group">
          <label for="email" class="control-label col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 thumb-head">Email</label>
          <div class="input-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input type="email" class="form-control thumb-body input-lg" name="email" placeholder="Required" required>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="form-group">
          <label for="organization" class="control-label col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 thumb-head">Organization</label>
          <div class="input-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control thumb-body input-lg" name="organization">
          </div>
        </div>
        </div>
        <div class="row">
        <div class="form-group">
          <label for="comment" class="control-label col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 thumb-head">Comment</label>
          <div class="input-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <textarea class="form-control thumb-body" rows="3" name="comment" placeholder="What's on your mind?" required></textarea>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
            <div class="input-group">
              <button type="submit" class="btn btn-default adjust">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div style="display:none;">
      <div id="privacy" style="padding:10px;">
        <h1 class="thumb-head">Privacy Policy</h1>
        <p class="thumb-body">We take your right to privacy very seriously. We only collect information you knowingly supply to us through email, form completions, or telephone conversations. All information collected is protected against unauthorized access or release.  We do not sell, rent, or loan any identifiable personal information to any third party.  Information is only released if we are required to do so legally.  By using our web site, you consent to the collection and use of this information by Chip-Trap&trade; and Machining Solutions, Inc. only.</p>
      </div>
    </div>
    </div><!-- Close inner-body Container -->
  </div><!-- Close main body container -->   
  <?php include '../inc/inc_footer.php'; ?>
</body>

</html>