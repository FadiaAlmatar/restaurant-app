<x-layouts.app>
  <x-navbar/>
  <section class="hero is-large ">

      <div class="hero-body has-text-centered" >
        <p class="title">
          Sanabel Blog
        </p>

      <form class="d-flex" action="{{ route('restaurants.search') }}" method="GET">
        <input name="name" id="search"class="form-control me-2" type="search" placeholder="{{ __('validation.attributes.Enter name,city or address of Restaurant') }}" aria-label="Search" style="border-color:orange">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: orange">
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <input type="radio" name="search" value="name"> {{ __('validation.attributes.name') }}<br>
      <input type="radio" name="search" value="address"> {{ __('validation.attributes.address') }}<br>
      <input type="radio" name="search" value="city"> {{ __('validation.attributes.city') }}<br>
      </ul>
      </li>
      <button class="btn btn-success" type="submit">{{ __('validation.attributes.search') }}</button>
      </form>
      </div>

  </section>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        Our Top Restaurants
      </div>
      <div>

          @foreach ($restaurant as $item)
          <li><a href="{{ route('restaurants.show',$item) }}"itemprop="url"><img src="{{$item->image}}" itemprop="image"/></a></li>

          @endforeach


      </div>
    </div>
  </section>


</x-layouts.app>



