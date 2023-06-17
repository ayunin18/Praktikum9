<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="{{mix('css/app.css')}}" /> -->
    @vite('resources/sass/app.scss')
    @vite('resources/sass/_style.scss')

    <title>{{ $pageTitle}}</title>
  </head>
  <body>
    @php
        $currentRouteName = Route::currentRouteName();
    @endphp
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #67a8aa">
    <div class="container">
        <a class="navbar-brand" href="#">Data Master</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a>
            </li>

            <li class="nav-item">
            <a href="{{ route('listbarang.index')}}" class="nav-link @if($currentRouteName == 'listbarang.index') active @endif">List Barang</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- End Navbar-->

    @yield('content')

    <!-- Footer -->
    <footer style="background-color : #67a8aa" class="text-white text-center pt-3">
      <p>Created by Ais Ayuni. 2023 | Information System </p>
      <hr>
      <p>Contact Me by Social Media</p>
      <a class="icon" href="https://www.instagram.com/ais_ayuni/"><img src="{{asset('image/igg.png')}}" width="48"></a>
      <a class="icon" href="https://api.whatsapp.com/send/?phone=6285731531181"><img src="{{asset('image/wa.png')}}" width="46"></a>
      <a class="icon" href="mailto:aisayuni4@gmail.com"><img src="{{asset('image/gmail.png')}}" width="46"></a>
    </footer>
    <!--End Footer-->

    <!-- <script src="{{mix('js/app.js')}}" ></script> -->
    @vite('resources/js/app.js')
  </body>
</html>
