<?php include("co_head.php") ?>
<?php include("co_nav.php") ?>
<!-- ==============================================PAGE CONTENT================================================ -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Frequently Asked Questions</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
            <li class="breadcrumb-item active text-primary">FAQs</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<!-- FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="h-100">
          <div class="mb-5">
            <h4 class="text-primary">Some Important FAQ's</h4>
            <h1 class="display-4 mb-0">
              Common Frequently Asked Questions
            </h1>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button border-0"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  Q: How does SafeWalk ensure my safety while walking?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show active"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body rounded">
                  A: SafeWalk uses real-time location tracking, smart route planning, and danger zone alerts to help you navigate safely. The app also lets you see nearby people and provides updates on potential risks, ensuring you're always informed and protected.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo">
                  Q: Can I use SafeWalk in any city?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A: Yes! SafeWalk is active in 100+ cities and is continuously expanding. You can use the app to find safe routes and stay aware of your surroundings no matter where you are.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree">
                  Q: Is SafeWalk free to use?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A: SafeWalk offers both free and premium features. The basic safety tools, including route planning and alerts, are available for free. Additional advanced features can be unlocked with a premium subscription.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree">
                  Q: How does SafeWalk personalize route suggestions?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A: SafeWalk uses advanced algorithms to analyze real-time data, including local crime reports, traffic, and crowd density, to provide personalized route suggestions. This ensures you are guided along the safest paths based on your current location and surrounding conditions.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
        <img src="img/FAQ-1.png" class="img-fluid w-100" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- FAQs End -->
<!-- ==============================================PAGE CONTENT================================================ -->
<?php include("co_footer.php") ?>
<?php include("co_script.php") ?>