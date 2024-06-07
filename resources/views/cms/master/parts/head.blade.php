{{-- Head --}}

{{-- Charset --}}
<meta charset="UTF-8">

{{-- Robots --}}
<meta name="robots" content="index, follow">

{{-- Viewport --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- Title --}}
<title>CMS</title>

{{-- Description --}}
<meta name="description" content="Description">

{{-- Author --}}
<meta name="author" content="Author">

{{-- CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Canonical --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Theme Color --}}
<meta name="theme-color" content="#ffffff">

{{-- Web App Manifest --}}
<link rel="manifest" href="/manifest.webmanifest">

{{-- Favicon --}}
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/16x16.png') }}">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="name">
<meta name="twitter:creator" content="author">
<meta name="twitter:title" content="title">
<meta name="twitter:description" content="description">
<meta name="twitter:image:src" content="{{ asset('images/') }}">
<meta name="twitter:image:alt" content="title">
<meta name="twitter:domain" content="{{ url()->current() }}">

{{-- Open Graph --}}
<meta property="og:title" content="title">
<meta property="og:description" content="description">
<meta property="og:image" content="{{ asset('images/') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="name">
<meta property="og:type" content="website">

{{-- App CSS --}}
@vite('resources/css/cms/app.css')

{{-- Preconnect --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

{{-- Font Popins --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

{{-- Font Great Vibes --}}
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

{{-- Font Playfair Display --}}
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

{{-- Google Fonts --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
