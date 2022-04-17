@section("body")

@include("Arsha.hero")

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-1.png")}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-2.png")}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-3.png")}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-4.png")}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-5.png")}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset("arsha/assets/img/clients/client-6.png")}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

@include("Arsha.aboutus")

    <!-- ======= Why Us Section ======= -->
  <!--  <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <!--
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <!--
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!--
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!--
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!--
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!--
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

<!-- for ads -->
  <div class="elementor-widget-container">
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/jam-session-martha-gabriel?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/cta/br-jam-session-com-martha-gabriel-o-futuro-do-marketing/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="58474" data-cta-title="[BR] Jam Session com Martha Gabriel – O Futuro do Marketing (Header Banner)"><img width="2500" height="358" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/Banner-Fino-Rock-Convert-4.gif" class="attachment-full size-full entered lazyloaded" alt="O Futuro do Marketing com Martha Gabriel" title="[BR] Jam Session com Martha Gabriel – O Futuro do Marketing (Header Banner)" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/Banner-Fino-Rock-Convert-4.gif" data-ll-status="loaded"><noscript><img width="2500" height="358" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/Banner-Fino-Rock-Convert-4.gif" class="attachment-full size-full" alt="O Futuro do Marketing com Martha Gabriel" title="[BR] Jam Session com Martha Gabriel &#8211; O Futuro do Marketing (Header Banner)" /></noscript></a></div>
<p>O conceito de Marketing Digital pode parecer muito claro, mas, ao mesmo tempo, é muito subjetivo. Como compreender um assunto tão abrangente? </p>
<p>Qualquer ação da minha empresa da internet é Marketing Digital? Quais são as melhores estratégias? Como extrair o máximo potencial dessas ações?</p>
<p>Não resta dúvida sobre a utilidade e o crescimento do Marketing Digital nos próximos anos, e muita gente já sabe disso. E você? <strong>Quer estar preparado para saber tudo sobre esse assunto agora mesmo?</strong></p>
<p>Se sua resposta for “sim”, criamos este conteúdo completo para que você entenda exatamente o que é Marketing Digital, seus principais benefícios, como fazer e como a sua empresa se encaixa e pode tirar proveito disso.</p>
<p>Vamos lá?</p>
<div class="rock-post-index" id="rock-post-index">
<ul class="rock-post-index__ul" id="rock-post-index__ul"><li data-id="0" onclick="scrollToTitle(0)">O que é Marketing Digital</li><li data-id="1" onclick="scrollToTitle(1)">Vantagens do Marketing Digital</li><li data-id="2" onclick="scrollToTitle(2)">Estratégias de Marketing Digital</li><li data-id="3" onclick="scrollToTitle(3)">Plano de Marketing Digital</li><li data-id="4" onclick="scrollToTitle(4)">Métricas de Marketing Digital</li><li data-id="5" onclick="scrollToTitle(5)">Como trabalhar com Marketing Digital</li><li data-id="6" onclick="scrollToTitle(6)">Como fazer Marketing Digital para empresas?</li><li data-id="7" onclick="scrollToTitle(7)">Ferramentas de Marketing Digital</li><li data-id="8" onclick="scrollToTitle(8)">Exemplos de Marketing Digital</li><li data-id="9" onclick="scrollToTitle(9)">Cursos de Marketing Digital</li><li data-id="10" onclick="scrollToTitle(10)">Livros de Marketing Digital</li></ul>
</div>
<span id="rock-0"></span><h2>O que é Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" alt="O que é Marketing Digital" class="wp-image-12900 entered lazyloaded" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" data-ll-status="loaded" sizes="(max-width: 450px) 100vw, 450px" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" alt="O que é Marketing Digital" class="wp-image-12900" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Marketing Digital é a promoção de produtos ou marcas por meio de mídias digitais. Ele é uma das principais maneiras que as empresas têm para se comunicar com o público de forma direta, personalizada e no momento certo.</p>
<p>Philip Kotler — considerado o pai do&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-marketing/" target="_blank">Marketing</a>&nbsp;— conceitua marketing como&nbsp;<em>“o processo social por meio do qual pessoas e grupos de pessoas satisfazem desejos e necessidades com a criação, oferta e livre negociação de produtos e serviços de valor com outros”.</em></p>
<p>Porém, as maneiras de fazer com que isso aconteça sofrem mudanças quase que diariamente. Por isso, atualmente é impossível falar de marketing e ignorar que a maior parte da população mundial está conectada à internet e faz compras online.</p>
<p>É por isso que o Marketing Digital é a principal forma de fazer e conceituar marketing nos dias de hoje. O termo é usado para&nbsp;<strong>resumir todos os seus esforços de marketing no ambiente online</strong>.</p>
<p>Usando canais digitais — como blogs, sites, motores de busca, mídias sociais, email e outros —, as empresas tentam solucionar dores e desejos de clientes e potenciais clientes.</p>
<p>Você entendeu a “sacada” do conceito apresentado pelo professor Kotler? Trata-se de um processo social! É algo que depende do acordo entre duas pessoas dentro de um contexto.</p>
<p>Marketing Digital pode ser realizado por pessoas, empresas, universidades, ONGs, associações, igrejas… Assim, também há fatores culturais, psicológicos, geográficos, jurídicos que influenciam as pessoas na hora de comprar ou vender um produto ou serviço.</p>
<p><strong>E cada um deve fazer o que pode, com os meios que tem, para encontrar as oportunidades certas nesse meio</strong>!</p>
<p>No vídeo abaixo explico quais são os conceitos mais básicos do Marketing Digital:</p>
<p>Observe o conceito de marketing e&nbsp;<strong>adicione uma camada de internet.&nbsp;</strong>Esse é o “espírito” do Marketing Digital! Meios digitais envolvem computadores e a forma dominante de comunicação digital é a internet.</p>
<p>O grande fluxo de comunicação que a web proporciona hoje favorece estratégias ágeis, como&nbsp;<a href="https://rockcontent.com/br/blog/o-que-e-seo/" target="_blank" rel="noreferrer noopener">Search Engine Optimization</a>,&nbsp;<a href="https://rockcontent.com/br/blog/o-que-e-inbound-marketing/" target="_blank" rel="noreferrer noopener">Inbound Marketing</a>&nbsp;e&nbsp;<a href="https://rockcontent.com/br/blog/marketing-de-conteudo/" target="_blank" rel="noreferrer noopener">Marketing de Conteúdo</a>, como veremos nos próximos tópicos.</p>
<p>Quando falamos de aumentar nossa rede, fortalecer a nossa marca e realizar melhores vendas, todos esses são objetivos em que o Marketing Digital é uma importante ferramenta para alcançá-los.</p>
<p>Para chegar lá, os meios digitais são os melhores para observar e testar a efetividade das nossas ações.</p>
<p>Por isso, o&nbsp;<strong>Marketing Digital é um dos melhores meios disponíveis para calcular o retorno sobre cada investimento</strong>, definir métricas mais claras e simples de medir.</p>
<p>Não é à toa que esse conceito é chamado de&nbsp;<em>novo marketing</em>.</p>
<p>Antes de continuarmos nosso estudo sobre o Marketing Digital, devo avisar que esse é um post extenso. Por isso, disponibilizamos este conteúdo para download! Basta preencher o formulário abaixo:</p>
<h3>História do Marketing Online</h3>
<p>Chegou o momento nostalgia! Nos anos 90, a internet passou por uma onda de crescimento, da qual muitas das principais empresas do mundo surgiram (e muitas também desapareceram).</p>
<p>Chamamos esse período de Web 1.0 — quando os primeiros mecanismos de busca, as primeiras vendas online e os primeiros softwares de comunicação se tornaram acessíveis.</p>
<p>Foi nessa época que surgiu o Google (em sua forma mais rudimentar), bem como vários outros motores de busca, e o ICQ, por exemplo.&nbsp;<strong>Foi nesse período — o de nascimento da internet como conhecemos — que o termo Marketing Digital começou a ser utilizado.</strong></p>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="585" height="1024" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png" alt="marketing digital evolução da web" class="wp-image-13835 entered lazyloaded" title="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png 585w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-171x300.png 171w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution.png 600w" data-lazy-sizes="(max-width: 585px) 100vw, 585px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png" data-ll-status="loaded" sizes="(max-width: 585px) 100vw, 585px" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png 585w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-171x300.png 171w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution.png 600w"><noscript><img width="585" height="1024" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png" alt="marketing digital evolução da web" class="wp-image-13835" title="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-585x1024.png 585w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution-171x300.png 171w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/09/web-evolution.png 600w" sizes="(max-width: 585px) 100vw, 585px" /></noscript></figure></div>
<p>Na época, a web era apenas para pessoas e empresas mais entusiastas, o que é compreensível. Afinal, ali também havia poucos consumidores. Mas a rede foi adquirindo tração e as tecnologias foram se sofisticando sem que percebêssemos.</p>
<p>Em 1993, quando o primeiro anúncio clicável foi publicado, a internet possuía cerca de 130 sites no ar. Ao fim dos anos 2000, quando o Marketing Digital se tornou a base do que conhecemos hoje, já eram 17 milhões. Vale ressaltar que empresas como Google, PayPal e Amazon já existiam nesse período!</p>
<h4>Conceito de Mix de Marketing</h4>
<p>Mesmo sendo digital, ainda estamos falando do marketing. E o marketing, como campo de estudo, nos fornece muitas ferramentas que se aplicam perfeitamente quando falamos de Marketing Digital. Muitas delas, inclusive, podem ser expandidas para se encaixar melhor ao mundo da internet.</p>
<p>Por exemplo, você conhece o conceito de&nbsp;<a href="https://rockcontent.com/br/blog/4-ps-do-marketing/" target="_blank" rel="noreferrer noopener">4 Ps do Marketing</a>?</p>
<p>Também conhecido como Mix de Marketing ou Composto de Marketing, esse conceito se refere a um produto ou serviço em quatro pontos-chave:</p>
<ul><li>Produto;</li><li>Preço;</li><li>Praça;</li><li>Promoção.</li></ul>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="700" height="826" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20826'%3E%3C/svg%3E" alt="" class="wp-image-13436" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital.png 700w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital-254x300.png 254w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital.png"><noscript><img width="700" height="826" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital.png" alt="" class="wp-image-13436" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital.png 700w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/06/marketing-digital-254x300.png 254w" sizes="(max-width: 700px) 100vw, 700px" /></noscript></figure></div>
<p>Assim, quando aplicado ao universo digital, existem autores que estendem esse diagrama para mais alguns elementos. Veja como são esses desdobramentos:</p>
<h5>5 Ps do marketing</h5>
<p>Com o tempo, a importância de valorizar o consumidor como parte da estratégia fez com que um novo P fosse acrescido ao conceito, o de&nbsp;<em>people</em>&nbsp;— Pessoas.</p>
<p>Nesse contexto as empresas passaram a considerar mais o poder de compra do público na hora de criar campanhas, entendendo que essas pessoas precisam ser conquistadas não apenas pelo produto e o que o envolve, mas também pelas marcas.</p>
<h5>8 Ps do marketing</h5>
<p>Finalmente chegamos a era dos 8 Ps do Marketing, onde além de Preço, Praça, Produto, Promoção e Pessoas, temos:</p>
<ul><li>Processos;</li><li>Posicionamento;</li><li>Performance.</li></ul>
<p>Eles passaram a ser determinantes para identificar as ações de sucesso no Marketing.</p>
<p>Nesse sentido o Digital foi fundamental, porque as ações online permitem que as pessoas avaliem os <strong>resultados obtidos de maneira sistêmica e escalável</strong>, contribuindo para tornar as ações ainda mais direcionadas e estratégicas. Vamos explicar mais adiante com detalhes como isso funciona.</p>
<h3>Conceitos-chave de Marketing Digital</h3>
<p>Assim como cada especialização tem suas especificidades, o Marketing Digital é um universo com seus próprios termos. Antes de começar esse post, vamos explicar cada um desses principais conceitos.</p>
<h4>Persona</h4>
<p>Ao contrário das estratégias tradicionais, o Marketing Digital trabalha com o conceito de&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/persona-ou-seo/" target="_blank">personas</a>, que são perfis semifictícios, baseados nos seus consumidores reais, e que <strong>representam o seu comprador ideal</strong>. Assim você consegue criar ações mais segmentadas e direcionadas para as pessoas certas, poupando tempo e dinheiro.</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><img width="700" height="635" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20700%20635'%3E%3C/svg%3E" alt="publico-alvo-vs-persona" class="wp-image-38362" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/publico-alvo-vs-persona-min.gif"><noscript><img width="700" height="635" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/publico-alvo-vs-persona-min.gif" alt="publico-alvo-vs-persona" class="wp-image-38362" /></noscript></figure></div>
<p>Para criar a sua persona e construir a sua estratégia, confira o nosso&nbsp;<a href="https://geradordepersonas.com.br/?__hstc=64741936.67de532a17153c0fde38ed7663835ba8.1650223335686.1650223335686.1650223335686.1&amp;__hssc=64741936.1.1650223335687&amp;__hsfp=4205530587" target="_blank" rel="noreferrer noopener">Fantástico Gerador de Personas</a></p>
<h4>Lead</h4>
<p><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-lead/" target="_blank"><strong>Leads</strong></a><strong>&nbsp;são oportunidades de negócio</strong>. São os contatos que, através de uma estratégia de Inbound Marketing, deixam suas informações-chave para que você consiga identificar os seus compradores em potencial e nutri-los com informações relevantes até que eles estejam prontos para o momento de compras.</p>
<h4>Funil de Vendas</h4>
<p>O&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/funil-de-vendas/" target="_blank">Funil de Vendas</a>, também conhecido como Jornada do Consumidor, são as etapas pelas quais uma pessoa passa durante o <strong>processo de compra</strong>, desde a compreensão de um problema, passando pela consideração de compra até a decisão.</p>
<h4>CRM</h4>
<p>O&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-crm/" target="_blank">CRM (Customer Relationship Management)</a>&nbsp;é um software responsável pela <strong>gestão eficaz do relacionamento</strong> de uma empresa com os seus potenciais e atuais clientes. </p>
<p>Entre as inúmeras funcionalidades que esse tipo de ferramenta apresenta, as principais são: cadastro de clientes, registro de suas informações, preferências e últimos contatos realizados com a sua empresa e controle de follow-ups.</p>
<h4>Landing Page</h4>
<p><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/landing-page/" target="_blank"><strong>Landing Pages</strong></a><strong>&nbsp;são as páginas de capturas de leads</strong>, 100% focadas em conversão. </p>
<p>A ideia é que nessas páginas você ofereça um conteúdo ou material de valor e em troca os visitantes mais interessados deixem suas informações de contato e, com isso, se tornem leads.</p>
<h4>SEO</h4>
<p><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-seo/" target="_blank">SEO (</a><em><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-seo/" target="_blank">Search Engine Optimization</a></em><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-seo/" target="_blank">)</a>&nbsp;ou otimização para mecanismos de busca. São as ações que contribuem para <strong>melhorar o potencial de rankeamento</strong> de suas páginas e conteúdos, ajudando você a cumprir os principais pré-requisitos exigidos pelas plataformas de pesquisa.</p>
<h4>CMS</h4>
<p><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/cms/" target="_blank">CMS</a>&nbsp;significa Content Management System, ou seja, Sistema de Gestão de Conteúdos, e nada mais é do que uma ferramenta que possibilita a <strong>produção, edição e publicação de conteúdos no ambiente online</strong> sem a necessidade de conhecimentos técnicos em programação. </p>
<p>Dessa forma, por meio de um CMS é possível criar sites, blogs e outros portais de maneira simplificada.</p>
<h4>CTA</h4>
<p>Os&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/o-que-e-cta/" target="_blank">Calls to Action&nbsp;ou CTAs</a>&nbsp;são os botões ou chamadas que <strong>direcionam a ação</strong> que os seus usuários devem cumprir ao visitar uma página, para que continuem no fluxo do seu funil de vendas e cheguem ao momento de compra preparados para o consumo.</p>
<h4>Fluxo de Nutrição</h4>
<p>O&nbsp;Fluxo de Nutrição&nbsp;é um processo de automação de Marketing onde uma ação do usuário é o gatilho para um <strong>fluxo de mensagens, geralmente por email</strong>, com o objetivo de ajudar o seu visitante a caminhar pelo funil de vendas.</p>
<p>Você pode conferir mais termos específicos sobre o tema neste&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/glossario-de-marketing-digital/" target="_blank">Glossário Completo de Marketing Digital</a>&nbsp;ou pode conhecê-los de forma ainda mais aprofundada nos&nbsp;<a rel="noreferrer noopener" aria-label=" (abre numa nova aba)" href="https://university.rockcontent.com/" target="_blank">cursos da Rock University</a> — temos vários cursos gratuitos disponíveis!</p>
<span id="rock-1"></span><h2>Vantagens do Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Vantagens do Marketing Digital" class="wp-image-12937" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png" alt="Vantagens do Marketing Digital" class="wp-image-12937" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Por que fazer Marketing na Internet deve ser uma prioridade para as empresas e quais os principais benefícios que uma estratégia online pode oferecer? Neste tópico vamos abordar esse assunto.</p>
<p>Você já deve ter percebido o quanto o Digital mudou a maneira de fazer marketing e para melhor, tanto para empresas quanto para consumidores. </p>
<p>Existem diversas vantagens que podem representar economia para ambos, além de estreitar as relações entre o público e as marcas.</p>
<h3>Interatividade</h3>
<p>Uma das principais razões pelas quais o Marketing Digital é cada vez mais adotado em relação aos canais tradicionais, sobretudo os canais offline,&nbsp;<strong>é a interatividade com o público</strong>. O foco não está mais no produto e sim na experiência do usuário em sua jornada de compra.</p>
<p>As empresas fazem campanhas, publicações e ações e, do outro lado, os consumidores podem <strong>interagir, opinar e indicar</strong> para outras pessoas apenas com alguns cliques, aumentando o engajamento com as marcas, bem como as exigências do público. Assim, é necessário cada vez mais melhorar a maneira de falar com a sua audiência.</p>
<p>Separamos um material completo sobre criação de conteúdos interativos para que você possa se inteirar sobre o assunto:</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/conteudo-interativo?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="35273" data-cta-title="Tudo sobre conteúdo interativo"><picture class="attachment-full size-full" title="Tudo sobre conteúdo interativo">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png.webp 1563w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-300x80.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1024x274.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-768x205.png.webp 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1536x411.png.webp 1536w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201563%20418'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1563px) 100vw, 1563px">
<img width="1563" height="418" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201563%20418'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png 1563w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-300x80.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1024x274.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-768x205.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1536x411.png 1536w" data-lazy-sizes="(max-width: 1563px) 100vw, 1563px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png">
</picture>
<noscript><picture class="attachment-full size-full" title="Tudo sobre conteúdo interativo">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png.webp 1563w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-300x80.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1024x274.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-768x205.png.webp 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1536x411.png.webp 1536w" sizes="(max-width: 1563px) 100vw, 1563px"/>
<img width="1563" height="418" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png" alt="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final.png 1563w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-300x80.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1024x274.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-768x205.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/Material_750x200px-banner-final-1536x411.png 1536w" sizes="(max-width: 1563px) 100vw, 1563px"/>
</picture>
</noscript></a></div>
<h3>Análise e mensuração</h3>
<p>Imagine o mundo nos anos 1960, quando o modelo de negócios das agências de marketing e publicidade estava decolando. Neste período, poucas eram os métodos de medir a efetividade das campanhas publicitárias e anúncios veiculados.</p>
<p>Pode-se dizer que, até a chegada da internet, muito dinheiro foi gasto em ações ineficientes! Afinal, se você não consegue medir se um cliente foi convencido pela sua ação de marketing a comprar um produto ou serviço, é difícil dizer se a sua estratégia é efetiva.</p>
<p>No mundo do marketing online, a&nbsp;<strong>obtenção e análise de dados</strong>&nbsp;é uma etapa fundamental para a&nbsp;<strong>melhoria contínua</strong>&nbsp;da sua estratégia.</p>
<p>Felizmente, hoje, absolutamente tudo deve ter o seu retorno comprovado. Métricas como o&nbsp;<a href="https://rockcontent.com/br/blog/roi/" target="_blank" rel="noreferrer noopener">Retorno Sobre Investimento</a>&nbsp;(ROI) e&nbsp;<a href="https://rockcontent.com/br/blog/custo-de-aquisicao-de-clientes/" target="_blank" rel="noreferrer noopener">Custo de Aquisição de Clientes</a>&nbsp;(CAC) podem (e devem!) ser analisadas em tempo real.</p>
<p>Assim, as empresas podem identificar falhas rapidamente, colocando melhorias em prática. Isso era impensável há bem pouco tempo.</p>
<h3>Mais oportunidades para as empresas</h3>
<p>Além de tudo isso, a diminuição das distâncias literalmente entre empresas e clientes ajudou e muito.&nbsp;<strong>Afinal, hoje, mesmo as pequenas marcas podem fazer boas campanhas e atrair consumidores do outro lado da cidade, do país e do mundo.</strong></p>
<p>Com isso, os consumidores ganham. Eles têm mais oportunidades de conhecer empresas com as quais se identificam. O mesmo vale para as empresas que podem criar um bom posicionamento online, aumentando as suas oportunidades de venda por diversos canais!</p>
<h3>Direcionamento</h3>
<p>Muitas pessoas podem pensar “nossa, vou conseguir falar com o máximo de pessoas possível”, e sim, isso é ótimo!</p>
<p>Mas um dos grandes diferenciais do Marketing Online é que as empresas conseguem agora fazer ações para atrair e conquistar as pessoas certas! Ou seja, aquelas que realmente têm o perfil ideal para consumir da sua empresa.</p>
<p>Isso é um grande benefício porque, além de&nbsp;<strong>economizar dinheiro</strong>&nbsp;— afinal você deixa de gastar muito dinheiro com pessoas que não têm interesse em seus produtos e serviços através da segmentação —, você passa a&nbsp;<strong>conhecer melhor o seu público</strong>, se tornando cada vez mais especialista em conquistá-lo.</p>
<p>Esse é o segredo por trás do valor real do Marketing Online, e está revelado para qualquer um colocar em prática! Só é necessário um método e falaremos sobre isso agora!</p>
<span id="rock-2"></span><h2>Estratégias de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Como fazer Marketing Digital" class="wp-image-12817" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital.png" alt="Como fazer Marketing Digital" class="wp-image-12817" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/como_fazer_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Existe uma infinidade de maneiras de aplicar uma estratégia de Marketing Digital. Entenda quais são e como fazer uma escolha que combine com as necessidades da sua empresa.</p>
<p>O crescente poder de processamento dos computadores e da infraestrutura em internet nos levou a um universo de possibilidades. Basta pensar no volume e na qualidade de conteúdos que temos disponíveis hoje — a maioria deles gratuita.</p>
<p>Hoje, se eu perguntar qualquer coisa ao Google, há boas chances de eu receber uma resposta satisfatória. E essa resposta estará contida em algum conteúdo disponibilizado por um site na internet. Não é simples e, ao mesmo tempo, fantástico?</p>
<p>Seguindo essa lógica, sites que contêm muitas e boas respostas têm mais chances de atrair o público e, consequentemente, conquistar mais clientes, aumentar a sua percepção de marca e saber cada vez mais sobre o comportamento dos consumidores.</p>
<p>Como foi mencionado no capítulo anterior, muitos negócios estão migrando dos meios offline para os meios online de marketing. Evidentemente, isso aumenta a concorrência na web.</p>
<p>Como dissemos no capítulo anterior, o segredo está no método.&nbsp;<strong>Para alcançar seus objetivos de marketing, precisamos encontrar meios de chegar lá.</strong></p>
<p>Mas, se a internet tem possibilidades infinitas, como posso saber que estou tomando a decisão certa? Não se preocupe, pois agora você conhecerá o que há de mais atual no mundo em termos de estratégia. Confira.</p>
<h3>Inbound Marketing</h3>
<p>Inbound Marketing é sinônimo de marketing de atração. Ao criar uma estratégia de Inbound, seu objetivo é ser encontrado pelas pessoas.</p>
<p><strong>No Inbound Marketing, as empresas procuram entender as dores e necessidades dos consumidores para, em seguida, estabelecer um canal de comunicação com essas pessoas, a fim de oferecer uma solução para os seus anseios e desejos.</strong></p>
<p>Hoje, a internet está repleta de ferramentas para fazer pesquisas, descobrir interesses do público e publicar materiais que os ajudem a satisfazê-los.</p>
<p>Quando isso é praticado continuamente, você cria a sua audiência, gerando um canal de comunicação constante com ela. Em outras palavras,<strong>&nbsp;a empresa conversa com sua audiência</strong>, não somente envia mensagens.</p>
<p>Em consequência, suas publicações passam a ser buscadas por mais e mais pessoas. Por meio desta comunicação, é possível entender interesses cada vez mais específicos do público (e sair na frente para atendê-los).</p>
<p>Atualmente, a principal maneira de fazer as pessoas chegarem até você é criando conteúdo, ou seja, oferecendo informações relevantes, que solucionam problemas reais e são de amplo acesso. A essa estratégia damos o nome de Marketing de Conteúdo, que abordaremos a seguir:</p>
<p><b>Entenda tudo sobre Inbound Marketing</b><br>
<a href="https://rockcontent.com/br/blog/o-que-e-inbound-marketing/" target="_blank" rel="noopener noreferrer">O Guia Completo do Inbound Marketing: o que é e como fazer</a><br>
<a href="https://materiais.rockcontent.com/growth-hacking-para-inbound" target="_blank" rel="noopener noreferrer">Growth Hacking para Inbound Markteers: alavanque sua estratégia</a></p>
<h3>Marketing de Conteúdo</h3>
<p>Os consumidores estão diariamente procurando soluções na internet, e, na maioria das vezes, essa procura começa em motores de busca.</p>
<p>O&nbsp;<a href="https://rockcontent.com/br/blog/marketing-de-conteudo/" target="_blank" rel="noreferrer noopener">Marketing de Conteúdo</a>&nbsp;tem como objetivo posicionar a sua marca no lugar e no momento certo da jornada de compra para oferecer as melhores soluções.</p>
<p>Portanto,&nbsp;<strong>Marketing de Conteúdo é o processo de publicar materiais e informações relevantes e valiosos, a fim de atrair, converter e encantar uma audiência</strong>.</p>
<p>Vale lembrar que essa estratégia, se bem-feita, pode auxiliar a&nbsp;<a href="https://www1.folha.uol.com.br/mpme/2018/12/marketing-de-conteudo-triplica-em-1-ano-o-acesso-a-empresa-pela-internet.shtml" target="_blank" rel="noreferrer noopener">triplicar em menos de um ano os acessos à empresa na internet</a>, além de trazer muitos outros benefícios, como: reconhecimento de marca, criação de autoridade e educação do mercado.</p>
<p>Para isso, você precisa espalhar seu conteúdo em regiões da internet que sejam atrativas para a sua persona. Existem alguns métodos considerados padrões, tal qual um blog, o site da empresa e os perfis em redes sociais.</p>
<p>Contudo, existem formas de diversificar o seu alcance com diferentes canais de conteúdo. Aqui estão algumas maneiras de fazer isso:</p>
<h4>Blog</h4>
<p>O&nbsp;<a href="https://rockcontent.com/br/blog/como-criar-um-blog/" target="_blank" rel="noreferrer noopener">blog</a>&nbsp;é a casa do Marketing de Conteúdo.</p>
<p><strong>Isso porque ele é um canal exclusivamente seu de comunicação com o público, sem as interferências e distrações que outros canais como as redes sociais podem ter.&nbsp;</strong>Ou seja, você pode publicar o que quiser, como quiser, a hora que quiser.</p>
<p>Blogs também são muito fáceis de serem editados e administrados, o que facilita que empresas com pequenos ou grandes times de Marketing consigam tocar uma e<strong>stratégia de maneira prática, econômica e rápida</strong>.</p>
<p>E, por fim, mas não menos importante, blogs são uma excelente ferramenta de otimização de conteúdos para melhorar os seus rankings em mecanismos de busca, como o Google. Isso melhora a visibilidade do seu negócio e amplia o seu poder de atração das pessoas certas!</p>
<p>Além disso, você pode usar alguns outros canais como o&nbsp;<a href="https://rockcontent.com/br/blog/medium/" target="_blank" rel="noreferrer noopener">Medium</a>&nbsp;e o LinkedIn Pulse para construir a sua audiência nesse sentido. Eles funcionam como blogs, com a desvantagens de não serem domínios próprios e com menos poder de rankeamento, mas que são mais fáceis e acessíveis.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/kit-marketing-de-conteudo?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="56532" data-cta-title="[BR] Kit de Ferramentas para Marketing de Conteúdo"><picture class="attachment-full size-full" title="[BR] Kit de Ferramentas para Marketing de Conteúdo">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="200" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" alt="Kit de Ferramentas para Marketing de Conteúdo" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[BR] Kit de Ferramentas para Marketing de Conteúdo">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="200" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png" alt="Kit de Ferramentas para Marketing de Conteúdo" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Banner-de-final-de-post-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<h4>Site Institucional</h4>
<p>Muitas empresas se contentam em ter um blog ou uma página em uma rede social. Tudo isso é muito importante, mas não dispensa a necessidade de um site institucional.</p>
<p>Primeiro porque&nbsp;<strong>aumenta a credibilidade</strong>&nbsp;do seu negócio. Afinal, quando as pessoas procurarem você, elas precisam ter a segurança de que a sua empresa é séria e confiável.</p>
<p>Segundo porque esse se torna&nbsp;mais um canal&nbsp;onde as pessoas podem te encontrar e que também é só seu e pode ajudar você a conquistar boas posições nos mecanismos de busca.</p>
<p>É também fundamental que as suas ações de Marketing direcionem as pessoas para&nbsp;<strong>um canal onde elas possam solicitar os seus produtos ou serviços e finalmente consumir&nbsp;</strong>de você, tirando as principais dúvidas delas. E esse canal é, sem sombra de dúvidas, o site institucional.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/como-criar-site?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="35353" data-cta-title="[ STAGE BR ] [ LEAD ] Ebook: Como criar o site da sua empresa"><picture class="attachment-full size-full" title="[ STAGE BR ] [ LEAD ] Ebook: Como criar o site da sua empresa">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="200" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[ STAGE BR ] [ LEAD ] Ebook: Como criar o site da sua empresa">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="200" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png" alt="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/materiais_banner-9-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<h3>Redes Sociais</h3>
<p>Poucos lugares proporcionam tanto a interação das pessoas com as marcas quanto as&nbsp;<a href="https://rockcontent.com/br/blog/tudo-sobre-redes-sociais/" target="_blank" rel="noreferrer noopener">redes sociais</a>.<strong>&nbsp;Elas são um canal criado exatamente com esse objetivo: comunicação, influência e diálogo.</strong></p>
<p>Assim, ter uma página nas principais redes sociais onde o seu público se encontra tornou-se indispensável: seja para promover suas ações e conteúdos, seja para que as pessoas conheçam o “por trás das câmeras” da sua empresa.</p>
<p>Aliás, esse se tornou um ponto fundamental para a escolha de uma marca por parte dos consumidores, que é se identificar com as empresas além do produto e do serviço, mas com os valores e o ideal por trás delas. E as redes sociais são um excelente canal para que esse engajamento aconteça.</p>
<p>Mídias sociais são, como o próprio nome diz, os meios. Contudo, o mais importante a se cultivar são as redes.</p>
<p>E, no caso das redes sociais, as estratégias têm vários fins, pois têm muita importância para&nbsp;<a href="https://rockcontent.com/br/blog/branding/" target="_blank" rel="noreferrer noopener">branding</a>&nbsp;e buzz e, ao mesmo tempo, para geração de tráfego e conversões.</p>
<p>Evidentemente, é preciso uma estratégia, que podemos aprender a criar agora mesmo. Separamos alguns conteúdos que vão ajudá-lo nisso:</p>
<p><b>Conheça os nossos conteúdos completos e gratuitos sobre redes sociais</b><br> <a href="https://materiais.rockcontent.com/kit-marketing-redes-sociais" target="_blank" rel="noopener noreferrer">O Guia Completo das Redes Sociais: confira tudo sobre Facebook, Instagram, LinkedIn, Twitter e Facebook</a><br> <a href="https://materiais.rockcontent.com/facebook-ads" target="_blank" rel="noopener noreferrer">O Guia prático do Facebook Ads para você criar anúncios nesta plataforma</a><br> <a href="https://rockcontent.com/br/blog/redes-sociais-mais-usadas-no-brasil/" target="_blank" rel="noopener noreferrer">Quais são as redes sociais mais usadas do Brasil? Descubra e entenda porque vale a pena investir!</a></p>
<h4>Como definir uma estratégia de redes sociais</h4>
<p>Uma estratégia efetiva de redes sociais deve gerar uma participação significativa na geração de tráfego para o seu domínio, mas, ao mesmo tempo, é um canal de comunicação e divulgação da marca.</p>
<p>Por isso, vamos dividir em alguns passos simples:</p>
<ul><li><strong>Passo 1 — Estabeleça objetivos e metas.</strong>&nbsp;Redes sociais também têm um funil e você deve considerar as métricas relevantes em cada etapa. A&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/okr/" target="_blank">metodologia de OKRs</a>&nbsp;para medir o desempenho se encaixa perfeitamente nesse caso;</li><li><strong>Passo 2 — Encontre as redes corretas.&nbsp;</strong>Facebook, Linkedin, Instagram, Twitter etc. são canais diferentes e tem suas particularidades, portanto a intenção dos usuários em cada um deles também. Faça pesquisas sobre o perfil do público, as palavras-chave e tendências antes de criar um perfil comercial;</li><li><strong>Passo 3 — Crie um perfil.&nbsp;</strong>Fique atento aos&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/tamanho-imagens-redes-sociais/" target="_blank">tamanhos corretos de posts e imagens em mídias sociais</a>. Lembre-se de utilizar um design e tom de voz que obedeça aos padrões da sua marca e sejam focados nos objetivos definidos no primeiro passo;</li><li><strong>Passo 4 — Realize um benchmarking.</strong>&nbsp;Veja o que os seus concorrentes e blogs de assuntos relacionados estão dizendo. Se você tem concorrentes fortes, certamente eles publicam muita coisa relevante e que você deve aproveitar;</li><li><strong>Passo 5 — Defina um plano e um calendário editorial.</strong>&nbsp;Isso é necessário para organizar as verbas e analisar o andamento da estratégia. Aplicativos como Buzzsumo são boas ferramentas de pesquisa de tendências e palavras-chave;</li><li><strong>Passo 6 — Aprenda com os resultados.&nbsp;</strong>Assim como os blogs e sites, mídias sociais também têm ferramentas de análise. Utilize-as para calcular suas métricas e indicadores.</li></ul>
<h3>Email Marketing</h3>
<p><a href="https://rockcontent.com/br/blog/tudo-sobre-email-marketing/">Email Marketing</a>&nbsp;é o processo de enviar mensagens com fins comerciais para um grupo de contatos obtidos por uma empresa na internet.</p>
<p>Ele pode ser utilizado como método de<strong>&nbsp;fortalecimento da sua marca, vendas, comunicação com clientes e potenciais clientes</strong>.</p>
<p>O canal de mensagens direto com o usuário é uma ferramenta inigualável e pode trazer resultados muito efetivos. Inclusive, é possível segmentar suas listas seguindo diversos fatores, como taxa de abertura dos emails, respostas, downloads de um material, entre outros.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/email-marketing?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="34882" data-cta-title="[PT] Guia do Email Marketing"><picture class="attachment-full size-full" title="[PT] Guia do Email Marketing">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="200" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[PT] Guia do Email Marketing">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="200" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png" alt="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/05/banner-4-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<h4>Construindo uma lista de emails</h4>
<p>O primeiro passo para uma boa estratégia de email marketing é construir sua lista de emails, ou seja, conquistar os contatos das pessoas que receberão seu conteúdo. Como fazer isso?</p>
<ul><li>Passo 1: escolher um bom <strong>software</strong> para gerir as suas listas;</li><li>Passo 2: criar uma <strong>oferta incrível</strong>, como uma newsletter, desconto ou conteúdo rico;</li><li>Passo 3: inserir <strong>formulários de inscrição</strong> dentro do seu site ou blog;</li><li>Passo 4: desenvolver uma voz para a sua empresa e <strong>criar mensagens</strong> cativantes.</li></ul>
<h4>Tipos de email</h4>
<p>Email é um canal de contato com clientes e potenciais clientes, certo? Esse meio é uma forma bilateral de comunicação. Afinal, quem recebe emails pode respondê-los!</p>
<p>Por isso, existem diversos tipos de mensagem que você pode enviar, cada uma com uma intenção diferente em relação aos seus leads.</p>
<h5>1. Emails Informacionais</h5>
<p>Esse tipo de mensagem tem o objetivo de<strong>&nbsp;passar uma informação relevante para os contatos</strong>. Se você possui alguma notícia em primeira mão, quer divulgar algum evento ou ação específica, emails informacionais são um método excelente.</p>
<p>Geralmente, esse tipo de email é mais curto, buscando enviar o máximo de informações o quanto antes. Se possível, no próprio título da mensagem.</p>
<h5>2. Emails de Nutrição</h5>
<p>Emails de nutrição são aqueles que&nbsp;<strong>influenciam o leitor a tomar uma ação específica no seu site ou blog</strong>.</p>
<p>Muitas vezes, a jornada do cliente pode demorar mais do que você gostaria. Por isso, a nutrição de leads pode acelerar esse processo e tornar a sua base mais preparada para o momento da compra.</p>
<p>Mensagens desse tipo também devem ser objetivas e levar o usuário da caixa de entrada para o seu domínio, oferecendo conteúdos que o levará a prosseguir no funil de vendas.</p>
<h5>3. Emails Educacionais</h5>
<p>Emails educacionais são muito úteis e devem ser a maior parte do conteúdo que você envia. Simplesmente porque <a href="https://rockcontent.com/br/blog/conteudo-educacional/" target="_blank" rel="noreferrer noopener" aria-label="conteúdo educacional (abre numa nova aba)">conteúdo educacional</a> é aquele&nbsp;<strong>focado em solucionar problemas e dúvidas</strong>.</p>
<p>No fundo, essa é a principal razão pela qual o usuário assina o seu conteúdo.</p>
<p>Utilize-o para enviar posts relevantes, materiais selecionados por você, conteúdo exclusivo e o que mais a sua audiência buscar.</p>
<h5>4. Emails Transacionais</h5>
<p>Este tipo de email é muito importante, e precisa ser usado com sabedoria. Emails que sugerem uma transação ou oferta precisam ser enviados de maneira que o recebedor não perceba nenhum exagero.</p>
<p>Uma boa prática é manter a sua base de emails sempre limpa, somente com usuários que realmente são considerados personas.</p>
<p>Além disso, emails transacionais&nbsp;<strong>devem ser focados na conversão do usuário</strong>, o que define o tom de voz da mensagem, um bom call to action e um link direto.</p>
<h5>5. Newsletter</h5>
<p><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/melhores-newsletters/" target="_blank">Newsletters</a>&nbsp;são um tipo recorrente de mailing. Ao assiná-lo, o usuário espera que suas mensagens cheguem com uma determinada frequência.&nbsp;</p>
<p><strong>É como um jornal em que você pode ofertar conteúdos, divulgar materiais, escrever mensagens e dialogar com a sua base.</strong></p>
<h3>SEO</h3>
<p>Em uma estratégia de Marketing Digital, ser encontrado em mecanismos de busca é essencial, certo? E, para isso, existe um conceito específico para<strong>&nbsp;obter resultados organicamente</strong>, ou seja, sem pagar por anúncios.</p>
<p>É o que chamamos de otimização para mecanismos de busca, Search Engine Optimization ou SEO.</p>
<p>Hoje, motores de busca esperam oferecer os melhores resultados para a experiência do usuário. Existem diversas técnicas que você deve aplicar para mostrar aos buscadores que o seu site pode prover a melhor experiência e, assim, melhorar seus rankings.</p>
<p>Otimizar suas páginas significa deixá-las compreensíveis tanto para as pessoas quanto para os&nbsp;<a href="https://rockcontent.com/br/blog/web-crawler/" target="_blank" rel="noreferrer noopener">crawlers</a>. E isso vai depender da sua performance em uma combinação de diversos fatores de rankeamento. Existem dois grupos de fatores de rankeamento, que explicaremos a seguir:</p>
<h4>SEO On Page</h4>
<p>Os fatores On Page são aqueles que podem ser otimizados dentro das suas páginas, como título, meta-descrição, linkagem interna, uso de heading tags etc. Tudo isso melhora a experiência do usuário, mas também é lido pelos crawlers, como o&nbsp;<a href="https://rockcontent.com/br/blog/googlebot/" target="_blank" rel="noreferrer noopener">Google Bot</a>.</p>
<p>Por isso, você pode ter um conteúdo muito atrativo, mas é preciso demonstrar isso aos robôs por meios de estruturas de dados. É preciso usar o código para referenciar o seu título, seus meta atributos, suas&nbsp;<a href="https://rockcontent.com/br/blog/marketing-de-conteudo-visual/" target="_blank" rel="noreferrer noopener">imagens</a>, hiperlinks.</p>
<h4>SEO Off Page</h4>
<p>E não para por aí! Fatores externos também influenciam em seu rankeamento, como o tempo de carregamento do seu site, seus parâmetros de segurança, links recebidos etc.</p>
<p>Se você quiser entender mais sobre SEO e os diferentes fatores de rankeamento, recomendo a leitura do&nbsp;<a href="https://materiais.rockcontent.com/guia-seo-rockcontent?utm_source=mktc&amp;utm_medium=marketing-digital" target="_blank" rel="noreferrer noopener">Guia Completo de SEO</a>.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/guia-seo-rockcontent?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="34960" data-cta-title="[PT] Guia Completo de SEO"><picture class="attachment-full size-full" title="[PT] Guia Completo de SEO">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png.webp 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20751%20201'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 751px) 100vw, 751px">
<img width="751" height="201" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20751%20201'%3E%3C/svg%3E" alt="Guia completo de SEO" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1-300x80.png 300w" data-lazy-sizes="(max-width: 751px) 100vw, 751px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[PT] Guia Completo de SEO">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png.webp 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1-300x80.png.webp 300w" sizes="(max-width: 751px) 100vw, 751px"/>
<img width="751" height="201" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png" alt="Guia completo de SEO" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1.png 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/Banner-de-final-de-post-750x200-1-300x80.png 300w" sizes="(max-width: 751px) 100vw, 751px"/>
</picture>
</noscript></a></div>
<h3>SEM</h3>
<p><a href="https://rockcontent.com/br/blog/o-que-e-sem/" target="_blank" rel="noreferrer noopener">Search Engine Marketing</a>. Esse nome já diz tudo. Motores de busca são úteis para estratégias digitais que envolvam mídias orgânicas ou pagas. Ao fazer uma busca, esses mecanismos vão te retornar uma lista de links úteis, e alguns deles serão anúncios.</p>
<p>Por isso, marketing em motores de busca é um processo bastante abrangente. Até mesmo o SEO está contido no SEM!</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><img width="1024" height="549" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20549'%3E%3C/svg%3E" alt="Resultados do Google - Inbound Marketing" class="wp-image-12839" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-1024x549.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-300x161.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-768x411.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing.png 1400w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-1024x549.png"><noscript><img width="1024" height="549" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-1024x549.png" alt="Resultados do Google - Inbound Marketing" class="wp-image-12839" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-1024x549.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-300x161.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing-768x411.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/google-inbound-marketing.png 1400w" sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><figcaption>Resultados de busca do Google.</figcaption></figure></div>
<p>Hoje, é praticamente impossível que o Search Engine Marketing não seja peça importante de qualquer estratégia de marketing na internet. E, para isso, você deve atacar de todos os lados!</p>
<p>Ao exibir anúncios ou links orgânicos, acima de tudo, os motores de busca estão&nbsp;<strong>preocupados com a experiência do usuário</strong>&nbsp;e é assim que se atinge usuários que têm intenções comerciais ao realizar uma busca.</p>
<p>Além do crescimento orgânico, mídias pagas oferecem oportunidades únicas de crescimento. As ferramentas e técnicas de&nbsp;<a href="https://rockcontent.com/br/blog/google-analytics/" target="_blank" rel="noreferrer noopener">analytics</a>&nbsp;permitem encontrar o caminho para um retorno sobre investimento positivo.</p>
<p>E, se investir em&nbsp;<a href="https://rockcontent.com/br/blog/google-adwords/" target="_blank" rel="noreferrer noopener">anúncios na internet</a>&nbsp;pode trazer muito mais lucros do que custos, por que não tentar? </p>
<p>Se ainda não te convencemos, aprenda um pouco a seguir:</p>
<h3>Publicidade</h3>
<p>Na internet, hoje, existem três tipos de mídias:</p>
<ul><li><strong>Mídias adquiridas:</strong>&nbsp;vêm da interação com o público, representam o engajamento, os compartilhamentos, comentários e menções;</li><li><strong>Mídias possuídas:</strong>&nbsp;são aquelas que pertencem a alguém, os websites, blogs, perfis em mídias sociais;</li><li><strong>Mídias pagas:</strong>&nbsp;é a promoção do seu conteúdo por meio de anúncios, como pay-per-click (PPC), displays, retargeting, propagandas em redes sociais e promoção de conteúdos.</li></ul>
<div class="wp-block-image"><figure class="aligncenter size-large"><img width="1024" height="895" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20895'%3E%3C/svg%3E" alt="Mídias online" class="wp-image-12897" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-1024x895.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-300x262.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-768x672.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online.png 1402w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-1024x895.png"><noscript><img width="1024" height="895" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-1024x895.png" alt="Mídias online" class="wp-image-12897" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-1024x895.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-300x262.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online-768x672.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/midias-online.png 1402w" sizes="(max-width: 1024px) 100vw, 1024px" /></noscript></figure></div>
<p>Essa combinação de mídias é que vai definir o melhor jeito de conquistar a sua audiência. Nunca desconsidere nenhuma delas.</p>
<p>Evidentemente, resultados orgânicos são excelentes ao longo prazo, mas não têm a mesma velocidade e opções da publicidade online. Conheça agora algumas modalidades de anúncios:</p>
<h4>Pay-per-click (PPC)</h4>
<p><a href="https://rockcontent.com/br/blog/custo-por-clique/" target="_blank" rel="noreferrer noopener">PPC</a>&nbsp;é a compra de mídias que são cobradas mediante o número de cliques recebidos pelo seu anúncio. O tipo mais comum de pay-per-click são anúncios em mecanismos de busca.</p>
<p>Assim, na página de resultados do Google, por exemplo, existem&nbsp;<a href="https://rockcontent.com/br/blog/o-que-e-trafego-organico/" target="_blank" rel="noreferrer noopener">links orgânicos</a>&nbsp;e pagos.</p>
<p>Se você for um anunciante, é possível posicionar o seu anúncio utilizando palavras-chave e variações delas. E o usuário, ao realizar a busca, encontrará esses links patrocinados na SERP.</p>
<h4>Display Ads</h4>
<p>Um display ou banner é uma mistura de imagens e texto. Anúncios de display geralmente não aparecem em páginas de resultados de busca, mas em sites que fazem parte da rede de anunciantes escolhida.</p>
<h4>Retargeting</h4>
<p>Retargeting — não confunda com&nbsp;<a href="https://rockcontent.com/br/blog/remarketing/" target="_blank" rel="noreferrer noopener">Remarketing</a>&nbsp;— são banners que aparecem para o usuário depois que ele visita algum site ou pratica determinada ação. Aqui, a ideia é fazer o seu anúncio ser lembrado pelas pessoas, retomando o engajamento com o seu funil de vendas.</p>
<p>Ao visitar um determinado site, por exemplo, possivelmente mais anúncios desse site aparecerão para você quando você visitar algum site que faça parte da rede de anunciantes.</p>
<h4>Promoção de conteúdo</h4>
<p><a href="https://rockcontent.com/br/blog/promocao-de-conteudo/" target="_blank" rel="noreferrer noopener">Promoção</a>&nbsp;é uma alternativa de mídia paga interessante para quem faz marketing de conteúdo. A web está repleta de conteúdos incríveis e ganhar destaque pode ser difícil.</p>
<p>Existem meios gratuitos de divulgação, tais quais as mídias sociais. No entanto, se você quer acelerar esse processo, é possível transformar a chamada para o seu conteúdo em anúncio.</p>
<p>Assim, você terá uma exibição privilegiada em motores de busca e redes sociais, além de poder segmentar o público para quem ele é exibido.</p>
<h4>Anúncios em redes sociais</h4>
<p>Assim como há anúncios em resultados de busca, eles também podem ser exibidos em mídias sociais. A&nbsp;<a href="https://rockcontent.com/br/blog/anuncios-que-convertem-facebook/" target="_blank" rel="noreferrer noopener">rede do Facebook</a>&nbsp;— que inclui outras mídias, como o Instagram —, possui a sua própria rede de&nbsp;<em>advertisements</em>.</p>
<p>Assim, de acordo com as suas preferências, interesses e perfis que visita, a rede exibirá anúncios específicos para esse usuário. Cada uma das mídias sociais possui diferentes opções de segmentação e isso faz toda a diferença na performance desses anúncios.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/facebook-ads?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="34847" data-cta-title="[PT] Guia do Facebook Ads"><picture class="attachment-full size-full" title="[PT] Guia do Facebook Ads">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20201'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="201" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20201'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[PT] Guia do Facebook Ads">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="201" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png" alt="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/02/facebook-ads-banner-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<h3>Marketing de afiliados</h3>
<p>Uma forma muito comum de gerar receita com Marketing Digital é por meio de&nbsp;<a href="https://rockcontent.com/br/blog/marketing-de-afiliados/" target="_blank" rel="noreferrer noopener">afiliados</a>. Se você vende algum produto ou serviço, pode criar uma rede de blogs e sites que podem comercializar o seu produto em troca de uma comissão.</p>
<p>Da mesma forma, se você é dono de um blog ou site e recebe bastante tráfego, você pode ser remunerado para facilitar ou gerar vendas para um produtor. Geralmente isso é feito por meio de um banner ou de conteúdos patrocinados.</p>
<h3>Gestão de Leads</h3>
<p>Gerir leads&nbsp;significa rastrear e levar possíveis clientes desde a primeira conversão até a venda e ao pós-venda. Esse assunto do Marketing Digital também é conhecido como gestão de aquisição de clientes ou gestão de contatos.</p>
<p>Além disso, frequentemente, a gestão de leads é confundida com a nutrição de leads. Veremos que a nutrição de leads é uma parte do processo de gestão de leads.</p>
<p>Confira as etapas desse processo:</p>
<ol><li><strong>Geração de Leads:</strong>&nbsp;é a arte de encontrar usuários potencialmente interessados em seu negócio. A geração de leads se dá em pontos de conversão taticamente posicionados em emails, anúncios, conteúdos, ferramentas etc;</li><li><strong>Geração de Leads Qualificados:&nbsp;</strong>mais do que simplesmente gerar novos contatos, leads qualificados são aqueles identificados como oportunidades de venda. São pessoas mais “adiantadas” no funil;</li><li><strong>Qualificação de Leads:</strong>&nbsp;qualificar leads significa analisá-los de maneira mais precisa, classificando as melhores oportunidades de acordo com o seu comportamento registrado. Times de marketing e vendas frequentemente têm especialistas em qualificação de contatos;</li><li><strong>Nutrição de Leads:</strong>&nbsp;nutrir leads significa oferecer conteúdo relevante para a sua base de contatos, de maneira a fazê-los prosseguir no funil de vendas. Hoje, o email é um método bastante eficiente de nutrição de leads, mas há novidades interessantes, como o&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/account-based-marketing/" target="_blank">account-based marketing</a>.</li></ol>
<p>À medida que a sua base de leads cresce, seu processo de gestão de leads precisa se tornar escalável.</p>
<p>Uma base de contatos pode chegar a centenas de milhares e até milhões de pessoas. Isso provoca a necessidade de lidar com sistemas mais robustos, mecanismos complexos de rastreamento de atividades e padronização das mensagens enviadas.</p>
<p>E não para por aí. Mesmo após a venda, os clientes não deixam de ser leads dentro da base. Afinal, é preciso encontrar mecanismos de&nbsp;<a href="https://rockcontent.com/br/blog/upsell/" target="_blank" rel="noreferrer noopener">upsell</a>, cross-sell e retenção de clientes.</p>
<p>É preciso lembrar que o funil de vendas não termina na venda, mas sim no momento em que os clientes se tornam defensores da sua marca.</p>
<p>Se você deseja criar mensagens customizadas, segmentadas de acordo com os diferentes perfis de contatos presentes em sua base, é preciso recorrer à tecnologia. Quanto maior é o número de leads, mais complexa fica essa administração.</p>
<p>Para isso, softwares de automação são essenciais a partir de um nível mínimo de performance.</p>
<b>Aprenda a gerar leads e automatizar a sua estratégia!</b><br> <a href="https://materiais.rockcontent.com/geracao-de-leads" target="_blank" rel="noopener noreferrer">Geração de leads: o guia completo para converter oportunidades</a><br>
<h3>Automação de marketing</h3>
<p>Como mencionamos, é muito difícil gerir uma grande base de leads. Para se comunicar com milhares — talvez milhões — de pessoas, é preciso uma ferramenta que consiga organizar e rastrear todos esses registros.</p>
<p>É por isso que, mais do que uma técnica, a&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/automacao-de-marketing/" target="_blank">automação de marketing</a>&nbsp;é um tipo de tecnologia do Marketing Digital. Por meio dela, é possível agilizar todas essas necessidades.</p>
<p>Frequentemente, esses softwares possuem soluções para criar fluxos de trabalho e de comunicação. É como se fosse uma mistura entre sistemas de armazenamento, análise de dados e engajamento dos contatos.</p>
<p>Dessa forma, é possível segmentar a sua base em relação ao perfil, ao comportamento e às suas ações realizadas e — para cada um desses critérios — fornecer uma série de incentivos para a conversão e, por fim, ao encantamento do usuário.</p>
<p>A competição pelas melhores ferramentas de automação têm crescido muito e esse mercado tem se revelado muito promissor no mundo do marketing. Estima-se que até 2025 esse mercado alcance uma capitalização de&nbsp;<a href="https://www.grandviewresearch.com/press-release/global-marketing-automation-software-market" target="_blank" rel="noreferrer noopener">mais de US$7 bilhões</a>!</p>
<div class="rock-convert-banner"><a href="https://interactive.rockcontent.com/pt/ion-improve-conversions/?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="56723" data-cta-title="[PTBR] Como o conteúdo interativo pode melhorar a geração de demanda?"><picture class="attachment-full size-full" title="[PTBR] Como o conteúdo interativo pode melhorar a geração de demanda?">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png.webp 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20751%20201'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 751px) 100vw, 751px">
<img width="751" height="201" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20751%20201'%3E%3C/svg%3E" alt="Como o conteúdo interativo pode melhorar a geração de demanda?" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1-300x80.png 300w" data-lazy-sizes="(max-width: 751px) 100vw, 751px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[PTBR] Como o conteúdo interativo pode melhorar a geração de demanda?">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png.webp 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1-300x80.png.webp 300w" sizes="(max-width: 751px) 100vw, 751px"/>
<img width="751" height="201" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png" alt="Como o conteúdo interativo pode melhorar a geração de demanda?" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1.png 751w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/02/Blogpost-banner-750x200-1-300x80.png 300w" sizes="(max-width: 751px) 100vw, 751px"/>
</picture>
</noscript></a></div>
<h3>Otimização de Conversão – CRO</h3>
<p>Um dos termos mais utilizados em Marketing Digital é a conversão, certo? O processo de trazer o público para a sua base de contatos e fazê-los chegar até o fundo do funil de vendas.</p>
<p>O objetivo da&nbsp;<a href="https://rockcontent.com/br/blog/o-que-e-cross-sell/" target="_blank" rel="noreferrer noopener">otimização da conversão</a>&nbsp;— ou Convert Rate Optimization — é descobrir&nbsp;<strong>onde as conversões não estão sendo aproveitadas corretamente</strong>&nbsp;dentro de um blog ou site. E os melhores jeitos de fazer isso são análise de dados e testes!</p>
<p>Antes de tomar a decisão sobre quais modificações fazer para aumentar as taxas de conversão, um profissional de CRO realiza um diagnóstico lógico. Ele é dividido em cinco etapas, descritas a seguir.</p>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="971" height="1000" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20971%201000'%3E%3C/svg%3E" alt="Diagnóstico lógico da Otimização de Conversão" class="wp-image-12836" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro.png 971w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro-291x300.png 291w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro-768x791.png 768w" data-lazy-sizes="(max-width: 971px) 100vw, 971px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro.png"><noscript><img width="971" height="1000" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro.png" alt="Diagnóstico lógico da Otimização de Conversão" class="wp-image-12836" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro.png 971w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro-291x300.png 291w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/fases-cro-768x791.png 768w" sizes="(max-width: 971px) 100vw, 971px" /></noscript></figure></div>
<h4>1. Levantando hipóteses</h4>
<p>CROs geralmente têm meios de obtenção de dados em todos os seus canais. Ferramentas como o&nbsp;<a href="https://rockcontent.com/br/blog/google-tag-manager/" target="_blank" rel="noreferrer noopener">Google Tag Manager</a>&nbsp;permitem a instalação de aplicativos de monitoramento dos usuários em diversos sites e blogs ao mesmo tempo.</p>
<p>Assim, é possível entender porque há pessoas que visitam o blog mas não prosseguem no funil. A partir daí, basta criar ações focadas no público que realmente quer fazer parte da sua rede.</p>
<h4>2. Principais métricas</h4>
<p>Depois de levantar uma hipótese, é hora de transformar essa ideia em algo&nbsp;<strong>mensurável</strong>, e isso não é uma tarefa fácil!</p>
<p>Utilizando as ferramentas certas, podemos obter todos os tipos de dados. Tantos, que podemos até nos perder em tanta informação — e isso é sério! Olhar para as métricas corretas vai te gerar muita economia de tempo e dinheiro.</p>
<p>Evidentemente, qualquer um deseja gerar mais receita, ter mais e melhores clientes. Mas, para isso, é preciso&nbsp;<strong>descobrir o que gera mais receita</strong>&nbsp;e quebrá-los em medidas para cada etapa da jornada de compra.</p>
<p>Métricas de marketing, portanto, podem ser divididas de acordo com o funil de vendas, da atração até o pós-venda!</p>
<h5>Métricas de conversão</h5>
<p>Por que otimização para a conversão? É simples. Existe uma relação direta entre a quantidade de conversões e a quantidade de receita gerada pelo seu negócio.</p>
<p>E, em qualquer página, há uma infinidade de razões pela qual as pessoas&nbsp;<strong>não convertem</strong>.</p>
<p>Por isso, investir em pontos de melhoria de conversão vão refletir em alguns números importantes, que são:</p>
<ul><li><strong>Número de leads:</strong>&nbsp;representa a quantidade de leads gerados. Essa métrica funciona como um parâmetro de desempenho ao longo do tempo. Afinal, o tráfego tende a crescer e, com isso, sua taxa de criação de leads deve acompanhá-lo;</li><li><strong>Custo por lead:</strong>&nbsp;o CPL determina a qualidade dos leads que você recebe. Portanto, o custo de geração de um novo lead deve se manter sempre baixo em relação ao custo de aquisição de um novo cliente;</li><li><strong>Número de usuários:</strong>&nbsp;milhares, talvez milhões de pessoas vão converter nas suas páginas, mas esse número é grande ou pequeno em relação à quantidade de usuários que navegam pelo seu domínio? É o que essa métrica procura responder;</li><li><strong>Taxa de conversão de leads para sales qualified leads:</strong>&nbsp;por fim, não podemos ignorar o funil. Nem todos os leads estão no mesmo estágio da jornada de compra e, por isso, esse estágio que transita entre meio e fundo de funil precisa ser observado.</li></ul>
<h5>Métricas de receita</h5>
<p>Métricas de receita não devem ser observadas separadamente das métricas de conversão. O objetivo da conversão é levar o usuário até a compra e, aqui, vamos diferenciá-las por questão metodológica.</p>
<ul><li><strong>Custo de aquisição de cliente:</strong>&nbsp;uma estratégia de marketing pode ter custos em tempo, dinheiro e outros recursos. Por isso, é preciso calcular quanto, em média, gastamos para adquirir um novo cliente;</li><li><strong><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/lifetime-value/" target="_blank">Lifetime Value</a>:&nbsp;</strong>também conhecido como LTV, ele representa, em média, a receita gerada pelo cliente em todo o seu ciclo de vida;</li><li><strong>Número de clientes:</strong>&nbsp;como estamos falando de um funil, é natural que haja bem menos clientes do que leads. Sendo assim, essa métrica responde quais seus pontos de conversão mais geram clientes e se a quantidade de clientes está alinhada com a receita;</li><li><strong>Lucro:</strong>&nbsp;por fim, a otimização das conversões deve impactar o lucro. Esse número vai dizer se os investimentos e custos têm valido a pena. Vale lembrar que lucros negativos representam prejuízo.</li></ul>
<h4>3. Calculando a relevância</h4>
<p>Antes de um processo de otimização de conversão ser implantado, primeiro é preciso&nbsp;<strong>definir o que são resultados confiáveis</strong>.</p>
<p>Portanto, é preciso ter uma população definida e amostras de tamanho razoável para conduzir os testes.</p>
<p>E isso não é tarefa fácil. Em uma amostra muito pequena, os resultados se tornam muito sensíveis às variações, sejam elas positivas ou negativas. Contudo, uma amostra muito grande — embora não seja ruim estatisticamente — pode ser um desperdício de tempo e recursos com testes.</p>
<h4>4. Criando testes</h4>
<p>Criar testes é uma arte. Na verdade, esse assunto pode render um livro inteiro. Graças às mídias digitais, é possível realizar dezenas (às vezes centenas!) de testes ao mesmo tempo.</p>
<p>Assim, a fase de realização de testes pode ser divida em outras fases menores.</p>
<p>De maneira preliminar, são testadas diversas hipóteses. Após a coleta dos resultados, os melhores são levados adiante, mas o processo não para por aí.</p>
<p>Em seguida, são determinadas hipóteses de como os melhores resultados podem ser trabalhados para gerar ainda mais resultados, reiniciando o ciclo.</p>
<p>Somente quando os melhores resultados tiverem melhorias positivas é que o profissional de CRO terá provas suficientes de que melhorias definitivas foram implementadas.</p>
<h4>5. Analisando resultados</h4>
<p>Embora não pareça, essa fase é bastante complicada. Não somente pela visualização dos dados, mas também pela confiança no processo. Para conseguir resultados confiáveis é preciso:</p>
<ol><li><strong>Configurar todas as etapas de conversão.&nbsp;</strong>Muitas vezes isso envolve diversos softwares, e é preciso se assegurar de que os resultados que chegam para você estão corretos. Um erro no início do processo vai confundir quem analisa os dados;</li><li><strong>Olhar para as métricas corretas.&nbsp;</strong>Muitos leads não necessariamente significam mais receita. Em contrapartida, leads que se tornam clientes cujo custo de aquisição é muito alto nem sempre serão um bom negócio. Isso varia em cada segmento e somente quem analisa os dados pode definir o melhor parâmetro;</li><li><strong>A análise correta dos resultados vai definir a tomada de decisão.&nbsp;</strong>Analisá-los incorretamente pode levar a ações ineficientes ou mesmo prejudiciais e, pior ainda, confundir totalmente a equipe de marketing.</li></ol>
<p>Logo, é preciso verificar cada ponto de conversão, garantir que as informações estejam chegando corretamente no seu&nbsp;<a href="https://rockcontent.com/br/blog/o-que-e-crm/" target="_blank" rel="noreferrer noopener">CRM</a>&nbsp;ou software de automação de marketing e questionar até mesmo as hipóteses mais óbvias.</p>
<h3>Outras estratégias e canais de Marketing Digital</h3>
<h4>Podcasts e posts em áudio</h4>
<p>Conteúdos em áudio são uma tendência cada vez maior, principalmente com a popularização dos&nbsp;<a href="https://rockcontent.com/br/blog/podcasts-guia/" target="_blank" rel="noreferrer noopener">podcasts</a>.</p>
<p>Eles permitem uma maior facilidade de consumo por parte do usuário, já que podem ser acessados, por exemplo, de um dispositivo móvel para ouvir enquanto está andando, dirigindo ou apenas longe de um computador.</p>
<p>Além disso, vale lembrar que o&nbsp;<a href="https://rockcontent.com/br/blog/audio-marketing/" target="_blank" rel="noreferrer noopener">Áudio Marketing</a>&nbsp;é uma das grandes apostas do futuro, principalmente por causa do surgimento de tecnologias de assistência virtual como a Alexa, da Amazon, e a Cortana, da Microsoft.</p>
<h4>Ferramentas e apps</h4>
<p>Aplicativos são extremamente interessantes para diversos nichos. Eles permitem uma maior interação entre o usuário e marcas, além de serem um espaço exclusivo da empresa.</p>
<p>Com eles, você pode incentivar o usuário a ficar mais tempo em contato com o seu domínio e aumentar o valor percebido pelo público.</p>
<h5>Notificações Push</h5>
<p>Um exemplo de ferramenta que pode ser definitiva para a melhora dos resultados do seu site são as&nbsp;<a href="https://rockcontent.com/br/blog/notificacoes-push/" target="_blank" rel="noreferrer noopener">notificações via push</a>.</p>
<p>Basicamente, elas funcionam como pequenos alertas clicáveis que aparecem no dispositivo dos usuários inscritos, podendo conter CTAs para blog posts, materiais ricos, landing pages e muitos outros.</p>
<p>Por funcionarem como um tipo de alerta, essas notificações garantem altos índices de conversão e podem funcionar tanto em desktop quanto em mobile.</p>
<h5>Chatbots</h5>
<p>Os&nbsp;<a href="https://rockcontent.com/br/blog/chatbots/" target="_blank" rel="noreferrer noopener">chatbots</a>, robôs de comunicação automatizada, são ferramentas excelentes para adicionar na sua estratégia digital.</p>
<p>Além de auxiliarem no processo de otimização do atendimento de clientes em sites e redes sociais, esses bots podem ser utilizados para melhorar o relacionamento com leads e clientes, divulgar informações importantes e até mesmo gerar vendas.</p>
<h4>Blogs e sites parceiros</h4>
<p>Publicar materiais com links para o seu domínio em outros blogs virou uma tática essencial do Marketing Online. Vale lembrar que o volume e a qualidade dos backlinks são importantes fatores de rankeamento no Google.</p>
<p>Assim, você pode criar um conteúdo relevante para publicar no blog de um parceiro, por exemplo. Assim, todo mundo sai ganhando.</p>
<p>Vamos continuar explicando como estruturar seu plano de Marketing Digital. Se você quer continuar sempre com este material, pode baixá-lo agora mesmo!</p>
<span id="rock-3"></span><h2>Plano de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Plano de Marketing Digital" class="wp-image-12926" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital.png" alt="Plano de Marketing Digital" class="wp-image-12926" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/plano_de_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Para criar uma estratégia de Marketing Digital, é preciso começar estabelecendo objetivos, certo? E, para você alcançar os seus objetivos de marketing, o melhor caminho é planejar diferentes ações possíveis.</p>
<p>Ao tentar prever os possíveis cenários e documentar um&nbsp;<em>roadmap</em>&nbsp;de ações, estamos falando da criação de um&nbsp;<a href="https://rockcontent.com/br/blog/como-fazer-um-bom-plano-de-marketing/" target="_blank" rel="noreferrer noopener">plano de marketing</a>, em que todas as fontes de informação possíveis são utilizadas.</p>
<p>Por exemplo, se você deseja gerar mais vendas, um objetivo de marketing pode ser um aumento percentual da quantidade de leads qualificadas.</p>
<p>A partir disso, considerando a sua persona, os seus recursos disponíveis e o cenário em que seu negócio se encontra, é possível estabelecer um plano para fazer esse objetivo acontecer!</p>
<p>Mas como unir tantos elementos de uma vez?</p>
<p>Pode parecer muito complexo, mas existem alguns passos que comprovadamente ajudam (muito!) na estruturação de um plano.</p>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/planejamento-de-marketing?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="52559" data-cta-title="Planejamento de marketing para 2022"><picture class="attachment-full size-full" title="Planejamento de marketing para 2022">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="200" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" alt="[Kit] Planejamento de Marketing 2022" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png">
</picture>
<noscript><picture class="attachment-full size-full" title="Planejamento de marketing para 2022">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="200" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png" alt="[Kit] Planejamento de Marketing 2022" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/KIT-Planejamento-MKT-2022-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<h3>1. Definição dos objetivos</h3>
<p>Ao definir um plano, é importante cobrir diferentes tipos de objetivos. Isso porque, muitas vezes, objetivos maiores dependem do cumprimento de várias pequenas metas. É o que chamamos de objetivos principais e secundários.</p>
<p>Além da complexidade, o prazo também é muito importante. Portanto, um bom planejamento contempla objetivos de curto, médio e longo prazo.</p>
<p>Sendo esse o primeiro passo de um plano de marketing, sua relevância é incalculável. Errar na definição dos objetivos pode comprometer a estratégia como um todo.</p>
<p><strong>E, para eliminar essa possibilidade, existe uma&nbsp;<em>framework</em>&nbsp;muito popular para isso, o&nbsp;<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/metas-smart/" target="_blank">SMART</a>.&nbsp;</strong>SMART é a sigla em inglês para as características essenciais de um objetivo de marketing.</p>
<p>Logo, um objetivo de marketing é relevante desde que seja:</p>
<ul><li><strong>Specific ou específico:</strong>&nbsp;todos os envolvidos devem ter claro entendimento do que se trata;</li><li><strong>Measurable ou mensurável:</strong>&nbsp;não faz sentido criar uma meta se ela não puder ser medida ou tiver critérios subjetivos, certo?</li><li><strong>Actionable ou atingível:&nbsp;</strong>objetivos fáceis levam ao desperdício de oportunidades, e objetivos difíceis demais podem desmotivar o time. As metas mais bem elaboradas são simultaneamente desafiadoras e realistas;</li><li><strong>Relevant ou relevante:</strong>&nbsp;ao estabelecer um objetivo, certifique-se de que ele é crucial para o seu negócio;</li><li><strong>Time-bound ou temporal:</strong>&nbsp;toda meta precisa ter um prazo para ser alcançada. Evidentemente, metas para um mês, trimestre ou ano têm características diferentes.</li></ul>
<h3>2. Criação de Indicadores-chave de Performance (KPIs)</h3>
<p>Objetivos sempre vêm acompanhados de indicadores. No entanto, em um mar de informações, é preciso&nbsp;<strong>olhar para os indicadores corretos</strong>. Eles mostrarão se você está percorrendo o caminho correto até o alcance dos objetivos.</p>
<p><a href="https://rockcontent.com/br/blog/kpi/" target="_blank" rel="noreferrer noopener">KPIs ou Key Performance Indicators</a>&nbsp;representam exatamente esse conceito.&nbsp;<strong>KPIs são números absolutos ou percentuais, que podem ser medidos, analisados e têm importância direta para o seu negócio.</strong></p>
<p>Por exemplo, você tem uma meta ligada à geração de tráfego? Então, o mínimo diário de visitas no seu site ou blog é um indicador válido.</p>
<p>Vale lembrar que KPIs podem ser indicadores de qualquer natureza, desde que sejam mensuráveis e relevantes. Métricas de marketing, por exemplo, podem ser indicadores-chave, como veremos em seguida.</p>
<h3>3. Detalhamento da Persona</h3>
<p>Quando falamos sobre personas no começo deste artigo, destacamos a importância que ela tem para uma estratégia. Aqui, o argumento é um reforço: invista tempo e recursos elaborando uma persona detalhada.</p>
<p>Procure usuários na sua base de leads, pessoas em mídias sociais (<a href="https://rockcontent.com/br/blog/seo-para-linkedin/" target="_blank" rel="noreferrer noopener">LinkedIn</a>&nbsp;e Facebook são ótimos para isso) e em pesquisas na internet. Se você já tem uma persona documentada, é possível expandi-la!</p>
<p>Além de perguntas como “quais são seus problemas?” ou “como podemos ajudar a persona a resolver esses problemas?”, explorar tópicos extras pode ser bastante elucidativo.</p>
<p>Quer complementar a análise da sua persona? Pergunte “quais livros ela lê?”, “quais são seus influencers favoritos?”, “quais eventos ela frequenta?”, “quais softwares ela utiliza?” e outros. O aprofundamento da sua persona resultará sempre na identificação de mais e melhores oportunidades.</p>
<div id="rock-contact-form" class="rock-hubspot-form rock-hubspot-form--blog">
<h3>Template de Plano de Marketing</h3>
<p>Preencha o seu email e receba um modelo de plano de marketing gratuitamente!</p>
<script data-hubspot-rendered="true">window.addEventListener("load", function(event) {
                hbspt.forms.create({
                    portalId: "355484",
                    css: '',
                    formId: "e9966bd5-9404-4cf7-8168-afba5e66300e"
                });
            });
            </script><div class="hbspt-form" id="hbspt-form-1650223325609-251304323"><form novalidate="" accept-charset="UTF-8" action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/355484/e9966bd5-9404-4cf7-8168-afba5e66300e" enctype="multipart/form-data" id="hsForm_e9966bd5-9404-4cf7-8168-afba5e66300e" method="POST" class="hs-form stacked hs-form-private hsForm_e9966bd5-9404-4cf7-8168-afba5e66300e hs-form-e9966bd5-9404-4cf7-8168-afba5e66300e hs-form-e9966bd5-9404-4cf7-8168-afba5e66300e_b6da8611-f539-4c38-97f1-428f328f62d0" data-form-id="e9966bd5-9404-4cf7-8168-afba5e66300e" data-portal-id="355484" target="target_iframe_e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1"><div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.1:$0"><label id="label-firstname-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Nome" for="firstname-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$0.0"><span data-reactid=".hbspt-forms-1.1:$0.0.0">Nome</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$0.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$0.$firstname"><input id="firstname-e9966bd5-9404-4cf7-8168-afba5e66300e" class="hs-input" type="text" name="firstname" value="" placeholder="" autocomplete="given-name" data-reactid=".hbspt-forms-1.1:$0.$firstname.0" inputmode="text"></div></div><noscript data-reactid=".hbspt-forms-1.1:$1"></noscript><div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.1:$2"><label id="label-email-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your E-mail" for="email-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$2.0"><span data-reactid=".hbspt-forms-1.1:$2.0.0">E-mail</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.1:$2.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$2.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$2.$email"><input id="email-e9966bd5-9404-4cf7-8168-afba5e66300e" class="hs-input" type="email" name="email" required="" placeholder="" value="" autocomplete="email" data-reactid=".hbspt-forms-1.1:$2.$email.0" inputmode="email"></div></div><div class="hs_phone hs-phone hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.1:$3"><label id="label-phone-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Telefone ou Celular" for="phone-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$3.0"><span data-reactid=".hbspt-forms-1.1:$3.0.0">Telefone ou Celular</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.1:$3.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$3.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$3.$phone"><input id="phone-e9966bd5-9404-4cf7-8168-afba5e66300e" class="hs-input" type="tel" name="phone" required="" value="" placeholder="" autocomplete="tel" data-reactid=".hbspt-forms-1.1:$3.$phone.0" inputmode="tel"></div></div><div class="hs_website hs-website hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.1:$4"><label id="label-website-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Website URL" for="website-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$4.0"><span data-reactid=".hbspt-forms-1.1:$4.0.0">Website URL</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.1:$4.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$4.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$4.$website"><input id="website-e9966bd5-9404-4cf7-8168-afba5e66300e" class="hs-input" type="text" name="website" required="" value="" placeholder="" data-reactid=".hbspt-forms-1.1:$4.$website.0" inputmode="url"></div></div><div class="hs_numemployees hs-numemployees hs-fieldtype-select field hs-form-field" data-reactid=".hbspt-forms-1.1:$5"><label id="label-numemployees-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Número de Funcionários" for="numemployees-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$5.0"><span data-reactid=".hbspt-forms-1.1:$5.0.0">Número de Funcionários</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.1:$5.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$5.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$5.$numemployees"><select id="numemployees-e9966bd5-9404-4cf7-8168-afba5e66300e" required="" class="hs-input is-placeholder" name="numemployees" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0"><option value="" disabled="" selected="" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.0">Clique para selecionar</option><option value="1-5" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$1-5">1-5</option><option value="6-10" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$6-10">6-10</option><option value="11-50" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$11-50">11-50</option><option value="51-250" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$51-250">51-250</option><option value="251-1K" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$251-1K">251-1.000</option><option value="1K-5K" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$1K-5K">1.000-5.000</option><option value="5K-10K" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$5K-10K">5.000-10.000</option><option value="10K-50K" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$10K-50K">10.000-50.000</option><option value="50K-100K" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$50K-100K">50.000-100.000</option><option value="100K+" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$100K+">100.000+</option><option value="Não tenho empresa" data-reactid=".hbspt-forms-1.1:$5.$numemployees.0.1:$Não tenho empresa">Nenhuma das opções acima</option></select></div></div><div class="hs_declared_company_sub_industry hs-declared_company_sub_industry hs-fieldtype-select field hs-form-field" data-reactid=".hbspt-forms-1.1:$6"><label id="label-declared_company_sub_industry-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Qual segmento da empresa onde você trabalha?" for="declared_company_sub_industry-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$6.0"><span data-reactid=".hbspt-forms-1.1:$6.0.0">Qual segmento da empresa onde você trabalha?</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.1:$6.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$6.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry"><select id="declared_company_sub_industry-e9966bd5-9404-4cf7-8168-afba5e66300e" required="" class="hs-input is-placeholder" name="declared_company_sub_industry" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0"><option value="" disabled="" selected="" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.0">Selecione</option><option value="Construction" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Construction">Construção</option><option value="Consumer Goods" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Consumer Goods">Bens de Consumo</option><option value="Education" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Education">Educação</option><option value="Financial Services" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Financial Services">Serviços Financeiros</option><option value="Helthcare" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Helthcare">Serviços de Saúde</option><option value="Hotels, Restaurants &amp; Leisure" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Hotels, Restaurants &amp; Leisure">Hotéis, Restaurantes e Lazer</option><option value="Industrials" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Industrials">Indústria</option><option value="Advertising" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Advertising">Agência de Marketing</option><option value="Media" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Media">Mídia e Entretenimento</option><option value="Others" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Others">Others</option><option value="Real Estate" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Real Estate">Mercado Imobiliário</option><option value="Retailing" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Retailing">Varejo</option><option value="Transportation" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Transportation">Transportes e Logística</option><option value="Utilities" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Utilities">Mineiração, Óleo e Gás</option><option value="Information Technology" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Information Technology">Tecnologia da Informação</option><option value="Services" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Services">Serviços</option><option value="Government" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Government">Órgãos Governamentais</option><option value="Agro" data-reactid=".hbspt-forms-1.1:$6.$declared_company_sub_industry.0.1:$Agro">Agropecuária</option></select></div></div><div class="hs_recent_lead_conversion_page_url hs-recent_lead_conversion_page_url hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$7"><label id="label-recent_lead_conversion_page_url-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Recent Lead Conversion Page URL" for="recent_lead_conversion_page_url-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$7.0"><span data-reactid=".hbspt-forms-1.1:$7.0.0">Recent Lead Conversion Page URL</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$7.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$7.$recent_lead_conversion_page_url"><input name="recent_lead_conversion_page_url" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$7.$recent_lead_conversion_page_url.0"></div></div><div class="hs_base hs-base hs-fieldtype-select field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$8"><label id="label-base-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Base" for="base-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$8.0"><span data-reactid=".hbspt-forms-1.1:$8.0.0">Base</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$8.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$8.$base"><input name="base" class="hs-input" type="hidden" value="PTBR" data-reactid=".hbspt-forms-1.1:$8.$base.0"></div></div><div class="hs_blogconversionurl hs-blogconversionurl hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$9"><label id="label-blogconversionurl-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your blogconversionurl" for="blogconversionurl-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$9.0"><span data-reactid=".hbspt-forms-1.1:$9.0.0">blogconversionurl</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$9.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$9.$blogconversionurl"><input name="blogconversionurl" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$9.$blogconversionurl.0"></div></div><div class="hs_blogconversionpath hs-blogconversionpath hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$10"><label id="label-blogconversionpath-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your blogconversionpath" for="blogconversionpath-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$10.0"><span data-reactid=".hbspt-forms-1.1:$10.0.0">blogconversionpath</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$10.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$10.$blogconversionpath"><input name="blogconversionpath" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$10.$blogconversionpath.0"></div></div><div class="hs_blogconversiondate hs-blogconversiondate hs-fieldtype-date field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$11"><label id="label-blogconversiondate-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your blogconversiondate" for="blogconversiondate-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$11.0"><span data-reactid=".hbspt-forms-1.1:$11.0.0">blogconversiondate</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$11.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$11.$blogconversiondate"><input name="blogconversiondate" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$11.$blogconversiondate.0"></div></div><div class="hs_utm_campaign hs-utm_campaign hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$12"><label id="label-utm_campaign-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Campanhas de UTM" for="utm_campaign-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$12.0"><span data-reactid=".hbspt-forms-1.1:$12.0.0">Campanhas de UTM</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$12.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$12.$utm_campaign"><input name="utm_campaign" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$12.$utm_campaign.0"></div></div><div class="hs_utm_content hs-utm_content hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$13"><label id="label-utm_content-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Conteúdo de UTM" for="utm_content-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$13.0"><span data-reactid=".hbspt-forms-1.1:$13.0.0">Conteúdo de UTM</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$13.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$13.$utm_content"><input name="utm_content" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$13.$utm_content.0"></div></div><div class="hs_utm_medium hs-utm_medium hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$14"><label id="label-utm_medium-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Mídia de UTM" for="utm_medium-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$14.0"><span data-reactid=".hbspt-forms-1.1:$14.0.0">Mídia de UTM</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$14.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$14.$utm_medium"><input name="utm_medium" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$14.$utm_medium.0"></div></div><div class="hs_utm_source hs-utm_source hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$15"><label id="label-utm_source-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Fonte de UTM" for="utm_source-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$15.0"><span data-reactid=".hbspt-forms-1.1:$15.0.0">Fonte de UTM</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$15.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$15.$utm_source"><input name="utm_source" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$15.$utm_source.0"></div></div><div class="hs_utm_term hs-utm_term hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-1.1:$16"><label id="label-utm_term-e9966bd5-9404-4cf7-8168-afba5e66300e" class="" placeholder="Enter your Termo de UTM" for="utm_term-e9966bd5-9404-4cf7-8168-afba5e66300e" data-reactid=".hbspt-forms-1.1:$16.0"><span data-reactid=".hbspt-forms-1.1:$16.0.0">Termo de UTM</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.1:$16.1"></legend><div class="input" data-reactid=".hbspt-forms-1.1:$16.$utm_term"><input name="utm_term" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-1.1:$16.$utm_term.0"></div></div><div class="legal-consent-container" data-reactid=".hbspt-forms-1.2"><div class="hs-richtext" data-reactid=".hbspt-forms-1.2.2"><p>A Rock Content precisa das informações de contato que você nos fornece para comunicar informações sobre produtos e serviços. Você pode deixar de receber essas comunicações quando quiser. Para obter mais informações, confira nossa <a href="https://rockcontent.com/politica-de-privacidade/" target="_blank" rel="nofollow">Política de Privacidade</a>.</p></div></div><div class="hs_submit hs-submit" data-reactid=".hbspt-forms-1.5"><div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.5.0"></div><div class="actions" data-reactid=".hbspt-forms-1.5.1"><input type="submit" value="Receber material" class="hs-button primary large" data-reactid=".hbspt-forms-1.5.1.0"></div></div><noscript data-reactid=".hbspt-forms-1.6"></noscript><input name="hs_context" type="hidden" value="{&quot;rumScriptExecuteTime&quot;:4523.799999982119,&quot;rumServiceResponseTime&quot;:5714,&quot;rumFormRenderTime&quot;:4.5999999940395355,&quot;rumTotalRenderTime&quot;:5719.199999988079,&quot;rumTotalRequestTime&quot;:1179.2000000178814,&quot;lang&quot;:&quot;ptBR&quot;,&quot;legalConsentOptions&quot;:&quot;{\&quot;legitimateInterestSubscriptionTypes\&quot;:[1044978],\&quot;communicationConsentCheckboxes\&quot;:[{\&quot;communicationTypeId\&quot;:1044978,\&quot;label\&quot;:\&quot;<p>Eu aceito receber conteúdo educacional e promocional relacionado com os produtos e serviços da Rock Content.</p>\&quot;,\&quot;required\&quot;:false}],\&quot;legitimateInterestLegalBasis\&quot;:\&quot;LEGITIMATE_INTEREST_PQL\&quot;,\&quot;communicationConsentText\&quot;:\&quot;<p>A Rock Content tem o compromisso de proteger e respeitar sua privacidade e nós usaremos suas informações pessoais somente para administrar sua conta e fornecer os produtos e serviços que você nos solicitou. Ocasionalmente, gostaríamos de contatá-lo sobre os nossos produtos e serviços, também sobre outros assuntos que possam ser do seu interesse. Se você concorda em ser contatado com essa finalidade, marque abaixo para nos informar qual a forma de contato que você gostaria:</p>\&quot;,\&quot;processingConsentType\&quot;:\&quot;IMPLICIT\&quot;,\&quot;processingConsentText\&quot;:\&quot;<p>Para fornecer o conteúdo solicitado, precisamos armazenar e processar seus dados pessoais. Se você consentir com o armazenamento dos seus dados pessoais para essa finalidade, marque a caixa de seleção abaixo.</p>\&quot;,\&quot;processingConsentCheckboxLabel\&quot;:\&quot;<p>Eu concordo em permitir que a Rock Content armazene e processe meus dados pessoais.</p>\&quot;,\&quot;privacyPolicyText\&quot;:\&quot;<p>A Rock Content precisa das informações de contato que você nos fornece para comunicar informações sobre produtos e serviços. Você pode deixar de receber essas comunicações quando quiser. Para obter mais informações, confira nossa <a href=\\\&quot;https://rockcontent.com/politica-de-privacidade/\\\&quot; target=\\\&quot;_blank\\\&quot; rel=\\\&quot;nofollow\\\&quot;>Política de Privacidade</a>.</p>\&quot;,\&quot;isLegitimateInterest\&quot;:true}&quot;,&quot;embedAtTimestamp&quot;:&quot;1650223326540&quot;,&quot;formDefinitionUpdatedAt&quot;:&quot;1647378154473&quot;,&quot;pageUrl&quot;:&quot;https://rockcontent.com/br/blog/marketing-digital/&quot;,&quot;pageTitle&quot;:&quot;Marketing Digital: o que é, como fazer, estratégias e TUDO sobre!&quot;,&quot;source&quot;:&quot;FormsNext-static-5.478&quot;,&quot;sourceName&quot;:&quot;FormsNext&quot;,&quot;sourceVersion&quot;:&quot;5.478&quot;,&quot;sourceVersionMajor&quot;:&quot;5&quot;,&quot;sourceVersionMinor&quot;:&quot;478&quot;,&quot;timestamp&quot;:1650223326542,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;355484&quot;,&quot;formId&quot;:&quot;e9966bd5-9404-4cf7-8168-afba5e66300e&quot;,&quot;target&quot;:&quot;#hbspt-form-1650223325609-251304323&quot;},&quot;dateFields&quot;:&quot;blogconversiondate&quot;,&quot;renderedFieldsIds&quot;:[&quot;firstname&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;website&quot;,&quot;numemployees&quot;,&quot;declared_company_sub_industry&quot;],&quot;formTarget&quot;:&quot;#hbspt-form-1650223325609-251304323&quot;,&quot;correlationId&quot;:&quot;2c9b46c1-a90f-4317-a82b-fc8d618c96d8&quot;,&quot;hutk&quot;:&quot;67de532a17153c0fde38ed7663835ba8&quot;,&quot;captchaStatus&quot;:&quot;NOT_APPLICABLE&quot;}" data-reactid=".hbspt-forms-1.7"><iframe name="target_iframe_e9966bd5-9404-4cf7-8168-afba5e66300e" style="display:none;" data-reactid=".hbspt-forms-1.8" data-lf-yt-playback-inspected-jmvz8gkgqoe82pod="true"></iframe></form></div>
