
    <div id="contact" class="row tpl-section-contact">
      <br><br><br>
      <div class="container">
        <div class="col-md-3">
          <p>
            <img src="img/logo.png" style="width:150px; margin:80px 0 20px 0" alt="">
            <br/>
            4th floor, 231 Front Street, Brooklyn, New York 11201
          <br/>
          <br/>
              <span>EMAIL</span>
          <br/>
            <a href="mailto:info@specialguest.tv">info@specialguest.tv</a>
          <br/>
          <br/>
            <span>PHONE</span><br/>
            646.664.1856</p>
        </div>
        <div class="col-md-3">
          <p>
            <img src="img/1stavelogo.png" style="width:170px; margin:80px 0 20px 0;" alt="">
            <br/>
            Visit our partners at
            <a href="http://www.1stavemachine.com" target="_new">www.1stavemachine.com</a>
            <br/>
            <br/>
            <span>EMAIL</span><br/>
              <a href="mailto:info@1stavemachine.com">info@1stavemachine.com</a>
            <br/>
            <br/>
            <span>PHONE</span>
            <br/>
            718.218.8587
          </p>
        </div>
        <div class="col-md-6">
          <a href="https://www.google.com/maps/place/231+Front+St/@40.7026761,-73.9839784,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25a333b21642b:0xa2c20a7b317c7f5b" target="_new"><img style="width:100%; margin-top:50px;" src="img/map.jpg" alt="" /></a>
        </div>
      </div>
    </div>
    <div class="row tpl-section-footer">
      <br><br><br><br><br><br><hr style="opacity:0.3">
      <div class="container social-media">
        <a href="http://www.facebook.com/pages/SpecialGuest/1495801237315916" target="_new"><img class="social-media-opacity" src="img/icons/fb.png"></a>
        <a href="http://www.facebook.com/pages/SpecialGuest/1495801237315916" target="_new" style="margin-left:10px;"><img class="social-media-opacity" src="img/icons/twitter.png"></a>
        <a href="http://vimeo.com/user27693832" target="_new" style="margin-left:10px;"><img class="social-media-opacity" src="img/icons/vimeo.png"></a>
        <a href="#" style="margin-left:10px;"><img class="social-media-opacity" src="img/icons/linkedin.png"></a>
      </div>
      <div class="container" style="text-align:center; padding:20px 0 20px 0;">
        <p style="color:#666;">&copy; 2014 SpecialGuest All Rights Reserved</p>
      </div>
      <br><br>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <?php if($autoPlayVideo):?>
      <script>
        $(function(){
          var pos = $('#video').offset();
          $('body').animate({ scrollTop: pos.top - 85}, 1000);
        });
      </script>
    <?php endif;?>
<!-- </div> uncomment div in header.php -->
</body>
</html>