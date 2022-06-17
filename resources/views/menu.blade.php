<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Cafe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
  <nav class="navbar has-shadow is-primary" role="navigation" aria-label="main navigation">

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="create">
        Tambah Data
      </a>
  </div>
</nav>
<div class="container">
  <div class="columns">
    <div class="column is-half is-offset-one-quarter">
    <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Menu Cafe
    </p>
    <button class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </header>
  <tbody>
    @foreach ($menu as $harga)
  <div class="card-content">
    <div class="content">
   {{$harga->menu}}
      <br>
      <p>{{$harga->price}}
    </div>
  </div>
  <footer class="card-footer">
    <a href="/update/{{ $harga->id}}" class="card-footer-item">Edit</a>
    <a href="/delete/{{ $harga->id }}" class="card-footer-item">Delete</a>
  </footer>
  @endforeach
</tbody>
</div>
</div>
</div>
</div>
  </body>
</html>