</div>
<span id="rock-4"></span><h2>Métricas de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Métricas de Marketing Digital" class="wp-image-12896" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital.png" alt="Métricas de Marketing Digital" class="wp-image-12896" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/metricas_de_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Uma das principais vantagens do Marketing Digital é ser mensurável. Assim, a possibilidade de documentar e avaliar as estratégias usadas permite uma compreensão da estratégia e a tomada de decisões baseadas em dados.</p>
<p>Antes da internet, provar o valor de uma ação de marketing era bem mais difícil. A falta de conhecimento motiva decisões ruins.</p>
<p>E, para você não cometê-las e extrair o melhor de todos os seus esforços,&nbsp;<strong>definir parâmetros de mensuração é essencial</strong>. É impossível ter sucesso sem usá-las corretamente.</p>
<p>Abaixo listamos algumas das mais importantes&nbsp;<a href="https://rockcontent.com/br/blog/metricas-de-marketing-digital/" target="_blank" rel="noreferrer noopener">métricas de marketing</a>, mas também recomendamos que você estude mais sobre o assunto ao criar uma estratégia.</p>
<p>A melhor forma de começar a observar as métricas corretas é obtendo alguns dados do seu blog ou site. Métricas comuns utilizadas em uma estratégia, são:</p>
<ul><li><strong>Visitantes Únicos:</strong>&nbsp;qual é o número de pessoas que acessam a sua página. Cada visitante é contado apenas uma vez dentro do período de tempo indicado;</li><li><strong>Sessões:&nbsp;</strong>é o conjunto de interações, tal qual as visualizações de página e cliques, que um mesmo usuário executa em um dado período;</li><li><strong>Tráfego Orgânico e Pago:&nbsp;</strong>representa a quantidade de sessões que são originadas de mecanismos de busca e campanhas pagas na web;</li><li><strong>Taxa de Rejeição:</strong>&nbsp;é a porcentagem de usuários que realizam apenas uma visita, sem realizar outras interações, como cliques e visualizações de páginas;</li><li><strong>Taxa de Conversão:</strong>&nbsp;é a porcentagem resultante entre o número de visitas e o número de conversões realizadas;</li><li><strong>Links Externos:</strong>&nbsp;é o volume e a qualidade de links vindos de outros domínios que direcionam para o seu site ou blog.</li></ul>
<p>Mas essas não são as únicas métricas de marketing. Na verdade, conhecer todas as métricas e escolher as que melhor se adequam ao seu negócio deve ser uma etapa no seu planejamento.</p>
<p>Por isso, vamos realizar um estudo aprofundado sobre algumas delas a seguir:</p>
<h3>Retorno Sobre Investimento</h3>
<p>Este é um fator que está diretamente ligado à lucratividade da sua estratégia. O&nbsp;<a href="https://rockcontent.com/br/blog/roi/" target="_blank" rel="noreferrer noopener">ROI</a>&nbsp;representa uma comparação entre o quanto você cresceu em vendas e o quanto você gastou.</p>
<p>Assim, a fórmula do ROI é:</p>
<p>ROI = retorno – custo do investimento / custo do investimento</p>
<p>Suponha que, somados todos os custos, seu investimento total em Marketing de Conteúdo foi de R$ 100 mil durante 1 ano.</p>
<p>Nesse período, essa estratégia foi responsável por 120 vendas com uma receita média de R$ 5.000,00, resultando um ROI de 5 ou 500%.</p>
<p>Logo, para cada real investido nessa suposta estratégia de Marketing de Conteúdo, 5 reais retornaram em forma de lucro – o que seria um ótimo resultado!</p>
<p>Quer calcular o seu ROI agora mesmo de forma simples? Então use a nossa calculadora interativa:</p>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><a href="https://materiais.rockcontent.com/conteudo-interativo-ion?utm_medium=referral&amp;utm_source=rock-blog&amp;utm_campaign=powered-by-link" target="_blank" rel="noreferrer noopener"><picture class="wp-image-39030">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg.webp 770w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-300x217.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-768x555.jpg.webp 768w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20770%20556'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 770px) 100vw, 770px">
<img width="770" height="556" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20770%20556'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg 770w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-300x217.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-768x555.jpg 768w" data-lazy-sizes="(max-width: 770px) 100vw, 770px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg">
</picture>
<noscript><picture class="wp-image-39030">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg.webp 770w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-300x217.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-768x555.jpg.webp 768w" sizes="(max-width: 770px) 100vw, 770px"/>
<img width="770" height="556" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg" alt="" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi.jpg 770w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-300x217.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/04/calculadora-de-roi-768x555.jpg 768w" sizes="(max-width: 770px) 100vw, 770px"/>
</picture>
</noscript></a></figure></div>
<h3>Custo de Aquisição de Clientes</h3>
<p>O <a href="https://rockcontent.com/br/blog/custo-de-aquisicao-de-clientes/" target="_blank" rel="noreferrer noopener" aria-label="CAC (abre numa nova aba)">CAC</a> nada mais é do que a relação entre o número de clientes e o seu gasto com Marketing Digital. Essa métrica busca responder à pergunta: “quanto eu preciso investir para atrair um novo cliente?”.</p>
<p>Assim, ela é calculada pela divisão dos seus custos destinados à aquisição de clientes pelo número de novos clientes no período.</p>
<p>Supondo que uma empresa gastou R$100 mil em marketing em um ano e adquiriu 120 novos clientes nesse ano, seu CAC é de R$833,33.</p>
<h3>Receita Mensal Recorrente (MRR)</h3>
<p>Também conhecida como <a href="https://rockcontent.com/br/blog/mrr/" target="_blank" rel="noreferrer noopener" aria-label="Monthly Recurrent Revenue (abre numa nova aba)">Monthly Recurrent Revenue</a>, é uma forma de prever a receita gerada. Essa métrica é muito comum em negócios que envolvam assinaturas, pois elas pressupõem pagamentos periódicos.</p>
<p>Essa medida facilita a análise de performance, sobretudo quando seus produtos têm uma grande variedade de preços.</p>
<p>Para exemplificar, pense em um contrato sendo pago em parcelas. Se um cliente adquire um serviço por R$5.000 durante um ano, dividido em 12 parcelas, então o MRR gerado é de R$416,67. Some isso ao de todos os outros clientes e esse será o MRR da sua empresa.</p>
<p>Esse cálculo permite que você visualize o padrão em que sua empresa está crescendo em termos de receita.</p>
<h3>Custo Por Aquisição</h3>
<p>Diferentemente do custo de aquisição de clientes, essa é uma comparação que pode variar. Uma aquisição, na verdade, é definida pelo dono do negócio. Pode ser um novo contato, um novo lead ou lead qualificado.</p>
<p>Como mencionado, essa métrica é comum em campanhas de geração de leads. Trata-se da soma dos seus gastos e os contatos adquiridos dentro de um período de tempo.</p>
<p>Uma dica interessante é comparar o seu <a href="https://rockcontent.com/br/blog/o-que-e-cpm-cpc-e-cpa/" target="_blank" rel="noreferrer noopener" aria-label="CPA (abre numa nova aba)">CPA</a> com a receita gerada em cada aquisição. Assim, se o seu CPA é maior do que a RPA, é um indicador de que sua estratégia está falhando.</p>
<h3>Custo Por Lead</h3>
<p>O custo por lead, como o próprio nome explica, demonstra o quanto você gasta para gerar um novo lead. Ela pode ser uma métrica semelhante ao CPA, porém aplicável a somente um tipo de contato.</p>
<p>Geração de leads é uma prática recorrente em estratégias de Marketing Digital. Já dissemos o quanto a gestão de leads é importante, não é verdade?</p>
<p>Mais leads representam mais oportunidades, então, precisamos medi-los! O CPL é a métrica para observar como está a sua eficiência, seus gastos e a geração de leads projetada.</p>
<h3>Taxa de Retenção e Churn</h3>
<p>Ninguém quer se desfazer de um cliente, certo? Portanto, é importante olhar para quantos deles estão indo embora todo o mês, ano ou período qualquer.</p>
<p>A retenção pode ser calculada usando o número total de clientes no começo e no fim do período junto com o número de novos clientes.</p>
<p>Taxa de Retenção = ((Clientes no fim do período – novos clientes)/clientes no começo do período) * 100</p><p></p>
<p>A taxa de retenção é sempre igual a 1 –&nbsp;<a href="https://rockcontent.com/br/blog/churn-rate/" target="_blank" rel="noreferrer noopener">taxa de desistências</a>&nbsp;(churns). Ou seja, esses números representam a mesma coisa sob diferentes perspectivas.</p>
<p>Vamos a um exemplo: se você começa um mês com 120 clientes e o encerra com 130. Nesse intervalo, você conquistou 20 novos clientes e teve 10 cancelamentos. O resultado serão 10 clientes extras.</p>
<p>Isso significa uma taxa de retenção de 91,67% dos seus clientes, ou uma taxa de desistência de 8.33%.</p>
<h3>Tráfego Por Canal</h3>
<p>Uma estratégia de Marketing Digital, hoje, utiliza vários canais de aquisição. Vários deles estão disponíveis e possuem um volume de público consolidado.</p>
<p>De buscas orgânicas a mídias sociais, campanhas pagas etc. Cada um desses canais terá participação na quantidade e na qualidade de visitas que seu domínio recebe e, consequentemente, no número de vendas que isso gera.</p>
<p>Portanto, é importante verificar o quanto cada um dos seus canais performa para entender como estão os seus resultados.</p>
<h3>Novas Sessões</h3>
<p>Sessões são calculadas, por padrão, pelo engajamento de um usuário durante até 30 minutos. Portanto, se você visita um site duas vezes em um intervalo de 30 minutos, isso será contado como uma sessão apenas.</p>
<p>Contudo, após os 30 minutos desde a primeira visita, será contada como uma nova sessão. Quando o seu conteúdo possui um alto poder de atração, frequentemente usuários novos e recorrentes irão visitá-lo.</p>
<span id="rock-5"></span><h2>Como trabalhar com Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="O que é Marketing Digital" class="wp-image-12900" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" alt="O que é Marketing Digital" class="wp-image-12900" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Para trabalhar com Marketing Digital, é necessário ter um conjunto de habilidades específicas que destacamos aqui.</p>
<p>A primeira é conhecer bem o mundo digital para compreender como funciona uma estratégia elaborada para a internet. Além disso, é necessário se adaptar rapidamente às mudanças, pois o ramo digital está em constante transformação.</p>
<p>Essas informações devem ser analisadas pelo profissional de marketing para que ele consiga desenvolver ações criativas que levem a empresa a alcançar os seus objetivos.</p>
<p>Por fim, conhecer os conceitos e as ferramentas de Marketing Digital é essencial. Continue conosco, pois as apresentaremos a seguir.</p>
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
<div class="rll-youtube-player" data-src="https://www.youtube.com/embed/fvQ9AdKY9GM" data-id="fvQ9AdKY9GM" data-query="feature=oembed"><div data-id="fvQ9AdKY9GM" data-query="feature=oembed" data-src="https://www.youtube.com/embed/fvQ9AdKY9GM"><img data-lazy-src="https://i.ytimg.com/vi/fvQ9AdKY9GM/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript><button class="play" aria-label="play Youtube video"></button></div></div><noscript><iframe title="Como TRABALHAR COM MARKETING DIGITAL | Aprenda como começar no Marketing digital AGORA" width="800" height="450" src="https://www.youtube.com/embed/fvQ9AdKY9GM?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></noscript>
</div></figure>
<span id="rock-6"></span><h2>Como fazer Marketing Digital para empresas?</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Vantagens do Marketing Digital" class="wp-image-12937" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png" alt="Vantagens do Marketing Digital" class="wp-image-12937" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Como o marketing digital funciona para diversos tipos de contextos? Embora seja uma estratégia que proporciona diversos benefícios, sabemos que <strong>cada negócio tem suas particularidades</strong>, com objetivos e públicos diferentes.</p>
<p>Por isso, precisamos olhar para os desafios de cada negócio e entender como o marketing online pode ser aplicado a fim de gerar os resultados esperados. Acompanhe, a seguir, as práticas mais importantes para cada tipo de empresa.</p>
<h3>Marketing Digital para Pequenas Empresas&nbsp;</h3>
<p>Muitas pequenas empresas costumam ter clientes-chave que determinam o faturamento do seu negócio. E o orçamento limitado pode dificultar ainda mais a prospecção de novos clientes devido a dificuldade de investir em Google Ads e ter estruturas com equipes enxutas.</p>
<p>Nesse sentido, o <a href="https://rockcontent.com/br/blog/seo-local/" rel="noreferrer noopener" target="_blank"><strong>SEO local</strong></a> pode ser uma boa estratégia para captar clientes num curto espaço geográfico. Além disso, fazer <strong>co-marketing</strong> (parcerias com empresas que têm público igual, mas oferta produtos e serviços diferentes), também é uma ótima maneira, como publicação de lives e pacotes promocionais em conjunto, por exemplo.</p>
<h3>Marketing Digital para Médias Empresas&nbsp;</h3>
<p>Diferente da pequena, as empresas de porte médio costumam ter uma estrutura mais robusta, com cartela de clientes bem definida. Seu maior desafio é <strong>manter a fidelização dos clientes e expandir a oferta de produtos e serviços</strong> usando o marketing digital.&nbsp;</p>
<p>Porém, em muitos casos, a falta de investimento necessário pode tornar o processo ainda mais complicado e longo. Nesse sentido, existem duas boas estratégias: marketing de conteúdo e parcerias com influenciadores digitais.</p>
<p>Enquanto o primeiro traz tráfego orgânico para o<a href="https://rockcontent.com/blog/como-criar-um-site/" rel="noreferrer noopener" target="_blank"> </a><a href="https://rockcontent.com/blog/como-criar-um-site/" rel="noreferrer noopener" target="_blank">site</a>, aumentando a visibilidade do negócio, o segundo explora a credibilidade da marca para um público específico. Quando bem alinhados, podem produzir bons resultados.</p>
<h3>Marketing Digital para Grandes Empresas&nbsp;</h3>
<p>As grandes empresas, por já estarem consolidadas no mercado, são o primeiro alvo dos concorrentes. Isso gera a necessidade de investir em estratégias para continuar sendo a preferida do público em meios a tantas outras ofertas atrativas.</p>
<p>Além disso, por já serem conhecidas nacionalmente, agora elas procuram <strong>concorrer em escala internacional</strong>, adaptando suas estratégias para cada lugar do mundo.</p>
<p>Nesse sentido, é importante investir em ferramentas de análise de dados para medir a performance das ações, aumentando a percepção de valor da empresa e ajustando o caminho rumo à internacionalização.</p>
<h3>Marketing Digital para Empresas B2C&nbsp;</h3>
<p>As empresas B2C (Business to Consumer) têm o foco em atrair diretamente o consumidor final dos produtos e serviços, como supermercados e<a href="https://rockcontent.com/blog/e-commerce-guia/" rel="noreferrer noopener" target="_blank"> </a><a href="https://rockcontent.com/blog/e-commerce-guia/" rel="noreferrer noopener" target="_blank">e-commerces</a> de vestuário, por exemplo.</p>
<p>Esse tipo de público tem o poder de compra mais curto, com valores não tão expressivos e com o desejo despertado por status ou benefícios pontuais, visando resultados imediatos.</p>
<p>No marketing digital para empresas B2C, é interessante usar <strong>estratégias que visam o lado emocional</strong>, como realizar campanhas em datas comemorativas, melhorar a conexão usando email marketing e aumentar o engajamento pelas redes sociais.</p>
<p>É um público mais impulsivo, que busca todas as informações de uma vez e tende a fazer compras instantaneamente.</p>
<h3>Marketing Digital para Empresas B2B&nbsp;</h3>
<p>Já as empresas B2B (Business to Business) são aquelas que oferecem os produtos e serviços para que outras empresas utilizem com seus consumidores finais, seja de forma direta, seja indireta. No nosso exemplo anterior, seriam os atacados, as distribuidoras e as fábricas, por exemplo. Funciona como uma hierarquia.</p>
<p>Diferente do que acontece nas<a href="https://rockcontent.com/blog/guia-de-vendas/" rel="noreferrer noopener" target="_blank"> </a><a href="https://rockcontent.com/blog/guia-de-vendas/" rel="noreferrer noopener" target="_blank">vendas</a> de pessoas físicas, as jurídicas costumam <strong>pesquisar bastante antes de efetuar a compra</strong>, pois pequenas diferenças de valor geram um grande impacto no lucro líquido. Então, elas comparam não apenas o preço, mas a qualidade do produto para aceitação do público, tempo de entrega e outras questões semelhantes.</p>
<p>Para essas empresas, é importante investir em estratégias que gerem leads para manter a base de contatos sempre aquecida. Alguns exemplos de práticas são inbound marketing, outbound marketing, account-based marketing,<a href="https://rockcontent.com/br/blog/o-que-e-spin-selling/" rel="noreferrer noopener" target="_blank"> SPIN Selling</a> e o uso de um bom CRM.</p>
<strong>Você também pode se interessar por estes conteúdos!</strong><br>
<a href="https://rockcontent.com/br/blog/duvidas-sobre-marketing-digital/" target="_blank&quot;" rel="noopener noreferrer">7 dúvidas sobre Marketing Digital que muitas pessoas têm (e suas respectivas respostas)</a><br>
<a href="" target="_blank&quot;" rel="noopener noreferrer">10 maiores tendências de Marketing Digital em que realmente vale a pena apostar</a><br>
<a href="https://materiais.rockcontent.com/marketing-digital" target="_blank&quot;" rel="noopener noreferrer">Baixe gratuitamente o guia completo de Marketing Digital Rock Content</a>
<br>
<span id="rock-7"></span><h2>Ferramentas de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="erros-de-marketing-digital" class="wp-image-12837" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital.png" alt="erros-de-marketing-digital" class="wp-image-12837" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/ferramentas_de_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Outro aspecto que diferencia positivamente o Marketing Digital das opções tradicionais sãos as diversas ferramentas que podem ajudar na administração e mensuração dos seus resultados em todos os canais.</p>
<p>Ferramentas de Marketing Digital ajudarão a filtrar as informações mais importantes, a entender o desenvolvimento da estratégia, a gerar relatórios e fazer o acompanhamento dos números. </p>
<p>Porém isso só será possível se você entender exatamente quais são os seus objetivos com cada estratégia de Marketing e<strong>&nbsp;tiver foco nos números que realmente importam</strong>.</p>
<p>Por isso vamos listar algumas ferramentas e seus diferentes usos para que você saiba exatamente o que e como escolher as melhores opções para o seu time.</p>
<h3>Ferramentas de SEO</h3>
<p>O SEO envolve uma série de estratégias e, portanto, existem ferramentas com finalidades diferentes para conseguir executar um bom plano de otimizações para alcançar boas posições nos motores de busca.</p>
<h4>Pesquisa de Palavras-chave</h4>
<p>Essas ferramentas permitem que o usuário encontre oportunidades de termos fundamentais para sua estratégia, além de identificar a competitividade e o volume de buscas dessas palavras.</p>
<p>Algumas das principais ferramentas de palavras-chave são:</p>
<ul><li><a href="https://pt.semrush.com/" target="_blank" rel="noreferrer noopener" aria-label=" (abre numa nova aba)">SEMrush</a>;</li><li><a rel="noreferrer noopener" href="https://ahrefs.com/pt/" target="_blank">Ahrefs</a>;</li><li><a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/ubersuggest/" target="_blank">Ubersuggest</a>.</li></ul>
<h4>SEO técnico</h4>
<p>As ferramentas de SEO técnico também possuem funções variadas como checar a autoridade de domínio (seu e do seu concorrente), averiguar e corrigir erros de SEO e encontrar conteúdos duplicados, entre outras funções.</p>
<p>Para&nbsp;<strong>SEO técnico</strong>, boas ferramentas são:</p>
<ul><li><a rel="noreferrer noopener" href="https://www.screamingfrog.co.uk/seo-spider/" target="_blank">Screaming Frog</a>;</li><li><a rel="noreferrer noopener" href="https://chrome.google.com/webstore/detail/mozbar/eakacpaijcpapndcfffdgphdiccmpknp?hl=pt-BR" target="_blank">MozBar</a>;</li><li><a rel="noreferrer noopener" href="https://yoast.com/" target="_blank">Yoast</a>;</li><li><a rel="noreferrer noopener" href="https://br.wordpress.org/plugins/google-sitemap-generator/" target="_blank">Google XML Sitemap</a>.</li></ul>
<h4>Backlinks</h4>
<p>As ferramentas de Backlinks são importantes para checar os links que você recebe, a qualidade desses links e fazer uma análise de links que devem ser removidos ou redirecionados.</p>
<p>Boas ferramentas para conferir os backlinks do seu site:</p>
<ul><li><a rel="noreferrer noopener" href="https://www.google.com/webmasters/tools/home?hl=pt-BR&amp;mesd=eyJtdCI6Ik5DX1NBVkVfRU1BSUxfU0VUVElORyIsImN0IjoxMjkzNDU1MDQ3ODU1LCJwcyI6W119&amp;pli=1" target="_blank">Google Search Console</a>;</li><li> <a href="https://pt.semrush.com/" target="_blank" rel="noreferrer noopener" aria-label=" (abre numa nova aba)">SEMrush</a>;</li><li><a rel="noreferrer noopener" href="https://ahrefs.com/pt/" target="_blank">Ahrefs</a>.</li></ul>
<h3>Ferramentas de análise</h3>
<p>As ferramentas de análise são fundamentais para a compreensão do sucesso da estratégia e dos resultados obtidos.</p>
<h4>Análise de métricas</h4>
<p>Além das ferramentas que já têm um Analytics próprio, o que é cada vez mais comum, algumas ferramentas de análise podem ser usadas de forma estratégica para entender diferentes pontos da estratégica e ter uma compreensão do todo.</p>
<p>Elas permitem um acompanhamento de fatores como tráfego, origem do tráfego, caminho dos usuários pelo site, entre outros.</p>
<p>Bons exemplos são:</p>
<ul><li><a rel="noreferrer noopener" href="https://www.google.com/analytics/" target="_blank">Google Analytics</a>;</li><li><a rel="noreferrer noopener" href="https://www.kissmetrics.com/" target="_blank">Kissmetrics</a>.</li></ul>
<h4>Análise de concorrência</h4>
<p>Para acompanhar os resultados que a sua estratégia de Marketing Digital traz para a sua empresa é fundamental analisar a sua concorrência e identificar pontos de melhoria e aprender com eles.</p>
<p>Essas ferramentas servem para fazer comparativos de palavras-chave, backlinks, tráfego, engajamento entre outras coisas.</p>
<p>Algumas das ferramentas mais populares são:</p>
<ul><li> <a href="https://pt.semrush.com/" target="_blank" rel="noreferrer noopener" aria-label=" (abre numa nova aba)">SEMrush</a>;</li><li><a rel="noreferrer noopener" href="https://buzzsumo.com/" target="_blank">BuzzSumo</a>.</li></ul>
<h3>Ferramentas de Design</h3>
<p>O design é fundamental em nosso dia a dia, e não seria diferente em uma estratégia de Marketing Digital. O conteúdo visual é cada vez mais uma tendência para a comunicação online.</p>
<h4>Ferramentas de imagens</h4>
<p>O visual de um site ou blog é fundamental para o sucesso e para gerar uma conexão com o leitor. É importante encontrar uma identidade visual para a sua empresa e o design é fundamental nisso.</p>
<p>Muitas empresas têm dificuldade para um investimento inicial em design, por isso, boas ferramentas são os&nbsp;<a href="https://rockcontent.com/br/blog/melhores-bancos-de-imagens-gratuitos/" target="_blank" rel="noreferrer noopener"><strong>bancos de imagem gratuitos</strong></a>.</p>
<p>Além deles, temos algumas ferramentas essenciais para a edição, criação e tratamento de imagens como:</p>
<ul><li><a href="https://www.canva.com/pt_br/" target="_blank" rel="noreferrer noopener" aria-label=" (abre numa nova aba)">Canva</a>;</li><li><a rel="noreferrer noopener" href="https://www.adobe.com/br/products/photoshop/free-trial-download.html" target="_blank">Photoshop</a>;</li><li><a rel="noreferrer noopener" href="https://www.adobe.com/br/products/illustrator.html?sdid=KQPNX&amp;mv=search&amp;s_kwcid=AL!3085!3!227223697575!e!!g!!illustrator&amp;ef_id=WrEWcQAABXYR4EaZ:20180320141145:s" target="_blank">Ilustrator</a>.</li></ul>
<h4>Ferramentas de vídeos</h4>
<p>Além das imagens, os vídeos são um dos tipos de conteúdo mais consumidos na internet e um dos mais queridos pelo público.</p>
<p>Investir em uma estratégia de vídeo pode potencializar bastante a sua estratégia de marketing.</p>
<p>Ferramentas para edição dos vídeos, para adicionar efeitos, criar vinhetas, fazer motion graphic, entre outras coisas.</p>
<p>Dentre as mais populares estão:</p>
<ul><li><a rel="noreferrer noopener" href="https://www.adobe.com/br/products/premiere.html" target="_blank">Adobe Premiere</a>;</li><li><a rel="noreferrer noopener" href="https://www.apple.com/br/final-cut-pro/" target="_blank">Final Cut</a>;</li><li><a rel="noreferrer noopener" href="https://www.adobe.com/br/products/aftereffects.html" target="_blank">After Effects</a>.</li></ul>
<h3>Ferramentas de CRO</h3>
<p>Entender as conversões do seu site e de sua estratégia online como um todo é essencial.</p>
<p>Boas ferramentas que possibilitam isso são:</p>
<ul><li><a rel="noreferrer noopener" href="https://sumo.com/" target="_blank">SumoMe</a>;</li><li><a rel="noreferrer noopener" href="https://www.hotjar.com/" target="_blank">Hotjar</a>.</li></ul>
<p>Enquanto a primeira possibilita integrar as informações e acompanhar seus contatos pela jornada em seu domínio, a segunda oferece mapas de calor para identificar quais são os melhores pontos do seu site ou blog e os que podem ser melhorados.</p>
<h3>Ferramentas de Automação</h3>
<p>Ferramentas de automação são usadas para integrar sua estratégia, enviar emails, gerenciar suas leads e facilitar o contato entre marketing e vendas. Elas também permitem a criação de testes A/B, criação de fluxos de trabalho etc.</p>
<p>Boas ferramentas de automação são:</p>
<ul><li><a rel="noreferrer noopener" href="https://br.hubspot.com/?__hstc=64741936.67de532a17153c0fde38ed7663835ba8.1650223335686.1650223335686.1650223335686.1&amp;__hssc=64741936.1.1650223335687&amp;__hsfp=4205530587" target="_blank">HubSpot</a>;</li><li><a rel="noreferrer noopener" href="https://www.pipefy.com/" target="_blank">Pipefy</a>;</li><li><a rel="noreferrer noopener" href="https://www.rdstation.com/" target="_blank">RD Station</a>.</li></ul>
<h3>Ferramentas de Relacionamento Interno</h3>
<p>As ferramentas de relacionamento interno são muito importantes para facilitar a comunicação entre diferentes setores da empresa. As duas ferramentas mais indicadas são&nbsp;<strong>o&nbsp;<a href="https://slack.com/" target="_blank" rel="noreferrer noopener">Slack</a>&nbsp;e o&nbsp;<a href="https://www.zendesk.com.br/" target="_blank" rel="noreferrer noopener">Zendesk</a>.</strong></p>
<p>Enquanto o Slack é um canal de troca de mensagens, funcionando como um WhatsApp corporativo, o Zendesk permite que a abertura de tickets para solucionar problemas e centralizar a informação.</p>
<h3>Ferramentas de redes sociais</h3>
<p>As ferramentas de Redes Sociais são fundamentais para o sucesso de uma estratégia de Marketing Digital. Elas permitem o agendamento de posts, acompanhamento de métricas e a centralização da estratégia em diferentes redes.</p>
<p>Para profissionalizar sua estratégia nas redes sociais, uma boa ideia é usar ferramentas como:</p>
<ul><li><a rel="noreferrer noopener" href="https://www.quintly.com/" target="_blank">Quintly</a>;</li><li><a rel="noreferrer noopener" href="https://hootsuite.com/pt/" target="_blank">Hootsuite</a>;</li><li><a rel="noreferrer noopener" href="https://buzzsumo.com/" target="_blank">Buzzsumo</a>;</li><li><a rel="noreferrer noopener" href="https://bume.com/" target="_blank">Bume.com</a> </li><li><a rel="noreferrer noopener" href="https://www.mlabs.com.br/" target="_blank">mLabs</a>.</li></ul>
<h3>Ferramentas de gestão de projetos</h3>
<p>Esse tópico é especialmente importante para grandes times, mas é importante para todas as empresas. Integrar diferentes setores e coordenar as tarefas que são necessárias para atingir um objetivo torna-se mais fácil quando há um cronograma e um bom planejamento.</p>
<p>Nesse sentido, boas ferramentas são</p>
<ul><li><a href="https://materiais.rockcontent.com/produtos/studio/agencias" target="_blank" rel="noreferrer noopener" aria-label="Studio (abre numa nova aba)">Studio</a>;</li><li><a rel="noreferrer noopener" href="https://asana.com/pt/" target="_blank">Asana</a>;</li><li><a rel="noreferrer noopener" href="https://evernote.com/intl/pt-br" target="_blank">Evernote</a>;</li><li><a rel="noreferrer noopener" href="https://calendly.com/" target="_blank">Calendly</a>.</li></ul>
<h3>Ferramentas de Email Marketing</h3>
<p>Não poderíamos deixar de fora as ferramentas de Email Marketing, até porque, esse é um dos elementos mais fundamentais de toda estratégia digital de sucesso.</p>
<p>Pensando nisso, confira as ferramentas que mais gostamos e utilizamos aqui na Rock:</p>
<ul><li><a rel="noreferrer noopener" href="https://mailchimp.com/" target="_blank">Mailchimp</a>;</li><li><a rel="noreferrer noopener" href="https://br.getresponse.com/" target="_blank">GetResponse</a>;</li><li><a rel="noreferrer noopener" href="https://www.mailee.me/pt" target="_blank">Mailee</a>.</li></ul>
<p>Além dessas, alguns sistemas de automação, como RD Station e Hubspot, também podem ser usados para o dispara automático de emails.</p>
<p></p>
<br>
<div class="rock-convert-banner"><a href="https://materiais.rockcontent.com/kit-ferramentas-templates?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="58566" data-cta-title="[BR] Kit de Templates e Ferramentas para Gestores de Marketing"><picture class="attachment-full size-full" title="[BR] Kit de Templates e Ferramentas para Gestores de Marketing">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post-300x80.png.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 750px) 100vw, 750px">
<img width="750" height="200" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20200'%3E%3C/svg%3E" alt="ferramentas-para-gestores-de-marketing" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post-300x80.png 300w" data-lazy-sizes="(max-width: 750px) 100vw, 750px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[BR] Kit de Templates e Ferramentas para Gestores de Marketing">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png.webp 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post-300x80.png.webp 300w" sizes="(max-width: 750px) 100vw, 750px"/>
<img width="750" height="200" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png" alt="ferramentas-para-gestores-de-marketing" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post.png 750w, https://rockcontent.com/br/wp-content/uploads/sites/2/2022/04/ferramentas-para-gestores-de-mkt_Banner-de-Final-de-Post-300x80.png 300w" sizes="(max-width: 750px) 100vw, 750px"/>
</picture>
</noscript></a></div>
<span id="rock-8"></span><h2>Exemplos de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="O que é Marketing Digital" class="wp-image-12900" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" alt="O que é Marketing Digital" class="wp-image-12900" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Neste tópico, separamos cases em diversos segmentos de empresas que souberam aproveitar os recursos do marketing na internet com muita criatividade e profissionalismo.</p>
<p>Navegando pela internet, nos deparamos com inúmeros exemplos de Marketing Digital. Como você já deve ter percebido, ele está, literalmente, por toda parte: nos resultados de pesquisa, nos sites, nas mídias sociais, nos aplicativos e até nas mídias tradicionais. </p>
<p>Por isso, separamos alguns que mais se destacaram nos últimos tempos para que você possa se inspirar!</p>
<h3>1. Disney</h3>
<p>Sabemos que ideias simples podem gerar resultados enormes e admiráveis, e a Disney sempre foi uma prova disso. Em 2018, o seu maior destaque foi a campanha beneficente Share Your Ears (compartilhe suas orelhas) realizada durante a comemoração de 90 anos do ícone da marca, o Mickey Mouse.</p>
<p>O lançamento foi realizado durante a exibição do show “Mickey’s 90th Spectacular” na rede de TV norte-americana ABC. Na ação, a companhia incentivou o público a postar fotos exibindo as orelhas do Mickey com a #ShareYourEars. </p>
<p>Para cada foto postada, seriam doados US$5 para a Make-A-Wish, uma das instituições de apoio à criança mais respeitadas do mundo.</p>
<p><strong>Impulsionada pela internet, a brincadeira tornou-se um fenômeno mundial e chamou a atenção da imprensa de diversos países.</strong> O teto estipulado para as doações era de US$1 milhão, mas o sucesso foi tão grande que a Disney resolveu dobrar o valor.</p>
<p>A primeira campanha com a #ShareYourYears foi feita em 2016 na comemoração do 60° aniversário da Disneyland.</p>
<h3>2. Orgânica Digital</h3>
<p>Fundada em 2008, a Orgânica Digital é, sem dúvida, uma agência pioneira no Marketing online brasileiro. Fornecendo serviços de divulgação e software para seus clientes, a empresa é focada em ações que têm o conteúdo como protagonista.</p>
<p>O seu grande desafio, no entanto, era <strong>produzir materiais de alta qualidade em escala e com consistência, tanto para a agência, quanto para seus clientes.</strong> Dessa forma, era preciso adotar uma estratégia eficaz para a empresa e, também, oferecê-la aos seus clientes.</p>
<p>Para encarar o desafio, a Orgânica <a href="https://interactive.rockcontent.com/br/consultor/formulario" target="_blank" rel="noreferrer noopener" aria-label="contou com a ajuda da Rock Content (abre numa nova aba)">contou com a ajuda da Rock Content</a>, que a auxilia em sua estratégia de divulgação e produção de conteúdo.</p>
<p>A parceria fez com que o blog da agência tivesse um <strong>aumento de 212% em seu tráfego orgânico</strong>, o que elevou sua autoridade em temas como Marketing Digital e Inbound Marketing. A empresa também registrou um aumento de 253% nas visualizações e 159% no número de novos usuários.</p>
<p>Em 2019, a Orgânica Digital figurou entre as 10 melhores agências de Marketing do Brasil na premiação promovida anualmente pela Resultados Digitais dentro do RD Summit.</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><picture class="wp-image-33025">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg.webp 640w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao-300x200.jpeg.webp 300w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20427'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 640px) 100vw, 640px">
<img width="640" height="427" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20427'%3E%3C/svg%3E" alt="Premiação RD divulgação" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg 640w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao-300x200.jpeg 300w" data-lazy-sizes="(max-width: 640px) 100vw, 640px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg">
</picture>
<noscript><picture class="wp-image-33025">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg.webp 640w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao-300x200.jpeg.webp 300w" sizes="(max-width: 640px) 100vw, 640px"/>
<img width="640" height="427" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg" alt="Premiação RD divulgação" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao.jpeg 640w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/08/premio-rd-divulgacao-300x200.jpeg 300w" sizes="(max-width: 640px) 100vw, 640px"/>
</picture>
</noscript><figcaption> Fonte: <a rel="noreferrer noopener" href="https://www.jornalpontoinicial.com.br/2019/12/17/organica-digital-e-considerada-uma-das-10-melhores-agencias-de-marketing-do-brasil/" target="_blank">Jornal Ponto Inicial</a> </figcaption></figure></div>
<h3>3. Dove</h3>
<p>A Dove sempre se posicionou como uma empresa comprometida não apenas com a beleza, mas também com o bem-estar da mulher e com o seu papel na sociedade. A campanha <a href="https://www.youtube.com/watch?v=ABups4euCW4" rel="noreferrer noopener" target="_blank">Retratos da Real Beleza</a> é, até os dias de hoje, uma das mais prestigiadas do mundo.</p>
<p>Em 2019, a marca, mais uma vez, <strong>levantou brilhantemente a discussão sobre a representatividade da mulher na publicidade.</strong> Segundo dados obtidos pela companhia, 70% das mulheres e indivíduos não-binários ainda não se sentem representados na mídia e nos comerciais.</p>
<p>Em apoio à causa, a Dove, em parceria com o repositório de imagens Getty Images, criou o <a rel="noreferrer noopener" href="https://www.gettyimages.com.br/showus" target="_blank">projeto #NosMostre</a> (originalmente, #ShowUs), uma biblioteca pública de imagens construída em parceria com mulheres de mais de 30 países. </p>
<p>O objetivo é disponibilizar fotos que desconstroem os estereótipos relacionados à beleza feminina para peças publicitárias de todo o mundo.</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><picture class="wp-image-38364">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-300x140.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-768x358.png.webp 768w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20477'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px">
<img width="1024" height="477" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20477'%3E%3C/svg%3E" alt="dove-nos-mostre" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-300x140.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-768x358.png 768w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png">
</picture>
<noscript><picture class="wp-image-38364">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-300x140.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-768x358.png.webp 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
<img width="1024" height="477" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png" alt="dove-nos-mostre" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-300x140.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/03/dove-nos-mostre-1024x477-1-768x358.png 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
</picture>
</noscript></figure></div>
<p>A campanha levou o Leão de Prata no Cannes Lions de 2019, o maior festival de publicidade e criatividade do planeta.</p>
<h3>4. Burger King</h3>
<p>A clássica rivalidade entre as gigantes do fast food Burger King e McDonald’s já se tornou uma marca registrada das companhias. Esse duelo, entretanto, sempre foi muito equilibrado e, claro, bastante lucrativo para ambas.</p>
<p>Em 2013, na Noruega, porém, quem ganhou a briga foi o Burger King, mas de um jeito tão inusitado que muitos se perguntaram se a ação foi realmente uma vitória. </p>
<p>A equipe que cuidava da <a rel="noreferrer noopener" href="https://www.facebook.com/BurgerKingNorge" target="_blank">página norueguesa da empresa no Facebook</a> não estava satisfeita com o engajamento do público e resolveu qualificá-lo da forma mais agressiva possível.</p>
<p>Na ação intitulada Whopper Sellout, o BK Noruega fez uma proposta radical para seus seguidores: continuar sendo um seguidor da marca no Facebook ou ganhar um Big Mac (principal produto do concorrente) e ser banido para sempre.</p>
<p>Acredite, a empresa teve que pagar mais de 30 mil lanches, mas conseguiu se livrar do seu maior problema: os haters, pessoas que só utilizavam a página para prejudicar a marca e seus consumidores.</p>
<p>De acordo com a equipe que criou a campanha, o engajamento na página cresceu em cinco vezes e foram registrados aumentos nas vendas em lojas de toda a Noruega.</p>
<p>Certamente, não vamos recomendar que você faça o mesmo, mas a história nos ajuda a perceber o quanto a qualidade se sobrepõe à quantidade quando falamos em publico na internet. Definitivamente, <strong>há uma grande diferença entre conquistar fãs e simplesmente obter seguidores</strong>.</p>
<h3>5. Faculdade Unyleya</h3>
<p>Cada vez mais instituições de ensino se dão conta da importância de <a href="https://rockcontent.com/br/blog/digitalizar-negocio/" rel="noreferrer noopener" target="_blank">se inserir no mundo digital</a>, e a Faculdade Unyleya é uma prova de que esse é o caminho para o sucesso.</p>
<p>Há mais de 10 anos oferecendo cursos de graduação e pós-graduação a distância, a internet não era uma novidade. Entretanto, sua divulgação focada em mídia paga sempre representou desafios, como o alto curso e a forte concorrência.</p>
<p>Para otimizar seus resultados, era necessário <strong>diversificar as suas estratégias</strong> e a solução encontrada pela Unyleya foi o Inbound Marketing. Com o apoio necessário, a instituição dominou a técnica e passou a publicar conteúdos de alta qualidade orientados à sua persona.</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><picture class="wp-image-38368">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-300x166.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-768x425.png.webp 768w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20566'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px">
<img width="1024" height="566" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20566'%3E%3C/svg%3E" alt="exemplos-de-marketing-digital-unyleya-1024x566" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-300x166.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-768x425.png 768w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png">
</picture>
<noscript><picture class="wp-image-38368">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-300x166.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-768x425.png.webp 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
<img width="1024" height="566" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png" alt="exemplos-de-marketing-digital-unyleya-1024x566" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-300x166.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/exemplos-de-marketing-digital-unyleya-1024x566-1-768x425.png 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
</picture>
</noscript></figure></div>
<p>O desempenho da estratégia foi espetacular. A faculdade obteve 310% de ROI apenas com materiais ricos e conseguiu um surpreende <strong>ROI de 881% na captação de novos estudantes.</strong></p>
<h3>6. Editora DarkSide</h3>
<p>Em meio a um cenário um tanto “sombrio” enfrentado pelo mercado editorial brasileiro, a <a href="https://www.darksidebooks.com.br/" rel="noreferrer noopener" target="_blank">DarkSide</a> é uma das editoras que está conseguindo se destacar apostando em nichos e em uma <strong>comunicação extremamente alinhada com a sua audiência</strong>.</p>
<p>A aposta ousada de se dedicar a títulos de terror e fantasia se tornou um tremendo sucesso ao resgatar obras de autores mundialmente celebrados, como H.P. Lovecraft e Edgar Allan Poe, em edições especiais.</p>
<p>Em uma de suas mais novas ações de Marketing, a empresa resolveu oferecer uma experiência interativa aos seus leitores (predominantemente jovens). Por meio do aplicativo oficial da editora, os livros ganham vida com <a href="https://rockcontent.com/br/blog/os-desafios-da-realidade-aumentada/" target="_blank" rel="noreferrer noopener">recursos de realidade aumentada</a>.</p>
<p>A marca soube criar um “<a rel="noreferrer noopener" href="https://rockcontent.com/br/blog/wow-moment/" target="_blank">WOW moment</a>” com maestria e muitas inovações do gênero estão sendo adotadas por marcas do segmento para conquistar o leitor moderno. </p>
<p>O interessante é que, no Brasil, são as pequenas editoras que estão demonstrando que até o mercado de livros físicos pode se beneficiar das ferramentas digitais.</p>
<p>A DarkSide também conta com um blog, tem forte presença nas redes sociais e conta com a ajuda de <a href="https://rockcontent.com/br/blog/microinfluenciadores/" rel="noreferrer noopener" target="_blank">influenciadores digitais</a> para divulgar os seus produtos.</p>
<h3>7. Prefeitura de Curitiba</h3>
<p>O Marketing Digital também pode trazer resultados surpreendentes em ações institucionais ― e fica melhor ainda quando esse trabalho é feito com muita criatividade e bom humor.</p>
<p>Entre 2013, a Prefeitura de Curitiba decidiu apostar em uma comunicação nada convencional com o seu público nas redes sociais. </p>
<p>Longe da típica formalidade adotada em canais de comunicação do tipo, os perfis da prefeitura ― apelidados de “<a rel="noreferrer noopener" href="https://www.facebook.com/PrefsCuritiba" target="_blank">Prefs</a>” ― traziam informações da cidade e orientações aos cidadãos em forma de piadas e memes.</p>
<div class="wp-block-image"><figure class="aligncenter size-large"><picture class="wp-image-38370">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-300x180.jpeg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-768x461.jpeg.webp 768w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20615'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px">
<img width="1024" height="615" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20615'%3E%3C/svg%3E" alt="prefeitura-de-curitiba" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-300x180.jpeg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-768x461.jpeg 768w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg">
</picture>
<noscript><picture class="wp-image-38370">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-300x180.jpeg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-768x461.jpeg.webp 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
<img width="1024" height="615" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg" alt="prefeitura-de-curitiba" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1.jpeg 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-300x180.jpeg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2020/11/prefeitura-de-curitiba-1024x615-1-768x461.jpeg 768w" sizes="(max-width: 1024px) 100vw, 1024px"/>
</picture>
</noscript><figcaption> Fonte: <a rel="noreferrer noopener" href="https://oglobo.globo.com/brasil/prefeitura-de-curitiba-faz-sucesso-nas-redes-com-pagina-que-equilibra-humor-prestacao-de-servico-16490387" target="_blank">O Globo</a> </figcaption></figure></div>
<p>Por trás de toda essa descontração, porém, havia uma estratégia muito bem traçada e uma equipe que, apesar das brincadeiras, fazia valer o propósito da página de informar e educar a população curitibana.</p>
<p>A <a href="https://rockcontent.com/br/blog/interacao-nas-redes-sociais/" rel="noreferrer noopener" target="_blank">interação na rede social</a> também chamava a atenção. Além do <strong>relacionamento descontraído e humanizado com o público</strong>, que era respondido prontamente, até grandes marcas, como a Cartoon Network, chegaram a interagir com as postagens.</p>
<p>Naturalmente, discussões ocorreram sobre os benefícios e malefícios de adotar esse tipo de comunicação em um canal público oficial. Entretanto, isso não impediu que o projeto se tornasse um dos exemplos de Marketing Digital mais inovadores do país.</p>
<p>Em 2015, a Prefeitura de Curitiba foi vitoriosa em duas categorias do <a href="https://www.curitiba.pr.gov.br/noticias/curitiba-vence-em-duas-categorias-do-maior-premio-brasileiro-de-midias-sociais/38234" rel="noreferrer noopener" target="_blank">Prêmio Share</a>, uma das principais premiações de mídias sociais do Brasil.</p>
<span id="rock-9"></span><h2>Cursos de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="O que é Marketing Digital" class="wp-image-12900" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png" alt="O que é Marketing Digital" class="wp-image-12900" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/o_que_e_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Para te ajudar nessa trajetória como profissional de marketing ou entusiasta do tema, selecionamos os melhores cursos de Marketing Digital disponíveis no mercado.</p>
<p>Com a expansão do Marketing Digital, temos observado o aumento crescente da procura por esses profissionais, os quais precisam estar preparados para lidar com as diferentes estratégias citadas, extraindo o máximo de resultados.</p>
<p>Para isso, realizamos uma curadoria com os melhores cursos de Marketing Digital, gratuitos e pagos, para que você possa se capacitar ainda mais nessa área.</p>
<h3>Curso de Fundamentos do Marketing Digital</h3>
<p>Este é um curso totalmente gratuito criado pelo próprio Google com o objetivo de educar um número cada vez maior de pessoas sobre como fazer uso das estratégias digitais, assim como das ferramentas disponibilizadas pela própria empresa.</p>
<p>O “Fundamentos do Marketing Digital” também está disponível em português, conta com 26 módulos de aprendizado e ainda fornece um certificado ao final do curso.</p>
<p><a href="https://learndigital.withgoogle.com/ateliedigital/course/digital-marketing" target="_blank" rel="noreferrer noopener">Saiba mais sobre esse curso aqui!</a></p>
<h3>Curso de Marketing de Conteúdo</h3>
<p>Boa parte dos cursos da área são segmentados pelas diferentes estratégias existentes, com o objetivo de facilitar a produção de um conteúdo rico e aprofundado. Esse é o caso do curso de Marketing de Conteúdo da&nbsp;<a href="https://university.rockcontent.com/" target="_blank" rel="noreferrer noopener">Rock University</a>.</p>
<p>Com esse curso é possível aprender tudo sobre a produção de conteúdos para o ambiente digital por meio de diferentes ações e canais. Além de ser 100% em português, ele é gratuito e ainda dispõe de um certificado.</p>
<p>Tem interesse em realizar esse curso?&nbsp;<a href="https://university.rockcontent.com/cursos/marketing-de-conteudo" target="_blank" rel="noreferrer noopener">Então clique aqui!</a></p>
<h3>Curso de Inbound</h3>
<p>O curso de Inbound é oferecido pela Hubspot Academy e conta com uma ampla gama de conhecimentos sobre a aplicação do conceito de Inbound no marketing e em vendas.</p>
<p>Trata-se de um curso gratuito, disponível em inglês, espanhol e português e ainda é de curta duração, cerca de 2 horas apenas.</p>
<p><a href="https://academy.hubspot.com/courses/inbound?q=&amp;offset=15&amp;__hstc=64741936.67de532a17153c0fde38ed7663835ba8.1650223335686.1650223335686.1650223335686.1&amp;__hssc=64741936.1.1650223335687&amp;__hsfp=4205530587" target="_blank" rel="noreferrer noopener">Quer saber mais sobre esse curso? Então confira tudo sobre ele aqui!</a></p>
<h3>Cursos integrados de Marketing Digital</h3>
<p>Os cursos integrados de Marketing Digital estão disponíveis na plataforma Coursera e foram disponibilizados pela Universidade de Illinois, dos Estados Unidos.</p>
<p>Esse conjunto de aulas ainda conta apenas com a versão em inglês , mas também garante um certificado e são criados projetos práticos ao longo do curso.</p>
<p><a href="https://coursera.org/specializations/digital-marketing" target="_blank" rel="noreferrer noopener">Saiba mais sobre esse curso acessando aqui!</a></p>
<span id="rock-10"></span><h2>Livros de Marketing Digital</h2>
<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img width="450" height="257" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20257'%3E%3C/svg%3E" alt="Vantagens do Marketing Digital" class="wp-image-12937" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png"><noscript><img width="450" height="257" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png" alt="Vantagens do Marketing Digital" class="wp-image-12937" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital.png 450w, https://rockcontent.com/br/wp-content/uploads/sites/2/2018/03/vantagens_do_marketing_digital-300x171.png 300w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></figure></div>
<p>Para saber como fazer Marketing Digital da forma correta, nada melhor do que expandir os seus conhecimentos ao ler as obras das pessoas que mais entendem do assunto.</p>
<p>Obter informações sobre as <a href="https://rockcontent.com/br/blog/ferramentas-de-comunicacao-interna/" rel="noreferrer noopener" target="_blank">boas práticas</a> e as novidades do marketing nunca é demais, principalmente, porque essa área de conhecimento <strong>se renova a cada dia com o avanço da tecnologia</strong>, ainda que muitas estratégias sejam atemporais.</p>
<p>A seguir, apresento alguns livros sobre Marketing Digital para você, que deseja aprender sobre o assunto, ou para quem quer se manter sempre atualizado.</p>
<h3>Obrigado pelo Marketing (Vitor Peçanha)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="https://amzn.to/390VU4B" target="_blank" rel="noopener"><picture class="wp-image-51380">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha-208x300.jpg.webp 208w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20432'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px">
<img width="300" height="432" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20432'%3E%3C/svg%3E" alt="Obrigado pelo Marketing (Vitor Peçanha)" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha-208x300.jpg 208w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg">
</picture>
<noscript><picture class="wp-image-51380">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha-208x300.jpg.webp 208w" sizes="(max-width: 300px) 100vw, 300px"/>
<img width="300" height="432" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg" alt="Obrigado pelo Marketing (Vitor Peçanha)" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Obrigado-pelo-Marketing-Vitor-Pecanha-208x300.jpg 208w" sizes="(max-width: 300px) 100vw, 300px"/>
</picture>
</noscript></a></figure></div>
<p>Em <a href="https://amzn.to/390VU4B" target="_blank" rel="noreferrer noopener">Obrigado pelo Marketing</a>, compartilho com os meus leitores e usuários que <strong>acompanham o crescimento da Rock Content</strong> alguns dos principais aprendizados que levaram a empresa que criei, junto a meus sócios, Diego Gomes e Edmar Ferreira, a se tornar <a href="https://rockcontent.com/br/blog/rock-content-north-america/" rel="noreferrer noopener" target="_blank">referência</a> em Marketing de Conteúdo na América Latina.</p>
<h3>Permission Marketing (Seth Godin)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="https://amzn.to/3lhnkcc" target="_blank" rel="noopener"><picture class="wp-image-51377">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin-196x300.jpg.webp 196w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20460'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px">
<img width="300" height="460" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20460'%3E%3C/svg%3E" alt="Permission Marketing (Seth Godin)" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin-196x300.jpg 196w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg">
</picture>
<noscript><picture class="wp-image-51377">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin-196x300.jpg.webp 196w" sizes="(max-width: 300px) 100vw, 300px"/>
<img width="300" height="460" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg" alt="Permission Marketing (Seth Godin)" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Permission-Marketing-Seth-Godin-196x300.jpg 196w" sizes="(max-width: 300px) 100vw, 300px"/>
</picture>
</noscript></a></figure></div>
<p>O livro <a href="https://amzn.to/3lhnkcc" target="_blank" rel="noreferrer noopener">Permission Marketing</a> foca a forma como a mensagem de produto (ou serviço) deve ser enviada aos consumidores para garantir bons resultados de conversão. O autor apresenta táticas para reforçar a <strong>relação de confiança entre os usuários e a marca</strong> antes do enfoque no objetivo final, as <a href="https://rockcontent.com/br/blog/treinamento-de-vendas/" rel="noreferrer noopener" target="_blank">vendas </a>da empresa.</p>
<h3>Marketing na Era Digital (Martha Gabriel)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="https://amzn.to/3EadXDI" target="_blank" rel="noopener"><picture class="wp-image-51378">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel-209x300.jpg.webp 209w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20430'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px">
<img width="300" height="430" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20430'%3E%3C/svg%3E" alt="Marketing na Era Digital (Martha Gabriel)" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel-209x300.jpg 209w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg">
</picture>
<noscript><picture class="wp-image-51378">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel-209x300.jpg.webp 209w" sizes="(max-width: 300px) 100vw, 300px"/>
<img width="300" height="430" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg" alt="Marketing na Era Digital (Martha Gabriel)" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-na-Era-Digital-Martha-Gabriel-209x300.jpg 209w" sizes="(max-width: 300px) 100vw, 300px"/>
</picture>
</noscript></a></figure></div>
<p>O livro <a href="https://amzn.to/3EadXDI" target="_blank" rel="noreferrer noopener">Marketing na Era Digital</a> é um best seller do segmento e enfatiza a importância de se manter sempre atualizado sobre marketing, principalmente, em razão do avanço da tecnologia.</p>
<p>Em seus 15 capítulos, Martha Gabriel conceitua as etapas desde o planejamento até a aplicação de estratégias relacionadas às<strong> tecnologias digitais emergentes em nosso contexto.</strong></p>
<h3>Marketing 4.0 — do Tradicional ao Digital (Philip Kloter, Hermawan Kartajaya e Iwan Setiawan)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large"><picture class="wp-image-51379">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan-209x300.jpg.webp 209w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20430'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px">
<img width="300" height="430" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20430'%3E%3C/svg%3E" alt="Marketing 4.0 — do Tradicional ao Digital (Philip Kloter, Hermawan Kartajaya e Iwan Setiawan)" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan-209x300.jpg 209w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg">
</picture>
<noscript><picture class="wp-image-51379">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan-209x300.jpg.webp 209w" sizes="(max-width: 300px) 100vw, 300px"/>
<img width="300" height="430" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg" alt="Marketing 4.0 — do Tradicional ao Digital (Philip Kloter, Hermawan Kartajaya e Iwan Setiawan)" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan.jpg 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-4.0-—-do-Tradicional-ao-Digital-Philip-Kloter-Hermawan-Kartajaya-e-Iwan-Setiawan-209x300.jpg 209w" sizes="(max-width: 300px) 100vw, 300px"/>
</picture>
</noscript></figure></div>
<p>Philip Kotler é conhecido como o <strong>pai do marketing moderno </strong>e <a href="https://amzn.to/3lhkkN9" target="_blank" rel="noreferrer noopener">nesse livro</a> escrito em parceria com Hermawan Kartajaya e Iwan Setiawan, ele explica a transição do marketing em vários contextos, até chegar na era da revolução digital.</p>
<h3>As 22 Consagradas Leis do Marketing (Al Ries e Jack Trout)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><picture class="wp-image-51381">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg.webp 360w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout-216x300.jpg.webp 216w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20298%20413'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 298px) 100vw, 298px">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20298%20413'%3E%3C/svg%3E" alt="As 22 Consagradas Leis do Marketing (Al Ries e Jack Trout)" width="298" height="413" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg 360w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout-216x300.jpg 216w" data-lazy-sizes="(max-width: 298px) 100vw, 298px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg">
</picture>
<noscript><picture class="wp-image-51381">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg.webp 360w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout-216x300.jpg.webp 216w" sizes="(max-width: 298px) 100vw, 298px"/>
<img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg" alt="As 22 Consagradas Leis do Marketing (Al Ries e Jack Trout)" width="298" height="413" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout.jpg 360w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/As-22-Consagradas-Leis-do-Marketing-Al-Ries-e-Jack-Trout-216x300.jpg 216w" sizes="(max-width: 298px) 100vw, 298px"/>
</picture>
</noscript></figure></div>
<p>No livro <a href="https://amzn.to/3tyVImL" target="_blank" rel="noreferrer noopener">As 22 Consagradas Leis do Marketing</a>, os autores Al Ries e Jack Trout evidenciam<strong> várias regras de adaptação</strong> que todo profissional de marketing deve conhecer para criar campanhas e estratégias bem-sucedidas.</p>
<h3>Marketing e Comunicação na Era Pós-digital — As regras mudaram (Walter Longo)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><a href="https://amzn.to/3C78OdM" target="_blank" rel="noopener"><picture class="wp-image-51382">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png.webp 550w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo-207x300.png.webp 207w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20299%20433'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 299px) 100vw, 299px">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20299%20433'%3E%3C/svg%3E" alt="Marketing e Comunicação na Era Pós-digital — As regras mudaram (Walter Longo)" width="299" height="433" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png 550w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo-207x300.png 207w" data-lazy-sizes="(max-width: 299px) 100vw, 299px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png">
</picture>
<noscript><picture class="wp-image-51382">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png.webp 550w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo-207x300.png.webp 207w" sizes="(max-width: 299px) 100vw, 299px"/>
<img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png" alt="Marketing e Comunicação na Era Pós-digital — As regras mudaram (Walter Longo)" width="299" height="433" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo.png 550w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Marketing-e-Comunicacao-na-Era-Pos-digital-—-As-regras-mudaram-Walter-Longo-207x300.png 207w" sizes="(max-width: 299px) 100vw, 299px"/>
</picture>
</noscript></a></figure></div>
<p>Mais uma vez, a tecnologia é tratada como o principal precursor das mudanças mais relevantes na área do marketing: <a href="https://amzn.to/3C78OdM" target="_blank" rel="noreferrer noopener">nesse livro</a>, ela altera todo o pensamento estratégico corporativo, pois ajuda a <strong>compreender melhor as mudanças que afetam os hábitos de consumo</strong> das pessoas e a delimitar as ações mais efetivas em busca de resultados.</p>
<h3>A Bíblia do Marketing Digital (Cláudio Torres)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><picture class="wp-image-51383">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/A-Biblia-do-Marketing-Digital-Claudio-Torres.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20423'%3E%3C/svg%3E">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20423'%3E%3C/svg%3E" alt="A Bíblia do Marketing Digital" width="300" height="423" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/A-Biblia-do-Marketing-Digital-Claudio-Torres.jpg">
</picture>
<noscript><picture class="wp-image-51383">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/A-Biblia-do-Marketing-Digital-Claudio-Torres.jpg.webp"/>
<img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/A-Biblia-do-Marketing-Digital-Claudio-Torres.jpg" alt="A Bíblia do Marketing Digital" width="300" height="423"/>
</picture>
</noscript></figure></div>
<p>Cláudio Torres é um profundo conhecedor de Marketing Digital e um dos grandes nomes do segmento no Brasil. <a href="https://amzn.to/2VyXGXw" target="_blank" rel="noreferrer noopener">Em seu livro</a>, ele mostra o que aprendeu ao longo de sua carreira sobre cada processo de marketing: <strong>planejamento, estratégias, ações e ferramentas para análise de resultados</strong>.</p>
<h3>Regras de Conteúdo (Ann Handley)</h3>
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><a href="https://amzn.to/3hlWEWH" target="_blank" rel="noopener"><picture class="wp-image-51384">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg.webp 346w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley-208x300.jpg.webp 208w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20433'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20433'%3E%3C/svg%3E" alt="Regras de Conteúdo (Ann Handley)" width="300" height="433" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg 346w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley-208x300.jpg 208w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg">
</picture>
<noscript><picture class="wp-image-51384">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg.webp 346w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley-208x300.jpg.webp 208w" sizes="(max-width: 300px) 100vw, 300px"/>
<img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg" alt="Regras de Conteúdo (Ann Handley)" width="300" height="433" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley.jpg 346w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/09/Regras-de-Conteudo-Ann-Handley-208x300.jpg 208w" sizes="(max-width: 300px) 100vw, 300px"/>
</picture>
</noscript></a></figure></div>
<p>O Marketing de Conteúdo não poderia ficar de fora dessa lista. <a href="https://amzn.to/3hlWEWH" target="_blank" rel="noreferrer noopener">Em seu livro</a>, Ann Handley mostra como usar <strong>conceitos de copywriting </strong>para garantir novas e boas oportunidades de negócios na era digital, seja por meio de diferentes tipos de conteúdo, seja a partir da extração de todo o potencial dos canais de comunicação disponíveis atualmente.</p>
<h3>Recursos para aprender mais</h3>
<p>Se depois de ter lido este post inteiro a sua vontade é de aprofundar ainda mais os seus conhecimentos sobre Marketing Digital, aproveite também para explorar outras fontes de aprendizado, como:</p>
<p>
<a href="https://materiais.rockcontent.com/pedidos-de-orcamento">Como gerar mil pedidos de orçamento por mês e como converte-los em clientes</a><br>
<a href="https://materiais.rockcontent.com/kit-marketing-redes-sociais" target="_blank" rel="noopener noreferrer">Guia completo de Marketing nas Redes Sociais</a><br>
<a href="https://rockcontent.com/br/blog/blog-post-de-2-milhoes-de-reais/" target="_blank" rel="noopener noreferrer">Como um único blog post trouxe 2 milhões de reais para a Rock em menos de 3 anos</a><br>
<a href="https://rockcontent.com/br/blog/como-ganhar-dinheiro-com-blog/" target="_blank" rel="noopener noreferrer">Como ganhar dinheiro com blog</a><br>
<a href="https://materiais.rockcontent.com/carreira-marketing-digital">Evento online exclusivo sobre os primeiros passos de uma carreira digital</a><br></p>
<div class="rock-convert-banner"><a href="https://interactive.rockcontent.com/agencias-parceiras?utm_medium=rock-convert&amp;blogconversionurl=https://rockcontent.com/br/blog/marketing-digital/&amp;blogconversionpath=RockConvert&amp;blogconversiondate=04/17/2022" target="_blank" class="rock-convert-cta-link" data-cta-id="52567" data-cta-title="[PT] Conheça as agências parceiras da Rock Content"><picture class="attachment-full size-full" title="[PT] Conheça as agências parceiras da Rock Content">
<source type="image/webp" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png.webp 2000w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-300x80.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1024x274.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-768x206.png.webp 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1536x412.png.webp 1536w" srcset="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202000%20536'%3E%3C/svg%3E" data-lazy-sizes="(max-width: 2000px) 100vw, 2000px">
<img width="2000" height="536" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202000%20536'%3E%3C/svg%3E" alt="Agencias parcerias - Programa de Parcerias - Rock Content" data-lazy-srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png 2000w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-300x80.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1024x274.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-768x206.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1536x412.png 1536w" data-lazy-sizes="(max-width: 2000px) 100vw, 2000px" data-lazy-src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png">
</picture>
<noscript><picture class="attachment-full size-full" title="[PT] Conheça as agências parceiras da Rock Content">
<source type="image/webp" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png.webp 2000w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-300x80.png.webp 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1024x274.png.webp 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-768x206.png.webp 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1536x412.png.webp 1536w" sizes="(max-width: 2000px) 100vw, 2000px"/>
<img width="2000" height="536" src="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png" alt="Agencias parcerias - Programa de Parcerias - Rock Content" srcset="https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36.png 2000w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-300x80.png 300w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1024x274.png 1024w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-768x206.png 768w, https://rockcontent.com/br/wp-content/uploads/sites/2/2021/10/CORRETO-Banner-Oficial-Rock-Convert-36-1536x412.png 1536w" sizes="(max-width: 2000px) 100vw, 2000px"/>
</picture>
</noscript></a></div>
</div>
<div class="content">

            <h1>O que é empreendedorismo: da inspiração à prática</h1>

                        
                                        <ul class="categorias">
                                            <li><a href="https://endeavor.org.br/desafio/desenvolvimento-pessoal/">Desenvolvimento Pessoal</a></li>
                                            <li><a href="https://endeavor.org.br/desafio/estrategia-e-gestao/">Estratégia e Gestão</a></li>
                                            <li><a href="https://endeavor.org.br/formato/artigos/">Artigos</a></li>
                                    </ul>
            
                        <time class="post-time  only-desk" datetime="2018-06-29">Publicado em: 29 de junho, 2018 | Atualizado em: 07 de março, 2022</time>

        </div>
