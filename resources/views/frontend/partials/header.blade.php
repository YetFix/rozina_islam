<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset('frontend/assets/img/logo.png')}}" alt="">
        <span>Rozina Islam</span>
     
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li class="dropdown"><a href="#"><span>News</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              @foreach($categories as $category)
                  @if($category->type=='English')
                    <li><a href="{{route('newsByCat',$category->id)}}">{{$category->name}}</a></li>
                  @endif
              @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>বাংলা</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($categories as $category)
                  @if($category->type=='Bengali')
                    <li><a href="/news/category/{{$category->id}}">{{$category->name}}</a></li>
                  @endif
              @endforeach
            </ul>
          </li>
          <li><a href="/f/awards">Awards</a></li>
          <li><a href="/f/certificates">Certificates</a></li>
          <li><a href="/f/blogs">Blog</a></li>
          <li><a class="nav-link scrollto" href="/f/contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/f/contact">Get In Touch</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
   
  </header>