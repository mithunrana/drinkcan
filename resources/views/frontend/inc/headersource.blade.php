<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO RELATED DATA START-->
    <title> @isset($title) {{$title}} @endisset</title>
    <meta name="author" content="Mithun Rana">
    <meta name="description" content="@isset($description){{$description}}@endisset">
    <meta name="keywords" content="@isset($keywords){{$keywords}}@endisset">
    <link rel="shortcut icon" href="{{asset('')}}frontend/images/drink-can.png" sizes="32x32" />
    <link rel="icon" type="image/ico" href="{{asset('')}}frontend/images/drink-can.png" sizes="192x1922" />


    <meta name="fb:app_id" property="fb:app_id" content="308590786521219" />
    <meta property="og:url" content="@php echo url()->current(); @endphp" />
    <meta property="og:title" content="@isset($title){{$title}}@endisset" />
    <meta property="og:description" content="@isset($description){{$description}}@endisset" />
    <meta property="og:image" content="@isset($image){{asset('')}}{{$image}}@endisset" />

    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <!-- SEO RELATED DATA END-->




    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!--font-awesome-->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{{asset('')}}frontend/font-awesome-4.7.0/css/font-awesome.css">
    <!--slick.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
    <!--slick.theme.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick-theme.css">
    <!--uikit.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/uikit.min.css">
    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.css">
    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!--style.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">


    <style>
        /*side bag*/
        .side-bag {
            height: auto;
            width: 70px;
            background: #FFF200;
            font-weight: 600;
            position: fixed;
            right: 0;
            border-radius: 20px 0px 0px 0px;
            top: 55%;
            text-align: center;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 999;
        }

        .side-bag img {
            width: 35px;
            margin-top: 4px;
        }

        .side-bag .it-price {
            color: #fff;
            font-size: 14px;
            padding: 1px 3px;
            display: block;
            background: #333;
            margin: 0;
            font-weight: 600;

        }

        .side-bag .it-qty {
            text-transform: uppercase;
            color: #000;
            font-size: 13px;
            padding: 0 3px;
            margin-bottom: 0px;
            font-weight: 600;
            display: block;
            margin-top: 2px;
        }

    </style>

</head>

<body>