<div class="post-parags" data-spy="scroll" data-target="#table-of-contents-list" data-offset="50">
						<div id="wtr-content" data-bg="#f3f7fa" data-fg="#04f7f7" data-width="6" data-mute="" data-fgopacity="1.00" data-mutedopacity="0.5" data-placement="top" data-placement-offset="76" data-content-offset="85" data-placement-touch="top" data-placement-offset-touch="60" data-transparent="1" data-touch="1" data-non-touch="1" data-comments="0" data-commentsbg="transparent" data-location="page" data-mutedfg="#04f7f7" data-rtl="">
<p>Empreender é usar o tempo e as suas melhores competências técnicas e comportamentais (soft skills) com autonomia para criar valor, assumindo riscos e aceitando desafios. Empreender pode ser uma ação de uma ou mais pessoas que possuam esse perfil. Ter competências para colocar no ar um negócio, não significa ter todas as competências, mas se cercar de pessoas, processos e tecnologia para desenvolver o negócio. Para o empreendedor, a iniciativa é fundamental, bem como, a curiosidade e a predisposição para assumir riscos calculados. O desafio está na alma do empreendedor.&nbsp;</p>



<h2 id="o-brasileiro-empreendedor"><strong>O brasileiro empreendedor</strong></h2>



<p>O brasileiro é um empreendedor por natureza. Mesmo com as leis trabalhistas mais rígidas e protetivas, o brasileiro sempre que teve oportunidade, optou por ter seu próprio negócio. E são muitos os motivos que vão desde a necessidade até o sonho. Empreender está na natureza do brasileiro e faz com que o nosso país seja um dos que mais abre empresas per capita no mundo.</p>	<div id="table-of-contents" class="table-of-contents">
		<div class="table-of-contents-container">
			<p class="title">Neste artigo você vai ver:</p>
			<div id="table-of-contents-list" class="list-group">
				<ul class="list">
																	<li class="item">
															<a href="#o-brasileiro-empreendedor" title="O brasileiro empreendedor" class="link list-group-item list-group-item-action">O brasileiro empreendedor</a>
													</li>
																	<li class="item">
															<a href="#qual-o-conceito-de-empreendedorismo" title="Qual o conceito de empreendedorismo?" class="link list-group-item list-group-item-action">Qual o conceito de empreendedorismo?</a>
													</li>
																	<li class="item">
															<a href="#quanto-eu-preciso-de-dinheiro-para-empreender" title="Quanto eu preciso de dinheiro para empreender?" class="link list-group-item list-group-item-action">Quanto eu preciso de dinheiro para empreender?</a>
													</li>
																	<li class="item">
															<a href="#por-qual-motivo-empreender" title="Por qual motivo empreender?" class="link list-group-item list-group-item-action">Por qual motivo empreender?</a>
													</li>
																																															<li class="item">
															<a href="#qual-e-o-respectivo-significado-da-palavra-empreender" title="Qual é o respectivo significado da palavra empreender?" class="link list-group-item list-group-item-action">Qual é o respectivo significado da palavra empreender?</a>
													</li>
																	<li class="item">
															<a href="#qual-e-a-funcao-de-um-empreendedor" title="Qual é a função de um empreendedor?&nbsp;" class="link list-group-item list-group-item-action">Qual é a função de um empreendedor?&nbsp;</a>
													</li>
																	<li class="item">
															<a href="#o-que-e-necessario-para-comecar-a-empreender" title="O que é necessário para começar a empreender?" class="link list-group-item list-group-item-action">O que é necessário para começar a empreender?</a>
													</li>
																																															<li class="item">
															<a href="#quais-os-principais-perfis-de-empreendedor" title="Quais os principais perfis de empreendedor?" class="link list-group-item list-group-item-action">Quais os principais perfis de empreendedor?</a>
													</li>
																											</ul>
			</div>
		</div>
	</div>
	



