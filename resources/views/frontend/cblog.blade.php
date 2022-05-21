@extends('frontend.master')

@section('content')
<br>
<br>
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog of {{$category->name}}</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">

       @if ($blogs->count()==0)
          <h2 style="text-align: center;color:red">No blogs of this category</h2>
       @else
        @foreach ($blogs as $blog )
        <div class="col-lg-4">
            <div class="post-box">
            <div class="post-img"><img src="{{URL::asset('blogimg')}}/{{$blog->image}}" class="img-fluid" alt=""></div>
            <span class="post-date">Tue, September 15</span>
            <p class="1">{!! $blog->desc !!}</p>
            <a href="/blog/{{$blog->id}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        @endforeach
       @endif

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

@endsection