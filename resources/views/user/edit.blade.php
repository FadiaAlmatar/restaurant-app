<x-layouts.app>
  <section class="hero is-large is-primary">
    <div class="container">
      <div class="hero-body has-text-centered" style="height: 50%;">
        <p class="title">
          Foody
        </p>
        <p class="subtitle">
          Welcome to our Meals , here you will eat  the food
        </p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        Our Latest Posts
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($meals as $meal)
        <div class="column is-4">
            <div class="card" style="height: 100%;">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src= {{ $meal->image }} alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">{{ $meal->name }}</p>
                    <p class="subtitle is-6">@johnsmith</p>
                  </div>
                </div>
                <div class="content">
                  {{-- {{ $post->content }} --}}
                  {{ Str::limit(strip_tags($meal->price), 80) }} ...
                  <br>
                  <a href="">
                    read more
                  </a>
                  <br>
                  <time datetime="2016-1-1"></time>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
        <div class="column is-12">
          <div class="buttons is-centered">
            <a href="" class="button is-primary">See all posts</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