<p>Alguns números impressionam. Em 2020 o Brasil chegou a cifra de 20 milhões de CNPJs ativos, sendo que desses cerca de 90% são microempreendedores individuais (MEI), microempresas (ME) e empresas de pequeno porte (EPP). Somente em 2020 o crescimento no número de <a href="https://www.contabilizei.com.br/contabilidade-online/como-abrir-empresa/" target="_blank" rel="noreferrer noopener">abertura de empresas</a> em relação ao ano anterior foi na casa de 6%, com 3,4 milhões de novas empresas.</p>



<p>E os negócios são de todos os tipos e tamanhos. Serviços (com 46% dos negócios) e Comércio (35%) de diversos portes que muitas vezes são a única renda de uma família inteira. Muito importante nesse processo foi a democratização do empreendedorismo com diminuição da burocracia, custos e tempos menores de abertura, contabilidade acessível e linhas de financiamento amigáveis para quem quer ter um negócio próprio. Para você ter uma ideia, o tempo médio de abertura de empresas caiu em 5 anos de mais de 5 dias para menos de 2 dias e o valor cobrado pelos escritórios de contabilidade que antes era de um salário mínimo hoje – dependendo do plano – pode ficar abaixo de R$ 100,00.</p>



<p>O objetivo deste conteúdo é trazer luz sobre o tema empreendedorismo e mostrar de forma objetiva e clara os principais aspectos que circundam o mundo dos negócios que encanta os brasileiros.</p>



