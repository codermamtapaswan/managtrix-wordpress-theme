  <?php

    /**
     * The front page template file.
     *
     * @link https://codex.wordpress.org/Template_Hierarchy
     *
     * @package Managtrix
     * @since   Managtrix 1.0.0
     */


    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    get_header();

    ?>


  <!-- Main layout Sections ===================== START -->
  <main class="all-page">

      <!-- Hero Sections ================= START -->
      <section class="mg-con-bg hero">
          <div class="container">
              <div class="row row-gap v-center">
                  <div class="col-lg-7 col-md-12">
                      <div class="h1">The Simplest HR Software</div>
                      <div class="h5">Automating the most challenging tasks</div>
                      <P>Enabling HR professionals to maximize their impact by liberating their time and mental energy
                          to
                          craft their ideal workplace environment.</P>

                      <ul class="grid-2">
                          <li>Easy employee management.</li>
                          <li>Tracks attendance efficiently.</li>
                          <li>Automates payroll processing.</li>
                          <li>Scalable for growth.</li>
                      </ul>

                      <div class="flex-wrap">
                          <a href="#" class="mg-btn-bg">Request a demo</a>
                      </div>
                  </div>
                  <div class="col-lg-5 col-md-12">
                      <div class="hero-img-cont">
                          <img src="<?php echo managtrix_img_path('hero-img.svg'); ?>" alt="hero-img" class="img-fluid">
                      </div>
                  </div>
              </div>
          </div>
      </section> <!-- Hero Sections ======== END -->

      <!-- Section 1 ==================== START -->
      <section class="mg-con clients">
          <div class="container ">
              <div class="sec-title">
                  <div class="h4">Trusted by millions, including teams at</div>
              </div>
              <div class="row row-gap">
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-1.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-2.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-3.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-4.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-5.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-6.png'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-7.webp'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-8.webp'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-10.webp'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-11.svg'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-13.svg'; ?>" alt="" class="img-fluid"></figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col">
                      <figure><img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/clients/client-14.svg'; ?>" alt="" class="img-fluid"></figure>
                  </div>

              </div>
          </div>
      </section> <!-- Section 1 =========== END -->

      <!-- Section 2 ==================== START -->
      <section class="mg-con-bg hr-process">
          <div class="container">
              <div class="sec-title">
                  <div class="h2">Smart HR to outsmart the changing world</div>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its
                      layout.</p>
              </div>
              <div class="row row-gap">

                  <div class="col-lg-12">
                      <div class="tab row scroll-cont" id="tabContainer">
                          <div class="col-lg-2 col">
                              <button class="tablinks active" data-Process="hr_Process_1">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-1.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Hire & Onboard</span>
                              </button>
                          </div>
                          <div class="col-lg-2 col">
                              <button class="tablinks" data-Process="hr_Process_2">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-2.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Track</span>
                              </button>
                          </div>
                          <div class="col-lg-2 col">
                              <button class="tablinks" data-Process="hr_Process_3">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-3.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Manage</span>
                              </button>
                          </div>
                          <div class="col-lg-2 col">
                              <button class="tablinks" data-Process="hr_Process_4">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-4.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Develop</span>
                              </button>
                          </div>
                          <div class="col-lg-2 col">
                              <button class="tablinks" data-Process="hr_Process_5">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-5.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Off-board</span>
                              </button>
                          </div>
                          <div class="col-lg-2 col">
                              <button class="tablinks" data-Process="hr_Process_6">
                                  <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-tab/hr-tab-6.svg' ?>" alt="bank" class="img-fluid" />
                                  <span>Redress</span>
                              </button>
                          </div>

                      </div>
                  </div>

                  <div class="col-lg-12">
                      <div id="hr_Process_1" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Hire & Onboard</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                      <div id="hr_Process_2" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Track</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                      <div id="hr_Process_3" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Manage</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                      <div id="hr_Process_4" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Develop</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                      <div id="hr_Process_5" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Off-board</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                      <div id="hr_Process_6" class="tabcontent">
                          <div class="row row-gap v-center">
                              <div class="col-lg-8 col-md-6">
                                  <div class="h4">Redress</div>
                                  <p>It is a long established fact that a reader will be distracted by the readable
                                      content of a page when looking at its layout. It is a long established fact that
                                      a reader will be distracted by the readable
                                      content of a page when looking at its layout.</p>
                                  <ul>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                      <li>long established fact.</li>
                                  </ul>

                                  <a href="#" class="mg-btn-bg">Get Started</a>

                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <img src="<?php echo managtrix_img_path('hr-process.svg'); ?>" alt="" class="img-fluid">
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> <!-- Section 2 =========== END -->

      <!-- Section 3 ==================== START -->
      <section class="mg-con hr-tasks">
          <div class="container ">
              <div class="sec-title sec-w">
                  <div class="h2">Everything you need to create a high performance culture.</div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-6">
                      <div class="task-box">
                          <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-task/hr-task-1.svg' ?>" alt="" class="img-fluid">
                          <span class="h6">Modern HR</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="task-box">
                          <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-task/hr-task-2.svg' ?>" alt="" class="img-fluid">
                          <span class="h6">Project timesheet</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="task-box">
                          <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-task/hr-task-3.svg' ?>" alt="" class="img-fluid">
                          <span class="h6">Time & Attendance</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="task-box">
                          <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-task/hr-task-4.svg' ?>" alt="" class="img-fluid">
                          <span class="h6">Performance</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content.
                          </p>
                      </div>
                  </div>

              </div>

          </div>
      </section> <!-- Section 3 =========== END -->


      <!-- Section 4 ==================== START -->
      <section class="mg-con awards">
          <div class="container">
              <div class="sec-title">
                  <div class="h2">Appreciation and Awards</div>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its
                      layout.</p>

                  <div class="award-wrap scroll-cont row">
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-1.svg' ?>" alt="" class="img-fluid"></div>
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-2.svg' ?>" alt="" class="img-fluid"></div>
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-3.svg' ?>" alt="" class="img-fluid"></div>
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-4.svg' ?>" alt="" class="img-fluid"></div>
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-5.svg' ?>" alt="" class="img-fluid"></div>
                      <div class="col-lg-2 col"><img decoding="async" src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/award/award-6.svg' ?>" alt="" class="img-fluid"></div>
                  </div>

              </div>
          </div>

          <div class="why-choose">
              <div class="container">
                  <div class="row row-gap v-center">
                      <div class="col-lg-6 col-md-12">
                          <div class="why-choose-l">
                              <div class="h2">Why Choose Managetrix ?</div>
                              <p>It is a long established fact that a reader will be distracted by the readable
                                  content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                  it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                  here, content here', making it look like readable English.</p>

                              <div class="resource flex">
                                  <div class="box">
                                      <span>300+</span>
                                      <span>COMPANIES</span>
                                  </div>
                                  <div class="box">
                                      <span>50+</span>
                                      <span>HIRES</span>
                                  </div>
                                  <div class="box">
                                      <span>150+</span>
                                      <span>CANDIDATES</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <div class="why-choose-r">
                              <div class="box flex">
                                  <div class="thum-svg">
                                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect width="60" height="60" rx="7.728" fill="#E3FFF8" />
                                          <path d="m24.812 28.676 3.864-8.695a2.9 2.9 0 0 1 2.898 2.898v3.865h5.468a1.933 1.933 0 0 1 1.932 2.222L37.64 37.66a1.93 1.93 0 0 1-1.932 1.642H24.81m0-10.626v10.626m0-10.626h-2.898a1.93 1.93 0 0 0-1.932 1.932v6.762a1.93 1.93 0 0 0 1.932 1.932h2.898" stroke="#009A77" stroke-width="1.932" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                  </div>
                                  <div class="box-content">
                                      <div class="h5">Uncompromising Quality</div>
                                      <p>Netus feugiat vitae enim enim in viverra. Id at sagittis cras pretium dictum
                                          nec netus. Ante dolor quis convallis.</p>
                                  </div>
                              </div>
                              <div class="box flex">
                                  <div class="thum-svg">
                                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect width="60" height="60" rx="7.728" fill="#E3FFF8" />
                                          <path d="m24.812 28.676 3.864-8.695a2.9 2.9 0 0 1 2.898 2.898v3.865h5.468a1.933 1.933 0 0 1 1.932 2.222L37.64 37.66a1.93 1.93 0 0 1-1.932 1.642H24.81m0-10.626v10.626m0-10.626h-2.898a1.93 1.93 0 0 0-1.932 1.932v6.762a1.93 1.93 0 0 0 1.932 1.932h2.898" stroke="#009A77" stroke-width="1.932" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                  </div>
                                  <div class="box-content">
                                      <div class="h5">User-Friendly Interface</div>
                                      <p>Netus feugiat vitae enim enim in viverra. Id at sagittis cras pretium dictum
                                          nec netus. Ante dolor quis convallis.</p>
                                  </div>
                              </div>
                              <div class="box flex">
                                  <div class="thum-svg">
                                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect width="60" height="60" rx="7.728" fill="#E3FFF8" />
                                          <path d="m24.812 28.676 3.864-8.695a2.9 2.9 0 0 1 2.898 2.898v3.865h5.468a1.933 1.933 0 0 1 1.932 2.222L37.64 37.66a1.93 1.93 0 0 1-1.932 1.642H24.81m0-10.626v10.626m0-10.626h-2.898a1.93 1.93 0 0 0-1.932 1.932v6.762a1.93 1.93 0 0 0 1.932 1.932h2.898" stroke="#009A77" stroke-width="1.932" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                  </div>
                                  <div class="box-content">
                                      <div class="h5">Collaboration Tools</div>
                                      <p>Netus feugiat vitae enim enim in viverra. Id at sagittis cras pretium dictum
                                          nec netus. Ante dolor quis convallis.</p>
                                  </div>
                              </div>


                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> <!-- Section 4 =========== END -->


      <!-- Section 5 ==================== START -->
      <section class="mg-con how-we-work">
          <div class="container ">
              <div class="sec-title">
                  <div class="h2">How We Work</div>
              </div>
              <div class="row row-gap">
                  <div class="col-lg-3 col-md-6">
                      <div class="work-box">
                          <div class="icon flex-center">
                              <div>01</div>
                              <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-work/hr-work-1.svg' ?>" alt="" class="img-fluid">
                          </div>
                          <div class="box-content">
                              <span class="h5">Planning & Selection</span>
                              <p>It is a long established fact that a reader.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="work-box">
                          <div class="icon flex-center">
                              <div>02</div>
                              <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-work/hr-work-2.svg' ?>" alt="" class="img-fluid">
                          </div>
                          <div class="box-content">
                              <span class="h5">Implementation</span>
                              <p>It is a long established fact that a reader.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="work-box">
                          <div class="icon flex-center">
                              <div>03</div>
                              <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-work/hr-work-3.svg' ?>" alt="" class="img-fluid">
                          </div>
                          <div class="box-content">
                              <span class="h5">Training & Adoption</span>
                              <p>It is a long established fact that a reader.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="work-box">
                          <div class="icon flex-center">
                              <div>04</div>
                              <img src="<?php echo MANAGTRIX_DIR_URI . '/assets/images/hr-work/hr-work-4.svg' ?>" alt="" class="img-fluid">
                          </div>
                          <div class="box-content">
                              <span class="h5">Optimization</span>
                              <p>It is a long established fact that a reader.</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </section> <!-- Section 5 =========== END -->

      <!-- Section 6 ==================== START -->
      <section class="mg-con testimonials">
          <div class="container">
              <div class="sec-title">
                  <div class="h2">Some brands you love, Love us!</div>
              </div>
              <div class="slide-wrapper">
                  <div class="carousel">
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 1</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 2</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                      <div class="slide-card">
                          <div class="testimonial-wrap flex">
                              <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                  readable content of a page when looking at its layout. The point of using Lorem
                                  Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                  using 'Content here, content here', making it look like readable English.</p>
                              <hr>
                              <div class="test-detail">
                                  <img src="https://getassist.net/wp-content/uploads/2024/01/Himanshu-kumar.webp" alt="" class="img-fluid">
                                  <span class="h6">Emily Johnson 3</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="indicators"></div>
              </div>


          </div>
      </section> <!-- Section 6 =========== END -->

      <!-- Section 7 ==================== START -->
      <section class="mg-con blog">
          <div class="container ">
              <div class="row row-gap">
                  <div class="col-lg-4 col-md-12">
                      <div class="sec-title">
                          <div class="h2">Recent blog posts and news insignt</div>
                          <p>
                              It is a long established fact that a reader will be distracted by the readable content
                              of a page
                              when looking at its layout.
                          </p>

                          <a href="#" class="mg-btn-bg">View All Post</a>
                      </div>
                  </div>

                  <div class="col-lg-8 col-md-12">
                      <div class="grid-2">
                          <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'cat' => 327,
                                'order' => 'DESC',
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    global $post;
                                    $cat = get_the_category($post->ID);
                                    $catSlug = $cat[0]->slug;
                                    $catName = $cat[0]->cat_name;
                            ?>

                                  <div class="mg-flip-card">
                                      <div class="img-placeholder">
                                          <?php
                                            if (has_post_thumbnail()) {
                                                has_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                                            }
                                            ?>
                                      </div>
                                      <div class="mg-card-content">
                                          <a href="<?php echo $catSlug; ?>" class="category"><?php echo $catName; ?></a>
                                          <a href="<?php the_permalink(); ?>" class="blog-title">
                                              <?php echo wp_trim_words(get_the_title(), 10) ?></a>
                                          <hr>
                                          <div class="timeline"> <?php echo get_the_date('F j,Y') ?> <span>/</span> By <a href="#"><?php the_author(); ?></a>
                                          </div>
                                      </div>
                                  </div>

                          <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>



                      </div>
                  </div>



              </div>
          </div>
      </section> <!-- Section 7 =========== END -->

  </main>
  <!-- Main layout Sections ====================== END -->


  <?php get_footer(); ?>