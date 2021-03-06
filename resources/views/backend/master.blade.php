<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Rozina Islam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('backend/main.css')}}" rel="stylesheet"></head>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.partials.topbar')   
            
        <div class="app-main">
            @include('backend.partials.sidebar')   
            <div class="app-main__outer">
                    <div class="app-main__inner">
                       @yield('content')
                    </div>
                    @include('backend.partials.footer')   
            </div>
               
        </div>
    </div>
    <script type="text/javascript" src="{{asset('backend/assets/scripts/main.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
        {!! Toastr::message() !!}
</body>
</html>