<figure class="wp-block-image size-full"><img width="1280" height="854" src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-pergunte-como-scaled-e1618604417946.jpg" alt="empreendedor-pergunte-como-" class="wp-image-26406 lazyloaded" data-ll-status="loaded"><noscript><img width="1280" height="854" src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-pergunte-como-scaled-e1618604417946.jpg" alt="empreendedor-pergunte-como-" class="wp-image-26406"/></noscript></figure>



<h2 id="qual-o-conceito-de-empreendedorismo"><strong>Qual o conceito de empreendedorismo?</strong></h2>



<p>Um dos conceitos mais difundidos sobre empreendedorismo vem da universidade e está disponível em diversas publicações pelo Brasil:</p><div class="conta-dentro-do-conteudo" id="conta-1468243919"><div role="form" class="wpcf7" id="wpcf7-f26392-p26403-o1" lang="pt-BR" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="/contabilidade-online/oque-e-empreender/#wpcf7-f26392-p26403-o1" method="post" class="wpcf7-form init form-especialista demo" novalidate="novalidate" data-hs-cf-bound="true">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="26392">
<input type="hidden" name="_wpcf7_version" value="5.2.2">
<input type="hidden" name="_wpcf7_locale" value="pt_BR">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f26392-p26403-o1">
<input type="hidden" name="_wpcf7_container_post" value="26403">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<div class="cta-forms">
<div class="box">
<h3>Quer ajuda para abrir uma empresa ou ter um CNPJ?</h3>
<p>A Contabilizei é líder em abertura de empresas, deixe seus dados e nossos especialistas entrarão em contato.</p>
<p><label>Nome</label><br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
<p><label>E-mail</label><br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
<p><label>Telefone</label><br>
    <span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" maxlength="15"></span></p>
