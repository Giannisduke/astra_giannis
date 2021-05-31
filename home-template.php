<?php
/**
* Template Name: Home Template
*/

get_header(); ?>

<!-- Section Hero -->
<section class="hero">
  <div class="container-fluid h-100 test">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 text-center test">
        <h1><?php the_field('hero_title'); ?></h1>
        <p><?php the_field('hero_subtitle'); ?></p>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
