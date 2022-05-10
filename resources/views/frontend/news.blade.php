@extends('frontend.master')

@section('content')
<br>
<br>
   <!-- ======= Values Section ======= -->
   <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Recent News</h2>
      
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="{{route('single')}}">
            <div class="box">
                <img src="{{asset('frontend/assets/img/values-1.png')}}" class="img-fluid" alt="">
                <h3>Ad cupiditate sed est odio</h3>
                <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('single')}}">
          <div class="box">
            <img src="{{asset('frontend/assets/img/values-2.png')}}" class="img-fluid" alt="">
            <h3>Voluptatem voluptatum alias</h3>
            <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
          </div>
            </a>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <a href="{{route('single')}}">
          <div class="box">
            <img src="{{asset('frontend/assets/img/values-3.png')}}" class="img-fluid" alt="">
            <h3>Fugit cupiditate alias nobis.</h3>
            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
          </div>
            </a>
        </div>

      </div>
      <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('single')}}">
            <div class="box">
              <img src="{{asset('frontend/assets/img/values-1.png')}}" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{asset('frontend/assets/img/values-2.png')}}" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{asset('frontend/assets/img/values-3.png')}}" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

    </div>

  </section><!-- End Values Section -->
@endsection