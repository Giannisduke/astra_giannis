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


<!-- Section About -->
<section class="about">
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 col-lg-6 order-2 order-lg-1 text-center test">
        <div class="image_wrapper">
        <img class="img-fluid" src="assets/img/placeholder_w520.jpg" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-6 h-50 order-1 order-lg-2 test">
        <div class="d-flex flex-column h-100 px-5">
          <h3>Όνομα Επίθετο</h3>
          <span>Web Designer</span>
          <p>Σχεδίαση ιστοσελίδων και σελίδων καταστημάτων.</p>
          <button type="button" class="btn btn-primary mt-auto w-25">Primary</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section About End -->
<!-- Section Services -->
<section class="services">
  <div class="container test">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Υπηρεσίες</h2>
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-12 test">
        <div class="card-deck">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Services End -->


<?php get_footer(); ?>
