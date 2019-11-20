<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="">PHP MVC</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('gejala')}}">Gejala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('rule')}}">Rule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('penyakit')}}">Penyakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('dokter')}}">Dokter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('jadwal')}}">Jadwal</a>
        </li>
      </ul>
    </div>
  </div>
</nav>