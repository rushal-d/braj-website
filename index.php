<?php include_once('header.php');  ?>  
<section class="slider-wrapper" id="ambarish">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-7 col-7">
            <div class="slider-content ">
              <div class="text-center logo"><img src="assets/images/brajlogo.png"></div>
                <h1 class="slider-title">Love of beauty is taste. The creation of beauty is art.</h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-5 col-5 align-self-end">
          <div class="slider-image">
            <img src="assets/images/slider.png">
          </div>
        </div>
      </div>
    </div>
    <section class="after"></section>
</section>
<section class="about-us-wrapper block">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about">
          <h3 class="title">Our Vision is to make your Image Better</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="download text-center">
          <img src="assets/images/applestore.png">
          <img src="assets/images/googleplay.png">
          <p>We are available on </p>
        </div>
      </div>
    </div>
  </div>
</section> 

<section class="block steps-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6">
        <div class="step-mockup" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
          <img src="assets/images/mockup2.png">
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <?php for ($i=1; $i <=3 ; $i++) { ?>
        <div class="steps" data-aos="zoom-in-up">
          <span class="step-no"><?php echo $i; ?></span><h3 class="steps-title title">Find the MakeUp </h3>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="block">
  <div class="container">
    <div class="container">
        <div class="swiper-container sslider">
          <div class="swiper-wrapper">
            <div class="row align-items-center justify-content-between">
              <div class="col-lg-4 col-md-5 col-sm-4">
                <div class="slider" data-aos="flip-left">
                  <img src="assets/images/mockupslider.png">
                </div>
              </div><!--  -->
              <div class="col-lg-7 col-md-7 col-sm-8">
                <div data-aos="flip-left">
                  <h3 class="title">Our Vision is to make your Image Better</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,</p>
                </div>
              </div>
            </div><!--  -->
          </div>
      </div>
    </div>
  </div>
</section>
<?php include_once('footer.php');?>