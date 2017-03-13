<script type="text/javascript">
  jQuery(function($) {
    $('#test2').waypoint(function() {
      $(this).toggleClass( 'bounceInDown animated' );
    },
    {
      offset: '70%',
      triggerOnce: true
    });
  });
</script>

<script type="text/javascript">
  jQuery(function($) {
    $('#test3').waypoint(function() {
      $(this).toggleClass( 'bounceInDown animated' );
    },
    {
      offset: '70%',
      triggerOnce: true
    });
  });
</script>

<script type="text/javascript">
  jQuery(function($) {
    $('#test4').waypoint(function() {
      $(this).toggleClass( 'bounceInDown animated' );
    },
    {
      offset: '70%',
      triggerOnce: true
    });
  });
</script>

<div class="row">
  <div class="col-md-4">
    <div id="test2">
      <div class="team-member team">
        <div class="theam-thumb img-wrp">
          <img src="{{ asset('/la-assets/img/landing/chef.jpg') }}" alt="" width="360" height="440">
          <div class="team-overlay">
           <div class="img-overlay"></div>
           <div class="overlay-content">
            <h4>PROGRAMACION AND Rock</h4>
            <div class="team networs">
              <span>
                <dl>

                  <dt>
                  <i class="fa fa-facebook-square" aria-hidden="true"></i>
                  </dt>
                  <dt>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </dt>
                  <dt>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </dt>
                  
                </dl>


              </span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="team-desc">
    <h4>ANDRÉS GARATE</h4>
  </div>
</div><!--1-->

<div class="col-md-4">
  <div id="test3">
    <div class="team-member team">
      <div class="theam-thumb img-wrp">
        <img src="{{ asset('/la-assets/img/landing/chef.jpg') }}" alt="" width="360" height="440">
        <div class="team-overlay">
         <div class="img-overlay"></div>
         <div class="overlay-content">
          <h4>PROGRAMACION AND Rock</h4>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="team-desc">
  <h4>ANDRÉS GARATE</h4>
</div>
</div><!--1-->
<div class="col-md-4">
  <div id="test4">
    <div class="team-member team">
      <div class="theam-thumb img-wrp">
        <img src="{{ asset('/la-assets/img/landing/chef.jpg') }}" alt="" width="360" height="440">
        <div class="team-overlay">
         <div class="img-overlay"></div>
         <div class="overlay-content">
          <h4>PROGRAMACION AND Rock</h4>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="team-desc">
  <h4>ANDRÉS GARATE</h4>
</div>
</div><!--1-->




</div><!-- row-->
