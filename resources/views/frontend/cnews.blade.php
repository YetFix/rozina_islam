@extends('frontend.master')

@section('content')
<br>
<br>
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>News Categorywise</h2>
      </header>
      <div class="row">

        @foreach ($bbc as $n )
            <div class="col-lg-4">
                <div class="post-box">
                <div class="post-img"><img src="{{URL::asset('newsimg')}}/{{$n->image}}" class="img-fluid" alt=""></div>
                <span class="post-date">{{$n->created_at->diffForHumans()}}</span>
                <p class="1">{!! $n->desc !!}</p>
              
                <a href="/news/{{$n->id}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        @endforeach

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

@endsection