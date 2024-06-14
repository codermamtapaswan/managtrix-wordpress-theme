    <!-- Main layout Sections ===================== START -->
    <main class="all-page">
      <!-- Section 1 ================= START -->
      <div class="page-header">
        <div class="container">
          <p id="breadcrumbs">
            <span>
              <span>
                <a href="#">Home</a>
              </span>
              <span>
                <a href="#">Page</a>
              </span>
              <span>
                <a href="#">Page Template</a>
              </span>
            </span>
          </p>

          <h1><?php echo get_the_title(); ?></h1>
        </div>
      </div>
      <div class="page-content">
        <div class="container">
          <?php
          // Apply Content Filter
          $content = apply_filters("the_content", get_the_content());
          echo $content;
          ?>
        </div>
      </div>
      <!-- Section 1 =========== END -->
    </main>
    <!-- Main layout Sections ====================== END -->