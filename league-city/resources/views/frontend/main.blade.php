@include('frontend.layouts.head')

@include('frontend.layouts.header')

@yield('content')
    
@include('frontend.pages.'.$page_name)

@include('frontend.layouts.footer')
@include('frontend.layouts.js')