<p><label>O que você precisa?</label><br>
    <span class="wpcf7-form-control-wrap necessidade"><select name="necessidade" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Quero abrir minha empresa">Quero abrir minha empresa</option><option value="Quero trocar de contador">Quero trocar de contador</option></select></span></p>
<p><label>Qual atividade você vai exercer?</label><br>
    <span class="wpcf7-form-control-wrap atividade"><select name="atividade" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">Selecione sua atividade</option><option value="PJ em uma empresa">PJ em uma empresa</option><option value="Serviços de TI">Serviços de TI</option><option value="Serviços Administrativos">Serviços Administrativos</option><option value="Comércio">Comércio</option><option value="Medicina">Medicina</option><option value="Psicologia e outros saúde">Psicologia e outros saúde</option><option value="Marketing / Publicidade">Marketing / Publicidade</option><option value="Engenharia / Arquitetura">Engenharia / Arquitetura</option><option value="Educação / Cursos">Educação / Cursos</option><option value="Advocacia">Advocacia</option><option value="Consultoria">Consultoria</option><option value="Representação Comercial">Representação Comercial</option><option value="Minha atividade não está na lista">Minha atividade não está na lista</option></select></span></p>
<p><span class="wpcf7-form-control-wrap source"><input type="hidden" name="source" value="oque-e-empreender" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false"></span></p>
<p><input type="submit" value="Fale com especialista" class="wpcf7-form-control wpcf7-submit disabled"><span class="ajax-loader"></span></p>
</div>
<div class="aviso-obrigado hideme">
<h3>TUDO CERTO!</h3>
<p>Recebemos suas informações, logo nossos especialistas entrarão em contato.</p>
</div>
</div>
<p><script type="text/javascript">
jQuery(function(){
	document.addEventListener( 'wpcf7mailsent', function( event ) { 
         if ( '26392' == event.detail.contactFormId ) {
	     jQuery(".aviso-obrigado").css("display", "flex");
         }    
	}, false );
})
</script></p>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div></div>



