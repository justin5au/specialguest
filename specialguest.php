<?php
  include('header.php');
?>

     <div class="tsmc-body-back"></div>

    <div class="row tpl-section-default tpl-section-img-seven tsmc-margin-bottom">
        <div class="container">
          <div class="tpl-section-inner" style="bottom:12% !important;">
            <span>INDEPENDENT</span>
            <h1>The Special Guest</h1>
            <p>A love story.</p>

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
            <iframe src="//player.vimeo.com/video/97836095?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff<?php if($autoPlayVideo):?>;autoplay=1<?php endif;?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8" style="padding: 15px 0px 20px 0px">
            <h1>A simple love story</h1>
            <p>SpecialGuest Love Story has a simple message, albeit abstract: we love what we do, literally. The animation is a mash-up of messaging, craft, ideas, art, and communication. Concepted and created by Aaron Duffy, SpecialGuest Love Story was part of the Saatchi&Saatchi show case at Cannes Lion’s creativity festival. </p>
          </br>
          </div>
            </div>

        <div class="row tsmc-margin-bottom">
          <div class="col-md-6 nopadding tsmc-margin-right">
            <img src="img/specialguest/01.jpg" class="tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-6 nopadding">
            <img src="img/specialguest/02.png" class="tsmc-padding-left" style="width:100%;" alt="">
          </div>
        </div>

        <div class="row tsmc-margin-bottom">
          <div class="col-md-4 nopadding tsmc-margin-right">
            <img src="img/specialguest/04.png" class="tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-4 nopadding">
            <img src="img/specialguest/03.png" class="tsmc-padding-left tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-4 nopadding">
            <img src="img/specialguest/05.jpg" class="tsmc-padding-left" style="width:100%;" alt="">
          </div>
        </div>

        <div class="row tsmc-margin-bottom-big">
          <div class="col-md-6 nopadding tsmc-margin-right">
            <img src="img/specialguest/06.png" class="tsmc-padding-right" style="width:100%;" alt="">
          </div>
          <div class="col-md-6 nopadding">
            <img src="img/specialguest/07.jpg" class="tsmc-padding-left" style="width:100%;" alt="">
          </div>
        </div>

        </div>

    </div>

    <div class="row tsmc-bottom-nav">
      <div class="bottom-nav-container">

        <button type="button" class="btn btn-default pull-left bottom-nav-left" onclick="location.href='google.php'">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </button>

        <div style="float:left;" class="bottom-nav-center">
          <span>OTHER PROJECTS</span>
        </div>

        <button type="button" class="btn btn-default pull-right bottom-nav-right" style="opacity:0.5">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </button>

      </div>
    </div>

<?php include('footer.php');?>