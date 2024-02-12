@php
    use App\Models\SeoData;

    $link = str_replace(url('').'/','',request()->url());

    if($link != "" && $link != null && $link != url('')){
        $page_link = $link;
    }else{
        $page_link =  "home";
    }

    $seo_data = SeoData::where(array('page_link'=>$page_link))->get()->first();
 
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('includes-frontend'); }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('includes-frontend'); }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('includes-frontend'); }}/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('includes-frontend'); }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('includes-frontend'); }}/css/style.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('includes-frontend'); }}/images/favicon.png">

    
    @if(!empty($seo_data))

        <link rel="canonical" href="{{ (@$seo_data->canonical != null && @$seo_data->canonical != "") ? url('').'/'.$seo_data->canonical : url()->current(); }}" />

        <title>{{ ($seo_data->meta_title != "" && $seo_data->meta_title != null) ? $seo_data->meta_title : "League City Consulting"; }}</title>
        
        <meta name="keywords" content="{{ $seo_data->meta_key; }}" /> 
        
        <meta name="description" content="{{ $seo_data->meta_description; }}" />
        
        <meta property="og:url" content="{{ url()->current(); }}">
        
        <meta property="og:description" content="{{ $seo_data->meta_description; }}">
        
        <meta property="og:image" property="og:image" content="{{ ($seo_data->meta_image != null && $seo_data->meta_image != '') ? asset($seo_data->meta_image) : asset('includes-frontend/img/favicon.png') }}">
        
        <meta property="og:title" content="{{ $seo_data->meta_title; }}">
        
        <meta content="secondMedic-careNetwork:photo" property="og:type">
        
        <meta name="twitter:title" content="{{ $seo_data->meta_title; }}">
        
        <meta name="twitter:description" content="{{ $seo_data->meta_description; }}">
        
        <meta name="twitter:image0" content="{{ ($seo_data->meta_image != null && $seo_data->meta_image != '') ? asset($seo_data->meta_image) : asset('includes-frontend/img/favicon.png') }}">

        


    @else
        <title>League City Consulting</title>
    @endif

    @if(!empty($seo_data))
        <?= $seo_data->meta_schema; ?>
    @endif

</head>

<body class="web-overflow">