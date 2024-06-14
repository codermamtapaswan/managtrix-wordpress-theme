    <!-- Main layout Sections ===================== START -->
    <main class="all-page">
      <div class="container">
        <p id="breadcrumbs">
          <span>
            <span>
              404 Error
            </span>
          </span>
        </p>

        <div class="page-status-content">
          <div class="row row-gap v-center">
            <div class="col-lg-7 col-md-7">
              <div class="page-status-title">
                <span class="h2">Oops!</span>
                <span class="h2">Page Not Found</span>
              </div>
              <p>The page you are looking for might have been removed, had its name changed or is temporarily
                unavailable.</p>
              <div class="flex-wrap">
                <a href="<?php echo MANAGTRIX_HOME_URI; ?>" class="mg-btn-bg">Back To Home</a>
                <a href="<?php echo MANAGTRIX_HOME_URI . 'contact' ?>" class="mg-btn">
                  Contact Us
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.625 9.25L5.375 5.5L1.625 1.75" stroke="#009A77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>

                </a>
              </div>
            </div>
            <div class="col-lg-5 col-md-5">
              <img src="<?php echo managtrix_img_path('404-img.svg') ?>" alt="404 Page Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </main>
    <!-- Main layout Sections ====================== END -->