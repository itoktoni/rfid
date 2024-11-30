@extends('layouts.main')

@section('content')

@if(!empty($template))
<div class="container-template">
    @foreach($template as $theme)
    <div class="template">
        @includeIf('partial._'.$theme->acf_fc_layout, ['data' => $theme])
    </div>
    @endforeach
</div>
@endif

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area sp3">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="service1-header heading2 text-center">
            <span data-aos="fade-up" data-aos-duration="800">Why Choose Us</span>
            <h2 data-aos="fade-up" data-aos-duration="1000">Powerful Project Collaboration Starts Here</h2>
          </div>
        </div>
        <div class="space60"></div>
      </div>

   <div class="service-vertical-tabs">
    <img src="assets/images/elements/tabs-elements1.png" alt="" class="tabs-elements keyframe4">
    <div class="grid">
      <div class="row">
        <div class="col-lg-5">
          <div class="service-tabs-grid">
            <div class="menu">
             <div class="active">
              <span class="light"></span>
              <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="800">
                <div class="tabs-btn-icon">
                  <img src="assets/images/icons/tabs-btn1.svg" alt="">
                </div>
                <div class="tabs-btn-content">
                  <h4>User-Friendly Interface</h4>
                  <p>Prioritise user experience</p>
                </div>
              </div>
            </div>
            <div class="space16"></div>
            <div>
              <span class="light"></span>
              <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1000">
                <div class="tabs-btn-icon">
                  <img src="assets/images/icons/tabs-btn2.svg" alt="">
                </div>
                <div class="tabs-btn-content">
                  <h4>Proven Track Record</h4>
                  <p>Join the ranks of satisfied users</p>
                </div>
              </div>
            </div>
            <div class="space16"></div>
            <div>
              <span class="light"></span>
              <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1200">
                <div class="tabs-btn-icon">
                  <img src="assets/images/icons/tabs-btn3.svg" alt="">
                </div>
                <div class="tabs-btn-content">
                  <h4>Robust Security Measures</h4>
                  <p>Security is our top priority.</p>
                </div>
              </div>
            </div>
            <div class="space16"></div>
            <div>
              <span class="light"></span>
              <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1400">
                <div class="tabs-btn-icon">
                  <img src="assets/images/icons/tabs-btn4.svg" alt="">
                </div>
                <div class="tabs-btn-content">
                  <h4>Customisable Workflows</h4>
                  <p>No two projects are the same.</p>
                </div>
              </div>
            </div>
            <div class="space16"></div>
            <div>
              <span class="light"></span>
              <div class="tabs-content-area" data-aos="fade-right" data-aos-duration="1600">
                <div class="tabs-btn-icon">
                  <img src="assets/images/icons/tabs-btn5.png" alt="">
                </div>
                <div class="tabs-btn-content">
                  <h4>Insightful Analytics</h4>
                  <p>Make informed decisions.</p>
                </div>
              </div>
            </div>
            </div>
           </div>
        </div>
      <div class="col-lg-7">
        <div class="service-tabs-grid" data-aos="zoom-out" data-aos-duration="1200">
          <ul class="service-tabs-content">
           <li class="active">
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>

           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>

           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>

           <li>
            <div class="vertical-tabs-img reveal">
              <img src="assets/images/all-images/vertyical-tabs-img1.png" alt="">
            </div>
           </li>
          </ul>
         </div>
      </div>
    </div>
  </div>
   </div>
    </div>
  </div>
  <!--===== SERVICE AREA ENDS =======-->


