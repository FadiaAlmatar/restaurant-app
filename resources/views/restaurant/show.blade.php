<x-layouts.app>
    <section class="hero is-success is-small">
      <div class="hero-body" style="background-color: #eb640a;">
        <div class="container has-text-centered" >
          <p class="title">
            <h1 style="color:black;">{{$restaurant->name}} Restaurant</h1>
            {{-- <h3 style="color:black;">{{$post->category->name}}</h3> --}}
          </p>
        </div>
      </div>
      <div class="hero-foot" style="background-color:black;">
        <nav class="tabs is-boxed is-fullwidth">
          <div class="container">
            <ul>
              <li><a href="{{ route('restaurants.edit', $restaurant) }}"style="text-decoration:none; color:#eb640a;"><b>Edit</b></a></li>
              {{-- <li><a href="{{ route('restaurants.delete', $restaurant->id) }}" style="text-decoration:none; color:#eb640a;"><b>Delete</b></a></li> --}}
              <li><a href="{{ route('restaurants.create') }}"style="text-decoration:none; color:#eb640a;"><b>Create New Restaurant</b></a></li>
              {{-- <li><a href="{{ route('categories.show', $post->category) }}"style="text-decoration:none; color:#eb640a;"><b>Show related Posts</b></a></li> --}}
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div>
         <p> {{ $restaurant->city }}</p>
         <p> {{$restaurant->address}}</p>
           <div >
          {!! $restaurant->description !!}
        </div>
        </div>
        </div>
      </div>
    </section>

    </x-layouts>