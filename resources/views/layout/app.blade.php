<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/custom.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
     
@include('layout.menu')

<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
            <div class="col-md-4 topDiv text-center">
            @yield('paralux_content_text')
                <!-- <h1 class="text-white">@yield('paralux_title')Software Engineer</h1>
                <h3 class="text-white">Mobile & Web</h3>
                <button class="btn btn-primary">Learn More</button> -->
            </div>
    </div>
</div>

@yield('content')

@include('layout.footer')

     <script src = "{{asset('js/bootstrap.min.js')}}"> </script>
     <script src = "{{asset('js/popper.min.js')}}"> </script>
     <script src = "{{asset('js/popper.min.js')}}"> </script>
     <script src = "{{asset('js/custom.js')}}"> </script>
</body>
</html>