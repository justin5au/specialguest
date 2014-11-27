<?php
  include('header.php');
?>

     <div class="tsmc-body-back"></div>

    <div class="row tpl-section-default tpl-section-img-two tsmc-margin-bottom">
        <div class="container">
          <div class="tpl-section-inner" style="bottom:12% !important;">
            <span>QUALCOMM</span>
            <h1>Vison Film and Uplinq</h1>
            <p>Needs Caption from Aaron here.</p>

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
            <iframe src="//player.vimeo.com/video/108596680?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff<?php if($autoPlayVideo):?>;autoplay=1<?php endif;?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8" style="padding: 15px 0px 20px 0px">
            <h1>Qualcomm Vision Film</h1>
            <p>Needs text from Aaron here. Also need images from CD.</p>
            <br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8" style="padding: 15px 0px 20px 0px">
            <h1>Uplinq Your 6th Sense</h1>
            <p>Special Guest invented and executed the the keynote show at Uplinq 2013. The show consists of over an hour and a half of unique storytelling, animation and design as well as a show opening performance in partnership with Moment Factory in Montreal. The keynote show at Uplinq is a defining moment for Qualcomm to say who they are and what they do from their home base in San Diego. We brought that defining moment to life.</p>
            <br>
          </div>
        </div>

        <div class="row">

          <div class="videoWrapper">
            <iframe src="//www.youtube.com/embed/CjIWyfYGviM?wmode=transparent&amp;theme=dark&amp;controls=0&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

          </div>
        </div>

             <div class="row tsmc-margin-bottom">
              <img src="img/qualcomm/01.jpg" style="width:100%;" alt="">
            </div>

            <div class="row tsmc-margin-bottom">
              <img src="img/qualcomm/02.jpg" style="width:100%;" alt="">
            </div>

            <div class="row tsmc-margin-bottom-big">
              <img src="img/qualcomm/03.jpg" style="width:100%;" alt="">
            </div>
        </div>

        </div>

    </div>

    <div class="row tsmc-bottom-nav">
      <div class="bottom-nav-container">

        <button type="button" class="btn btn-default pull-left bottom-nav-left" onclick="location.href='tsmc.php'">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </button>

        <div style="float:left;" class="bottom-nav-center">
          <span>OTHER PROJECTS</span>
        </div>

        <button type="button" class="btn btn-default pull-right bottom-nav-right" onclick="location.href='htc.php'">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </button>

      </div>
    </div>

<?php include('footer.php');?>