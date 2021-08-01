<x-layouts.app>
  <x-search--meal/>
  <x-slot name=styles>
    <link rel="stylesheet" href="css/pages/rate.css">
  </x-slot>
  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
          @foreach ($meals as $meal)
          <div class="column is-4">
            <a href="{{ route('meals.show', $meal) }}" style="text-decoration: none;">
              <div class="card " style="height: 100%;" id="postcard">
                <div class="card-image" id="postimage">
                  <figure class="image is-4by3" >
                    <img src="{{ $meal-> image }}" alt="Placeholder image" >
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                      <p class="title is-4">{{ $meal->name }}</p>

                    </div>
                  </div>
                  <div class="content">
                    <span  class="form">{{$meal->price}} SYP</span>
                    <br>
                    <span><time datetime="2016-1-1" class="form">{{ $meal->calory }} Calories</time></span><br>
                    <a href="{{ route('meals.show', $meal) }} " style="color: black;">show</a>
                    <div class="rate">
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" title="text">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4" title="text">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="text">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" title="text">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" title="text">1 star</label>
                  </div>
                    <a href="# " style="color: black;">Order</button></a>

                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          {{-- <div class="column is-12">{{ $restaurants->links() }}</div> --}}
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
