@include('frontend.layouts.head')

@yield('content')
    
@include('frontend.pages.'.$page_name)

@include('frontend.layouts.js')