<!--===== SERVICE AREA STARTS =======-->
<div class="service2-section-area sp3" style="background-image: url(assets/images/background/footer-bg2.png); background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="service2-header heading4 text-center">
          <span data-aos="fade-up" data-aos-duration="800">Why Choose Us</span>
          <h2 data-aos="fade-up" data-aos-duration="1000">Transform Your Marketing: The Quad Advantage</h2>
        </div>
        <div class="space60"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="service2-bg-area">
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1200">
              <div class="service2-box-area text-center">
                <div class="service2-icon">
                  <img src="assets/images/icons/service2-icon1.svg" alt="">
                </div>
                <div class="service2-content">
                  <a href="features.html">Social Media Integration</a>
                  <p>Seamlessly connect and amplify your marketing efforts with Quad’s powerful social media integration feature.</p>
                  <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1200">
              <div class="service2-box-area text-center">
                <div class="service2-icon1">
                  <img src="assets/images/icons/service2-icon2.svg" alt="">
                </div>
                <div class="service2-content">
                  <a href="features.html">Compliance and Security</a>
                  <p>At Quad we prioritize the security and privacy of your data. Our robust compliance and security measures are designed </p>
                  <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1200">
              <div class="service2-box-area text-center">
                <div class="service2-icon2">
                  <img src="assets/images/icons/service2-icon3.svg" alt="">
                </div>
                <div class="service2-content">
                  <a href="features.html">Personalised Campaigns</a>
                  <p>Elevate your engagement strategy with personalised campaigns through . We understand the power of tailored messaging</p>
                  <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== TEMPLETE AREA STARTS =======-->
<div class="templete1-section-area sp3">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="templete-header text-center heading4">
          <span data-aos="fade-up" data-aos-duration="800">Email Template</span>
          <h2 data-aos="fade-up" data-aos-duration="1000">Quad Email Template</h2>
        </div>
      </div>
      <div class="space30"></div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="tabs-carousel-area" data-aos="fade-right" data-aos-duration="1000">
          <div class="align-items-start">
            <div class="nav nav-pills" id="v-pills-tab"  aria-orientation="vertical" role="tablist">
              <button class="nav-link active" id="v-pills-all-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-all" aria-selected="true">All</button>
              <button class="nav-link" id="v-pills-Holiday-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Holiday" type="button" role="tab" aria-controls="v-pills-Holiday" aria-selected="false">Holiday</button>
              <button class="nav-link" id="v-pills-Profits-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Profits" type="button" role="tab" aria-controls="v-pills-Profits" aria-selected="false">Non- Profits</button>
              <button class="nav-link" id="v-pills-Monthly-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Monthly" type="button" role="tab" aria-controls="v-pills-Monthly" aria-selected="false">Monthly Newsletter</button>
              <button class="nav-link" id="v-pills-Promo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Promo" type="button" role="tab" aria-controls="v-pills-Promo" aria-selected="false">Promo</button>
              <button class="nav-link" id="v-pills-Christmas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Christmas" type="button" role="tab" aria-controls="v-pills-Christmas" aria-selected="false">Christmas</button>
            </div>
            <div class="space60"></div>
            <div class="tab-content" id="v-pills-tabContent" data-aos="fade-left" data-aos-duration="1200">
              <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-Holiday" role="tabpanel" aria-labelledby="v-pills-Holiday-tab" >
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-Profits" role="tabpanel" aria-labelledby="v-pills-Profits-tab" >
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-Monthly" role="tabpanel" aria-labelledby="v-pills-Monthly-tab" >
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-Promo" role="tabpanel" aria-labelledby="v-pills-Promo-tab" >
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-Christmas" role="tabpanel" aria-labelledby="v-pills-Christmas-tab" >
                <div class="tab-carousel-section owl-carousel">
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img1.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img2.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img3.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                  <div class="tabs-carousel-img">
                    <img src="assets/images/all-images/templete-img4.png" alt="">
                    <div class="tabs-morebtn">
                      <a href="#" class="header-btn2">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TEMPLETE AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta3-section-area " style="background-image: url(assets/images/background/cta-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="cta3-header-area text-center heading6">
            <h2 data-aos="zoom-out" data-aos-duration="1000" class="text-capitalize">Deliver Your Best Work With Quad.Com</h2>
            <div class="space20"></div>
            <ul data-aos="zoom-out" data-aos-duration="1100">
              <li>No Credit Card Needed</li>
              <li><img src="assets/images/icons/star-icon2.svg" alt=""></li>
              <li>Unlimited Time On Free Plan</li>
            </ul>
            <div class="space32"></div>
            <div data-aos="zoom-out" data-aos-duration="1200">
              <a href="contact.html" class="header-btn5">Get Started Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CTA AREA ENDS =======-->
@endsection