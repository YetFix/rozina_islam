@extends('frontend.master')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <br>
  <br>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{URL::asset('newsimg')}}/{{$news->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="/news/{{$news->id}}">{{$news->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Rozina Islam</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$news->created_at->diffForHumans()}}</time></a></li>
              
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {!! $news->desc!!}
                </p>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{$news->category->name}}</a></li>
                </ul>

                
              </div>

            </article><!-- End blog entry -->

           

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

          

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                   @foreach ($categories as  $category)
                  <li><a href="#">{{$category->name}} <span>(14)</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
@endsection