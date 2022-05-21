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
                <img src="{{URL::asset('blogimg')}}/{{$blog->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="/blog/{{$blog->id}}">{{$blog->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog/{{$blog->id}}">Rozina Islam</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog/{{$blog->id}}"><time datetime="2020-01-01">{{$blog->created_at->diffForHumans()}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {!! $blog->desc!!}
                </p>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{$blog->category->name}}</a></li>
                </ul>

                
              </div>

            </article><!-- End blog entry -->

            {{-- <div class="blog-author d-flex align-items-center">
              <img src="{{asset('frontend/assets/img/blog/blog-author.jpg')}}" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End blog author bio --> --}}

         

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

          

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                   @foreach ($categories as  $category)
                  <li><a href="/blog/category/{{$category->id}}">{{$category->name}} <span>({{$category->blogs->count()}})</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
@endsection