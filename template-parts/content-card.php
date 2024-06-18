<div class="mg-card">
  <div class="img-placeholder">
    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
    endif;
    ?>
  </div>
  <div class="mg-card-content">
    <?php
    global $post;
    $cat = get_the_category($post->ID);
    $catName = $cat[0]->cat_name;
    $catID = get_cat_ID($catName);
    $catSlug = get_category_link($catID); ?>
    <a href="<?php echo $catSlug; ?>" class="cat-btn">
      <?php echo $catName; ?>
    </a>
    <a href="<?php echo get_the_permalink(); ?>" class="blog-title"><?php echo wp_trim_words(get_the_title(), 10) ?></a>
    <p><?php echo wp_trim_words(get_the_excerpt(), 12) ?></p>
    <a href="<?php echo get_the_permalink(); ?>" class=" mg-btn-txt">
      Read More
      <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 5.25a.75.75 0 0 0 0 1.5zm12.53 1.28a.75.75 0 0 0 0-1.06L8.757.697a.75.75 0 1 0-1.06 1.06L11.939 6l-4.242 4.243a.75.75 0 0 0 1.06 1.06zM1 6.75h12v-1.5H1z" fill="#000" />
      </svg>
    </a>
  </div>
</div>