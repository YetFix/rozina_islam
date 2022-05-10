<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.styles')

<body>

  <!-- ======= Header ======= -->

  @include('frontend.partials.header')
  
  <!-- End Header -->



  <main id="main">
    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

    @include('frontend.partials.footer')
 
  <!-- End Footer -->


  @include('frontend.partials.scripts')


</body>

</html>