<p>“O empreendedorismo pode ser compreendido como a arte de fazer acontecer com criatividade e motivação. Consiste no prazer de realizar com sinergismo e inovação qualquer projeto pessoal ou organizacional, em desafio permanente às oportunidades e riscos. É assumir um comportamento proativo diante de questões que precisam ser resolvidas. O empreendedorismo é o despertar do indivíduo para o aproveitamento integral de suas potencialidades racionais e intuitivas. É a busca do autoconhecimento em processo de aprendizado permanente, em atitude de abertura para novas experiências e novos paradigmas.”</p>



<h2 id="quanto-eu-preciso-de-dinheiro-para-empreender"><strong>Quanto eu preciso de dinheiro para empreender?</strong></h2>



<p>Não há um valor. Você precisa estudar o mercado, a concorrência, a sua disponibilidade de capital, as linhas de crédito e principalmente o tipo de negócio que irá tirar do chão. Você terá sócios? Tem algum investidor em vista? Em quanto tempo pretende ter o capital de volta? Faça perguntas e crie um plano de negócio factível com a sua realidade. Isso é determinante na hora de entender de onde vai sair o dinheiro para estabelecer o negócio e principalmente para mantê-lo.</p>



<h2 id="por-qual-motivo-empreender"><strong>Por qual motivo empreender?</strong></h2>



