<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/k806ph8mux7lcu04u4ie7nwl822p0page12obze5k1uab6oi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('title')</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="{{ url('/') }}">WORK</a>
            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
            <a class="nav-link" href="{{ url('/randomthings') }}">16 RANDOM THINGS!</a>
            <a class="nav-link" href="/blogs">AUTHOR</a>
            </div>
        </div>
    </div>
</nav> 
  @yield('container')