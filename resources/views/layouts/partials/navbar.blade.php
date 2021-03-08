{{-- Superior part of navbar --}}
  <div class="navbar_superior">

  </div>

{{-- Inferior part of navbar --}}
<nav class="position-relative navbar_inferior">
  <div class="row h-100 w-100">

    <div class="col-lg-2 d-flex align-items-center h-100">
      <a href="{{route('homepage')}}" class="ml-5">
        <img src="{{asset('img/logo.png')}}" alt="" id="logo">
      </a>
    </div>

    <div class="col-lg-8">
      <div class="link_container d-flex justify-content-around h-100">

        <div class="h-100 link position-relative">
          <a href="{{route('characters')}}">characters</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('comics-home')}}">comics</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('movies')}}"> movies</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('tv')}}"> tv</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('games')}}"> games</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('videos')}}">videos</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('news')}}">news</a>
          <hr>
        </div>

        <div class="h-100 link position-relative">
          <a href="{{route('shop')}}">shop <i class="fas fa-caret-down blue_principal ml-1"></i></a>
          <hr>
        </div>

      </div>
    </div>


    <div class="w-100 col-lg-2 search_navbar position-relative">
      <input type="search" name="" value="" placeholder="Search" class="text-right position-absolute">
    </div>

  </div>

</nav>
