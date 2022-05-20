@extends('frontend.master')

@section('content')
<br>
<br>

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">

 <div class="container" data-aos="fade-up">

   <div class="row">

     <div class="col-lg-8 entries">

      <div class="row">

        @foreach ($news as $n )
          <div class="col-lg-6">
          <a href="/news/{{$n->id}}">
            <article class="entry">

              <div class="entry-img">
                <img src="{{URL::asset('newsimg')}}/{{$n->image}}" alt="" class="img-fluid">
              </div>
              <p style="color: black"> {{$n->title}}</p>
            
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Rozina Islam</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$n->created_at->diffForHumans()}}</time></a></li>
                </ul>
              </div>
    
              <div class="entry-content">
  
                <div class="read-more">
                  <a href="/news/{{$n->id}}">Read More</a>
                </div>
              </div>
    
            </article>
          </a>
          </div>
        @endforeach

      </div>

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

         <h3 class="sidebar-title">Recent Posts</h3>
         <div class="sidebar-item recent-posts">
           <div class="post-item clearfix">
             <img src="frontend/assets/img/blog/blog-recent-1.jpg" alt="">
             <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>

           <div class="post-item clearfix">
             <img src="frontend/assets/img/blog/blog-recent-2.jpg" alt="">
             <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>

           <div class="post-item clearfix">
             <img src="frontend/assets/img/blog/blog-recent-3.jpg" alt="">
             <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>

           <div class="post-item clearfix">
             <img src="frontend/assets/img/blog/blog-recent-4.jpg" alt="">
             <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>

           <div class="post-item clearfix">
             <img src="frontend/assets/img/blog/blog-recent-5.jpg" alt="">
             <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>

         </div><!-- End sidebar recent posts-->

       

       </div><!-- End sidebar -->

     </div><!-- End blog sidebar -->

   </div>

 </div>
</section>
<!-- End Blog Section -->

@endsection