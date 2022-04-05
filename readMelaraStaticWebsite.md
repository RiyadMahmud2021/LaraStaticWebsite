# Links: https://laravel.rabbil.com/tutorials
# -------------------------------------------

# From Laravel Fundamental
# -------------------------------------------



# A Project: laraStaticWebsite
# -------------------------------------------

39. View: My First Laravel Website
     - Extra view file deleting (welcome)
     - resourse editing (css,js)
     - Needed layout folder and subview file creating 
     - Needed view file creating

40. View: My First Laravel Website
     - Creating a Controller Named SiteController
     - Creating a Routes name according to controllers

41. View:	My First Laravel Website 
     - resourse's all asset transfering to public folder (for using asset() in html)
     - app.blade.php html file creation with laravel 'Template Inheritance Master layout' rules
          - title adding with @yield()
          - css linking with asset()
          - js linking with asset()
          - @include('layouts.menu')
          - @include('layouts.footer')
          - @yield('content)

42. View:	My First Laravel Website 
     - @extend('layout.app') // for all page 
     - @section('','')    // for all page where what need
          - for title and content

43. View:	My First Laravel Website
     - menu.blade.php file setting
          - href="{{url('/')}}"
          - src="{{asset('images/logo.png')}}
          - href="{{url('/')}}"
          - href="{{url('/service')}}"
          - href="{{url('/portfolio')}}"
          - href="{{url('/about')}}"

44. View:	My First Laravel Website  
     - footer.blade.php file setting and sending footer to parent template

45. View:	My First Laravel Website  
     - about.blade.php @section('content') making and sending it to parent template 

46. View:	My First Laravel Website  
     - portfolio.blade.php @section('content') making and sending it to parent template
     - adding image source like src="{{asset('images/laravel.png')}}"

47. View:	My First Laravel Website 
     - service.blade.php @section('content') making and sending it to parent template
     - adding image source like src="{{asset('images/laravel.png')}}"