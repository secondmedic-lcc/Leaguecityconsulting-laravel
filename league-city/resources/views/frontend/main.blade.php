@include('frontend.layouts.head')

@include('frontend.layouts.header')

@yield('content')
    
@include('frontend.pages.'.$page_name)

@if(@$current_page != 'saas-campaign')
@include('frontend.layouts.footer')
@endif
@include('frontend.layouts.js')