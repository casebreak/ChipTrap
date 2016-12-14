<script type="text/javascript">
  $(document).ready(function() {
    $('#FB-tooltip').tooltip({
      placement: 'bottom'
    });
  });
</script>
<div class="container-fluid" style="margin-bottom:10px;">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-menu" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand hidden-lg hidden-md hidden-sm">Chip-Trap&trade;</div>
      </div>
      <div class="collapse navbar-collapse" id="dropdown-menu">
        <ul class="nav navbar-nav navbar-left">
          <li class="<?php echo ($page == 'home' ? 'active' : ' ')?>"><a href="../home/">Home</a></li>
          <li class="<?php echo ($page == 'faq' ? 'active' : ' ')?>"><a href="../faq/">FAQ</a></li>
          <li class="<?php echo ($page == 'users' ? 'active' : ' ')?>"><a href="../users/">Users</a></li>
          <li class="<?php echo ($page == 'products' ? 'active' : ' ')?>"><a href="../products/">Products</a></li>
          <li><a href="http://store-chiptrap.com/">Shop</a></li>
          <li class="<?php echo ($page == 'contact' ? 'active' : ' ')?>"><a href="../contact/">Contact</a></li>
        </ul>
        <!-- <ul class="nav navbar-nav navbar-right">
          <li><a href="#twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
          <li id="FB-tooltip" data-toggle="tooltip" title="'Like' us on Facebook for special deals and promotions!"><a href="https://www.facebook.com/"><span style="font-size:.9em;color:#fff;margin-right:10px;">New!</span><i class="fa fa-facebook-official fa-lg"></i></a></li>
        </ul> -->
      </div>
    </div>
  </nav><!-- Close navigation -->
  <div style="background-color:#C2C2C2;margin-bottom:10px;padding-top:10px;margin-top:50px;">
    <a href="../home/"><img src="../images/ct_logo_rev1.svg" class="img-responsive" title="Home" alt="Logo"></a>
  </div>
</div><!-- Close nav container -->