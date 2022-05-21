@extends('frontend.master')

@section('content')

<br>
<br>
  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-end">
          <h1 data-aos="fade-up">Rozina Islam</h1>
           <b><h2 data-aos="fade-up">Special Correspondent, <br></b>
            The Daily Prothom Alo</h2>
              <br>
              <li style="font-size: 25px;">Bangladesh Probashi Odhikar Porishad</li>
              <li style="font-size: 25px;">International Visitor Leadership Program</li>
              <li style="font-size: 25px;">UNESCO Club Journalism Award</li>
              <li style="font-size: 25px;">Appreciation from Syracuse University</li>
              <li style="font-size: 25px;">বদলের সহযোগী-২০১৩</li>
         
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('frontend/assets/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section> --}}
  <!-- End Hero -->
<!-- ======= About Section ======= -->
<section id="about" class="portfolio-details">
  <div class="container">
    <div class="owl-carousel">
      @foreach ($sliders as $slider )
      <img src="{{URL::asset('slidersimg')}}/{{$slider->image}}" class="img-fluid" alt="" style="height:450px;">
      @endforeach
    </div>
  </div>
              
</section><!-- End Slider Details Section -->


<h1 style="text-align: center">Recent Awards</h1>   
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

   
    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
      @foreach($awards as $award)
      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
            <img src="{{URL::asset('awardimg')}}/{{$award->image}}" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>{{$award->title}}</h4>
            <p>{!! $award->desc !!}</p>
            <div class="portfolio-links">
                <a href="{{URL::asset('awardimg')}}/{{$award->image}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Award"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
      </div>
      @endforeach
  </div>
   

  </div>

</section>

<h1 style="text-align: center">Recent Certificates</h1>  
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

   
    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
      @foreach($certificates as $certificate)
      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
            <img src="{{URL::asset('certificateimg')}}/{{$certificate->image}}" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>{{$certificate->title}}</h4>
            <p>{!! $certificate->desc !!}</p>
            <div class="portfolio-links">
                <a href="{{URL::asset('certificateimg')}}/{{$certificate->image}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Certificate"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
      </div>
      @endforeach
  </div>
   

  </div>

</section>
<section id="about" class="about mt-0">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Who Am I</h3>
          <h2>রোজিনা ইসলাম</h2>
          <p>
            রোজিনা ইসলাম হলেন একজন বাংলাদেশী অনুসন্ধানী সাংবাদিক।তিনি বাংলাদেশী দৈনিক প্রথম আলোর জ্যেষ্ঠ প্রতিবেদক যিনি ২০২১ সালের ১৮ মে দুর্নীতির অনুসন্ধান করতে গিয়ে রাষ্ট্রীয় গোপন নথি সরানোর অভিযোগে গ্রেফতার হন। সংবাদ সংস্থা ও সংগঠনগুলোর দাবি অনুযায়ী, রোজিনা সংবাদ সংগ্রহে বাংলাদেশ সচিবালয়ের স্বাস্থ্য বিভাগে গেলে সরকারি কর্মকর্তারা তাকে ৫ ঘণ্টা আটক রাখে ও হেনস্থা করে। এইসবের ছবি ও ভিডিও সংবাদমাধ্যমে ব্যাপক আলোচিত হয়। রোজিনাকে হেনস্তা ও গ্রেফতারের ঘটনায় উদ্বেগ প্রকাশ করে জাতিসংঘ বিবৃতি দেয়। বাংলাদেশে বিভিন্ন সময়ে অনুন্ধানী সাংবাদিকতা ও দুর্নীতি বিষয়ক একাধিক আলোচিত প্রতিবেদনের জন্যে তিনি পরিচিতি পান।
          </p>
          <div class="text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Read More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<h1 style="text-align: center">Recent News</h1>
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
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/news/{{$n->id}}">Rozina Islam</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/news/{{$n->id}}"><time datetime="2020-01-01">{{$n->created_at->diffForHumans()}}</time></a></li>
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
                <li><a href="/news/category/{{$category->id}}">{{$category->name}} <span>({{$category->news->count()}})</span></a></li>
              @endforeach
             
            </ul>
          </div><!-- End sidebar categories-->

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">

            @foreach ($blogs as $blog )
              <div class="post-item clearfix">
                <img src="{{URL::asset('blogimg')}}/{{$blog->image}}" alt="">
                <h4><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h4>
                <time datetime="2020-01-01">{{$blog->created_at->diffForHumans()}}</time>
              </div>
            @endforeach
           

          </div><!-- End sidebar recent posts-->

        

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section>
<!-- End Blog Section -->




{{-- 



  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Tue, September 15</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Fri, August 28</span>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Mon, July 11</span>
            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section --> --}}

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->
@endsection