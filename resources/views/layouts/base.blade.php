<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- normalization -->
  <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}" />

  <!-- my css -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/tablet.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/pc.css') }}" />

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.0.1/dist/css/yakuhanjp_s.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.0.1/dist/css/yakuhanmp_s.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bd44d20742.js" crossorigin="anonymous"></script>

  <title>@yield('title')</title>
</head>

<body>
  @section('modals')
  @show
  <main>
    <a href="#" id="top-button" class="top-button" ontouchstart=""></a>
    @section('mv')
    @show
    <header id="header">
      <ul id="nav">
        <li><a href="#profile" data-nav="profile">Profile</a></li>
        <li><a href="#skills" data-nav="skills">Skills</a></li>
        <li><a href="#works" data-nav="works">Works</a></li>
        <li><a href="#contact" data-nav="contact">Contact</a></li>
      </ul>
    </header>
    @section('main')
    @show
    <p class="copy">©Riyo Onishi</p>
  </main>

  <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
