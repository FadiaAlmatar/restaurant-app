<x-layouts.app>
  <x-slot name='styles'>

  </x-slot>
  <x-search/>

  <section class="hero is-success is-small">
    <div class="hero-body" >
      <div class="container has-text-centered" >
        <p class="title">
          <h1 >{{$category->type}} </h1>
        </p>
      </div>
    </div>
    <div class="hero-foot" style="background-color:black;">
      <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
          <ul>
            <li><a href="{{ route('categories.edit', $category) }}"style="text-decoration:none; color:orange;"><b>Edit</b></a></li>
            {{-- <li><a href="{{ route('restaurants.delete', $restaurant->id) }}" style="text-decoration:none; color:orange;"><b>Delete</b></a></li> --}}
            <li><a href="{{ route('categories.create') }}"style="text-decoration:none; color:orange;"><b>Create New Category</b></a></li>
            {{-- <li><a href="{{ route('categories.show', $post->category) }}"style="text-decoration:none; color:orange;"><b>Show related Posts</b></a></li> --}}
            <li><a href="{{ route('meals.create' )}}"style="text-decoration:none; color:orange;">
              <b>Add Meal</b></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <h3>Meals</h3>
      <div class="columns is-multiline">
          @foreach ($category->meals as $meal)
          <div class="column is-4">
              <a href="{{route('meals.show',$meal)}}" style="text-decoration:none; color:black">
              <div class="card" style="height: 100%;" id="postcard">
                <div class="card-image">
                  <figure class="image is-4by3" >
                    <img src="{{ $meal-> image }}" alt="Placeholder image" >
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                      <span class="title is-4 form">{{ $meal->name }}</span><br>
                      <span class="title is-6 form">{{ $meal->price }} SYP</span>


                    </div>
                  </div>
                  </a>

                    <div class="flexbox">

                      <div class="fav-btn">
                        <span href="" class="favme dashicons dashicons-heart">Like</span>
                      </div>

                    </div>
                  </div>


              </div>
            </div>

              <footer class="card-footer">
                <a href="#" class="card-footer-item">{{-- <button  href=""class="tw-transition-all tw-border tw-border-solid tw-border-black-transparent-3 hover:tw-border-black-transparent-10 tw-bg-black-transparent-2 hover:tw-bg-black-transparent-3 tw-font-semibold tw-inline-flex tw-items-center tw-px-3 md:tw-text-xs mobile:tw-text-sm mobile:tw-p-2 mobile:tw-flex mobile:tw-items-center reply-likes mobile:tw-text-sm has-none tw-border-black-transparent-3 tw-bg-black-transparent-1 tw-mr-2" data-js="reply-like-button" style="border-radius: 12px;"><svg width="17" height="16" viewBox="0 0 14 13" class="tw-fill-current tw-cursor-pointer tw-text-grey"><path fill-rule="nonzero" d="M13.59 1.778c-.453-.864-3.295-3.755-6.59.431C3.54-1.977.862.914.41 1.778c-.825 1.596-.33 4.014.823 5.18L7.001 13l5.767-6.043c1.152-1.165 1.647-3.582.823-5.18z"><title textContent="Like this reply."></title></path></svg>add to favorite</button> --}}</a>
                <a href="#" class="card-footer-item">Delete</a>
              </footer>

          </div>
          @endforeach

        </div>
      </div>

    </div>
  </section>
<x-slot name='scripts'>

</x-slot>
</x-layouts.app>
