@extends('frontend.master')

@section('content')
<br>
<br>

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Gallery</h2>
      </header>

    

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- End portfolio Section -->
@endsection