<p>São muitos os motivos para empreender, mas o mais importante é ter em mente que você precisa investir muita energia no seu negócio. Não há negócio de sucesso sem suor e investimento pessoal. Abaixo listamos alguns dos principais motivos pelos quais os empreendedores resolvem se lançar no mundo do negócio próprio.</p>



<h3><strong>1. Realizar seus sonhos</strong></h3>



<p>Existe algo melhor do que tornar um sonho realidade? Tirar do papel uma ideia, um desejo faz com que muita gente opte pelo caminho do empreendedorismo. E o primeiro passo, é tomar a decisão que o seu sonho empreendedor, aquela ideia que vive na sua cabeça, vai ser compartilhada com a sociedade em forma de negócio.</p><div class="conta-cont-6p-cta-bulk cta-bulk" style="margin-left: auto; margin-right: auto; text-align: center; margin-top: 30px; margin-bottom: 30px; " id="conta-1894535840"><a href="https://www.contabilizei.com.br/abrir-empresa/"><img src="/contabilidade-online/wp-content/uploads/2021/07/01.jpg" alt="" width="615" height="300" style="display: inline-block;" sizes="(max-width: 615px) 100vw, 615px" srcset="/contabilidade-online/wp-content/uploads/2021/07/01.jpg 615w,  /contabilidade-online/wp-content/uploads/2021/07/01-300x146.jpg 300w" class="lazyloaded" data-ll-status="loaded"><noscript><img src="/contabilidade-online/wp-content/uploads/2021/07/01.jpg" alt=""  srcset="/contabilidade-online/wp-content/uploads/2021/07/01.jpg 615w,  /contabilidade-online/wp-content/uploads/2021/07/01-300x146.jpg 300w" sizes="(max-width: 615px) 100vw, 615px" width="615" height="300"  style="display: inline-block;" /></noscript></a></div>



<h3><strong>2. Liberdade de escolha</strong></h3>



<p>O dono do negócio, o empreendedor é também o dono <a href="/contabilidade-online/pgdas/">das</a> escolhas. A maioria boas e prazerosas, mas muitas difíceis e delicadas. Ser empreendedor compreende em tomada de decisão, mas também, quando há opção, resolver pelo que lhe dará mais prazer e rentabilidade para o negócio. Questão de escolha.</p>



<h3><strong>3. Gostar de desafios</strong></h3>



<p>Riscos estão totalmente ligados ao empreendedorismo. Quem não gosta de assumir riscos, não tem perfil empreendedor. E o tamanho dos riscos está diretamente ligado aos desafios que você se coloca. Um desafio grande exige mais, mas o resultado esperado também é maior. É necessário determinação, envolvimento e muita energia para superar os desafios porque eles estarão presentes durante toda a jornada do empreendedor´.</p>



<h3><strong>4. Possibilidade de rendimentos maiores</strong></h3>



<p>O que é melhor? Ter um salário fixo, 13o salário, férias pagas, <a href="/contabilidade-online/gfip-beneficios/">FGTS</a>, plano de saúde da empresa e muitos outros direitos ou abrir seu negócio, arcar com todos os riscos, mas poder estipular seu ganho anual – que muitas vezes pode ser exponencial? Pergunta difícil não? Mas é exatamente esta que você deve fazer ao pensar em abrir seu próprio negócio. Rendimentos maiores são possíveis e é a realidade de muitos empreendedores, mas precisa ser planejado e como falamos acima, motivado com muita energia todos os dias.</p>



<h3><strong>5. Flexibilidade de horários</strong></h3>



<p>Dependendo do seu negócio, você trabalhará mais do que quando empregado. Mas isso não é ruim. Você determina sua carga de esforço para o negócio, de acordo com o seu business plan, disponibilidade e tamanho dos seus desafios. E pode flexibilizar os horários de trabalho que não terá interação com outras pessoas.</p>



<h2 id="qual-e-o-respectivo-significado-da-palavra-empreender"><strong>Qual é o respectivo significado da palavra empreender?</strong></h2>



<p>Como conceituamos acima, a palavra empreender é formada a partir de um conjunto de <a href="https://www.contabilizei.com.br/contabilidade-online/caracteristicas-de-um-empreendedor/" target="_blank" rel="noreferrer noopener">características comuns aos empreendedores</a>. Autonomia, determinação, predisposição a riscos, gostar de desafios, querer ser dono do seu próprio negócio, são a base do empreender. São elas que determinam se a pessoa tem um perfil empreendedor ou não. E note que não falamos de capital (dinheiro), justamente porque capital, assim como tecnologia e processos são recursos para empreender mas não inerentes ao ato de empreender.</p>



<figure class="wp-block-image size-full"><img width="1280" height="853" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20853'%3E%3C/svg%3E" alt="empreendedor-cafe-xicara-" class="wp-image-26405" data-lazy-src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-cafe-xicara-scaled-e1618604484341.jpg"><noscript><img width="1280" height="853" src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-cafe-xicara-scaled-e1618604484341.jpg" alt="empreendedor-cafe-xicara-" class="wp-image-26405"/></noscript></figure>



<h2 id="qual-e-a-funcao-de-um-empreendedor"><strong>Qual é a função de um empreendedor?&nbsp;</strong></h2>



<p>Do ponto de vista racional, a principal função do empreendedor é <a href="https://www.contabilizei.com.br/contabilidade-online/financas-como-empreender/" target="_blank" rel="noreferrer noopener">abrir o negócio</a> e fazer com que ele seja rentável ao longo do tempo. Além disso, tomar decisões, correr alguns riscos e alinhar a expectativa de todos que fazem parte do ecossistema (empregados, sócios, investidores, família, amigos, fornecedores) são funções inerentes ao empreendedor.&nbsp;</p>



<p>Como o negócio é um ente vivo impactado pelo ambiente externo e interno é importante que o empreendedor sempre tenha em mente que uma das suas principais funções é lidar com as situações de maneira objetiva e o mais justa possível, possibilitando soluções eficazes e eficientes para o crescimento e manutenção do empreendimento.</p>



<h2 id="o-que-e-necessario-para-comecar-a-empreender"><strong>O que é necessário para começar a empreender?</strong></h2>



<p>Para <a href="https://www.contabilizei.com.br/contabilidade-online/empreender-sem-experiencia/">começar a empreender</a> é necessário tomar a decisão e depois, seguir alguns passos importantes que ajudarão no caminho entre a ideia e o sonho, à prática. Conheça os 5 passos que você não pode ignorar:</p>



<h3><strong>1.Delimite o problema e estabeleça a solução</strong></h3>



<p>Crie o limite, o espaço em que o seu empreendimento vai atuar. para cada problema existem muitas possibilidades de solução, por isso é importante que você estabeleça qual o seu nicho, o seu campo, seu público e como vai atuar.</p>



<h3><strong>2.Coloque no papel a sua ideia</strong></h3>



<p>Torne visual a sua ideia. Vai ficar mais fácil enxergar os caminhos, os obstáculos e as soluções possíveis para o problema de forma rentável e com o menor recurso possível. Cada um tem uma forma visual, que pode ser um software, lápis e papel, em grupo ou sozinho.</p>



<h3><strong>3.Visualize o cenário em que você está inserido</strong></h3>



<p>Desenvolva a sua ideia vislumbrando todo o cenário. Uma visão holística e generalista é importante para determinar o nível do seu desafio e, a partir daí, estabelecer a estratégia que utilizará no seu novo negócio.</p>



<h3><strong>4.Procure parceiros</strong></h3>



<p>Ninguém faz tudo sozinho. Procure um sócio, um investidor, um mentor, um amigo. Você precisa ter por perto pessoas que façam perguntas e respondam perguntas. São elas que ajudarão na confiança que você precisa para saber referendar as tomadas de decisão.</p>



<h3><strong>5.Seja flexível desde o início</strong></h3>



<p>Muitas vezes novas oportunidades aparecem durante o processo de estabelecimento da empresa e você, como está totalmente focado na sua ideia inicial, não percebe a oportunidade. Esteja sempre atento às mudanças de rumo e não perca a chance de já começar no caminho certo.</p>



<figure class="wp-block-image size-full"><img width="1280" height="878" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20878'%3E%3C/svg%3E" alt="empreendedor-chef-cozinha" class="wp-image-26407" data-lazy-src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-chef-cozinha-scaled-e1618604530101.jpg"><noscript><img width="1280" height="878" src="/contabilidade-online/wp-content/uploads/2021/04/empreendedor-chef-cozinha-scaled-e1618604530101.jpg" alt="empreendedor-chef-cozinha" class="wp-image-26407"/></noscript></figure>



<h2 id="quais-os-principais-perfis-de-empreendedor"><strong>Quais os principais perfis de empreendedor?</strong></h2>



<p>Não existe apenas um perfil de empreendedor. O ideal é contrabalançar os skills e ser o mais completo possível. Porém isso é no mundo ideal. É importante entender que sempre um perfil será mais evidente em cada pessoa.<a href="https://www.contabilizei.com.br/contabilidade-online/que-tipo-de-empreendedor-voce-se-identifica/" target="_blank" rel="noreferrer noopener"> Confira os perfis e veja com qual você mais se identifica.&nbsp;</a></p>



<p>Dica: Desenvolva os demais perfis. é muito importante que você possa se adaptar às situações e atue de maneira integral no seu negócio.</p>



<h3><strong>1.Executor, coloca a mão na massa</strong></h3>



<p>Neste perfil o importante é estar diretamente ligado ao negócio. É o perfil clássico para os empreendedores por necessidade, que são aqueles que muitas vezes não tem opção e estabelecem a empresa a partir de suas habilidades.&nbsp;</p>



<p>com certeza este é o perfil mais comum de empreendedor. quem nunca ouviu a expressão “o olho do dono engorda o gado”? É o clássico, estou cuidando de tudo no meu negócio, não tiro o olho e estou sempre disponível. Isso vale para os empreendedores únicos e para aqueles que tem um negócio maior. Ele é um empreendedor esponja, ou seja, mesmo que não tenha determinada habilidade ou experiência, aprende fazendo e coloca em prática no dia a dia tudo o que desenvolve.</p>



<p>Uma armadilha que normalmente este tipo de empreendedor cai é não delegar quando pode. Ficar com o total controle de todas as atividades pode não ser salutar para o negócio e criar problemas futuros, principalmente para o crescimento do negócio. é muito importante delimitar o campo em que você vai atuar como gestor e como executor propriamente dito.</p>



<h3><strong>2.Gestor, faço a gestão do meu negócio</strong></h3>



<p>É o empreendedor que tem uma visão mais macro do negócio. Entende que tem que abrir espaço e não pode fazer tudo sozinho. Procura se aliar a profissionais ou parceiros que entregam aquilo que ele não pode ou não precisa fazer sozinho. Este perfil de empreendedor estabelece as diretrizes a partir da estratégia e fica para si aquelas atividades e decisões que efetivamente são do principal executivo da empresa.</p>



<p>Um bom exemplo de atividade que pode ser delegada a um parceiro externo pelo perfil Gestor é a contabilidade e gestão de tributos. Este perfil normalmente precisa da ajuda de um profissional especializado em gestão financeira para organizar e cuidar das principais rotinas do seu negócio e para isso, a Contabilizei lançou uma solução inovadora e completa, chamada <a href="https://www.contabilizei.com.br/experts/" target="_blank" rel="noreferrer noopener">Contabilizei Experts</a>. São assessores financeiros especializados para terceirizar as principais rotinas contábeis, administrativas e financeiras.&nbsp;</p>



<p>Diferente do executor, o gestor assume naturalmente a designação de empresário. A visão do brasileiro sobre quem é a figura do empresário corresponde exatamente a este perfil de empreendedor, dono do negócio, que tem empregados, estabelece metas e desafios para o seu negócio.</p>



<p>O forte desse perfil é o controle de números, processos, investimentos, tecnologia e headcount. Lida bem com os riscos porque antevê as dificuldades e oportunidades. Alinha uma visão estratégica a de coach do time que o vê como um líder por excelência.</p>



<h3><strong>3.Criativo, tenho ideias e sonhos</strong></h3>



<p>O perfil criativo vai além da sua própria empresa, é o mais preparado para observar os cenários e vislumbrar oportunidades tanto de negócios como de suporte à comunidade. Não perde uma inovação e está sempre à frente do seu tempo. O criativo é o primeiro em um novo nicho de mercado, em um novo local que oferece melhores condições por que ele está sempre atento a tudo que está acontecendo no mundo.</p>



<p>Quem é um empreendedor criativo normalmente não está muito apegado ao negócio. O criativo se cerca de bons executores e seu prazer está no laboratório de desenvolvimento de soluções criativas e inovadoras para o negócio.</p>



<p>Uma bandeira que se deve levantar quando este é perfil, é que com o empreendedor fora do dia a dia podem surgir instabilidades e demora nas tomadas de decisões. é importante se você tiver este perfil, entender que o que está levando a empresa e trazendo faturamento para o’desenvolvimento de novas ideias é justamente o dia a dia e rotina. Mesmo sendo criativo, o empreendedor jamais pode deixar de lado a gestão e execução dos processos fundamentais ao crescimento e sucesso da empresa.</p>
</div><p></p>
						
											</div>
<!-- for ads -->


  </main><!-- End #main -->
@show
