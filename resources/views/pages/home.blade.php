@extends('layouts.layout')

@section('title')
Home Page
@endsection

@section('section')

<!-- Hero Section -->
<section id="hero" class="section hero light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1>Bettter digital experience with Ninestars</h1>
          <p>We are team of talented designers making websites with Bootstrap</p>
          <div class="d-flex">
            <a href="index.html#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

@endsection
