<?php
  include('header.php');
?>

     <div class="tsmc-body-back"></div>

    <div class="row tpl-section-default tpl-section-img-five tsmc-margin-bottom">
        <div class="container">
          <div class="tpl-section-inner tpl-section-inner-inverse" style="bottom:12% !important;">
            <span>WIX</span>
            <h1>Show The World What You Can Do</h1>
            <p>With a more adorable cast.</p>

            <div class="tpl-button-container">
              <!-- <div class="tpl-button">
                PLAY VIDEO
              </div>
              <div class="tpl-button" style="margin-left:10px;">
                VIEW PROJECT
              </div> -->
            </div>
          </div>
      </div>
    </div>

    <div id="video" class="row tsmc-brand-film">
      <div class="container">
        <div class="row">

          <div class="videoWrapper">

            <iframe src="//player.vimeo.com/video/94037999?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff<?php if($autoPlayVideo):?>;autoplay=1<?php endif;?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

          </div>
        </div>
        <div class="row">
          <div style="width:100%; padding:15px 8%">
            <h1>Wix — Costumes</h1>
            <p>For Wix.com, we created a campaign called "Show the World What You Can Do". The phrase is very simple and speaks to anyone’s hopes and dreams for their website, especially if they are a small business. In 2014, we have continued the “Show the World” message with a second round of TV spots, this time with a more adorable cast.</p>
          <br>
          </div>
        </div>

        <div class="row tsmc-margin-bottom">
          <div class="col-md-6 nopadding tsmc-margin-right">
            <img src="img/wix/01.jpg" class="tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-6 nopadding">
            <img src="img/wix/02.jpg" class="tsmc-padding-left" style="width:100%;" alt="">
          </div>
        </div>

        <div class="row tsmc-margin-bottom">
          <img src="img/wix/03.jpg" style="width:100%;" alt="">
        </div>

        <div class="row tsmc-margin-bottom-big">
          <div class="col-md-6 nopadding tsmc-margin-right">
            <img src="img/wix/04.jpg" class="tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-6 nopadding">
            <img src="img/wix/05.jpg" class="tsmc-padding-left" style="width:100%;" alt="">
          </div>
        </div>

      </div>
    </div>

    <div class="row tsmc-bottom-nav">
      <div class="bottom-nav-container">

        <button type="button" class="btn btn-default pull-left bottom-nav-left" onclick="location.href='activate.php'">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </button>

        <div style="float:left;" class="bottom-nav-center">
          <span>OTHER PROJECTS</span>
        </div>

        <button type="button" class="btn btn-default pull-right bottom-nav-right" onclick="location.href='google.php'">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </button>

      </div>
    </div>

<?php include('footer.php');?>