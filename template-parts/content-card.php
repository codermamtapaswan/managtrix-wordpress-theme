<div class="mg-card">
  <div class="img-placeholder">
    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
    endif;
    ?>
  </div>
  <div class="mg-card-content">
    <a href="#" class="cat-btn">blog</a>
    <a href="#" class="blog-title">Here are 15 Sure-Shot Ways to Fix “Netflix Error Code</a>
    <p>Lorem ipsum dolor, sit amet sit amet consectetur adipisicing elit.</p>
    <a href="#" class="mg-btn-txt">
      Read More
      <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 5.25a.75.75 0 0 0 0 1.5zm12.53 1.28a.75.75 0 0 0 0-1.06L8.757.697a.75.75 0 1 0-1.06 1.06L11.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06zM1 6.75h12v-1.5H1z" fill="#000" />
      </svg>
    </a>
  </div>
</div>