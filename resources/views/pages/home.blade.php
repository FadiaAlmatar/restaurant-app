

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">




    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        <header class="stick">
            <div class="topbar">
                <div class="container">

                    <div class="topbar-register">
                        <a  href="{{ route('login') }}"title="Login" >{{ __('validation.attributes.Login') }}</a> / <a href="{{ asset('register') }}" title="Register" itemprop="url">{{ __('validation.attributes.register') }}</a>
                    </div>
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><a href="/" title="Home" itemprop="url" style="color: orange"><i class="fas fa-utensils ">FOODY</i></a></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="{{ route('restaurants.index') }}" title="RESTAURANTS" itemprop="url"><span class="red-clr">Reservation</span>RESTAURANTS</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#block less-spacing gray-bg top-padd30" title="RESTAURANTS" itemprop="url"><span class="red-clr">REAL FOOD</span>GALLERY</a>

                                </li>
                                <li><a href="{{ route('contact') }}" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>

                                <li class="menu-item-has-children"><a href="#gg" title="RESTAURANTS" itemprop="url"><span class="red-clr">REAL FOOD</span>GALLERY</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#tt" title="Team" itemprop="url"><span class="red-clr">REAL FOOD</span>Team</a>
                                    <ul class="sub-dropdown">
                                        <li class="menu-item-has-children"><a href="#" title="Boushra" itemprop="url">Boushra Almouhamad</a>
                                            <ul class="sub-dropdown">
                                                <li class="menu-item-has-children"><a href="https://www.facebook.com/boushra.almouhamad.9" title="Boushra" itemprop="url">Designer</a>

                                                </li>

                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="Team" itemprop="url">Alia Swar</a>
                                            <ul class="sub-dropdown">
                                                 <li class="menu-item-has-children"><a href="https://www.facebook.com/alia.sy.58118" title="Alia" itemprop="url">Developer</a>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="Team" itemprop="url">Maha AL ahmed</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="https://www.facebook.com/maha.alahmed.756" title="Maha" itemprop="url">Developer</a></li>

                                            </ul>
                                        </li>
                                           <li class="menu-item-has-children"><a href="#" title="Team" itemprop="url">Fatima Albittar</a>
                                              <ul class="sub-dropdown">
                                                <li><a href="gallery.html" title="Fatima" itemprop="url">Designer</a></li>

                                               </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="Team" itemprop="url">Samar Aldayat</a>
                                              <ul class="sub-dropdown">
                                                <li><a href="gallery.html" title="samar" itemprop="url">Developer</a></li>

                                               </ul>
                                            </li></ul>
                                <li><a href="{{ route('posts.index') }}" title="PLOG" itemprop="url"><span class="red-clr">news</span>BLOGS</a></li>


                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->


  <!-- Responsive Header -->

        <section>
            <div class="block">
                <div style="background-image: url(assets/images/topbg.jpg);" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <div class="restaurant-searching-inner">
                        <h2 itemprop="headline"><span>create the happiens is our machine</span> </h2>

                        <form class="restaurant-search-form brd-rd2"action="{{ route('restaurants.search') }}" method="GET">
                            <div class="row mrg10">
                                <div class="col-md-6 col-sm-5 col-lg-5 col-xs-12">
                                    <div class="input-field brd-rd2"><input class="brd-rd2" type="text"name='name'id="search" placeholder="{{ __('validation.attributes.name') }}"></div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                    <div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input class="brd-rd2" type="text" placeholder="Search Location"><i class="fa fa-location-arrow"></i></div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
                                    <button type="submit"  style="color: black">SEARCH</button>
                                </div>
                            </div>
                        </form>

            </div>
        </section>

        <section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant Reservation</span>
                                    <h2 itemprop="headline">Top Restaurants</h2>

                                </div>
                            </div>
                            <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">
                                  @foreach ($restaurants as $restaurant)
                                  <li class="wow bounceIn" data-wow-delay="0.2s"><div class="top-restaurant"><a class="brd-rd50" href="{{ route('restaurants.show', $restaurant) }}" title="Restaurant 1" itemprop="url"><img src="{{$restaurant->image}}" alt="top-restaurant1.png" itemprop="image"></a></div></li>
                                  @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
        </section>
        <!-- top resturents -->




        <section>
            <div class="block blackish low-opacity">
                <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant Reservation</span>
                                    <h2 class="text-white" itemprop="headline">easy order in 3 steps</h2>
                                </div>
                            </div>
                            <div class="remove-ext text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                            <i><img src="assets/images/resource/setp-img1.png" alt="setp-img1.png" itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Explore Restaurants</h4>

                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                            <i><img src="assets/images/resource/setp-img2.png" alt="setp-img2.png" itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Choose a Tasty Dish</h4>

                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                            <i><img src="assets/images/resource/setp-img3.png" alt="setp-img3.png" itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline" >Follow The Status</h4>

                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
          <div class="block less-spacing gray-bg top-padd30">
            <div class="col-md-12">
              <div class="title1-wrapper text-center">
                  <div class="title1-inner">
                      <span>the best food</span>
                      <h2 itemprop="headline">Our Gallery</h2>
                  </div>
              </div>
         </div>
              <div class="container">
                  <div class="row mrg15">
                      <div class="col-md-12">
                          <div class="sec-box">
                          <div class="masonry">
                            @foreach ($meals as $meal)
                            <div class="col-md-4 col-sm-6 col-lg-4 filter-item">
                              <div class="gallery-bx sudo-bg-red wow zoomIn" data-wow-delay="0.2s">
                                  <img src="assets/images/resource/gallery1-1.jpg" alt="gallery1-1.jpg" itemprop="image">
                                  <div class="gallery-info-btns">
                                      <a class="yellow-bg brd-rd50" href="{{$meal->image}}" data-fancybox="gallery" title="Click to See Image" itemprop="url"><i class="fa fa-search"></i></a>
                                      <a class="yellow-bg brd-rd50" href="{{ route('meals.show', $meal) }}" title="Gallery Detail" itemprop="url"><i class="fa fa-chain"></i></a>
                                  </div>
                                  <h3 itemprop="headline"><a href="" title="Gallery Detail" itemprop="url">Tried Their Amazing Grilled Ham</a></h3>
                              </div>
                          </div>
                            @endforeach


      </section>
      <section>


        <div class="container">
        <div class="columns is-multiline">
  @foreach ($posts as $post)
  <div class="column is-4">
    <a href="{{ route('posts.show', $post) }}">
      <div class="card" style="height: 100%;">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="{{ $post->featured_image }}" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUVExcVFRUXGBcZGRwaGhoaGhoZIRwcIRoaHR0cIBwfIysjGhwoHxsbJDUkKCwuMjIyHyE3PDcxOysxMi4BCwsLDw4PHRERHTEoIykxMTM5OTkxMTkxMTMzMTExMTEzMzExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQMGAAECB//EAEIQAAEDAgQCCAQDBQgCAgMAAAECAxEAIQQSMUEFUQYTImFxgZGhMrHR8ELB4SNSYnLxBxQzQ4KSorIVwpPSY3Pi/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDAAQF/8QAKxEAAgIBBAIBBAEEAwAAAAAAAAECEQMSITFBBFETImFxkaEFI9HwMrHB/9oADAMBAAIRAxEAPwB8VXFQqVf7++VEFWn3v+lDq3pBzW58Pe/1odaxmv30TlFRFI1i8fQ/nWMQqWZNrD51y8SSIGnvapsnzrbSIIt9zWsxElJMAiNjrXDqz1lpICfnR6RvGp+YrnCtjNJ7va8+9YxCRM23+h+ldqX2IVoSZJ5Gfau22zv98/mKEUufbyNlE9/6VjG8O0lI7AAmSfJIg1pwAJdX4x4RH511gkGEzyi/eqZ9KJxSNRsbR4lNEwq4Y6lKFhRypzjXvSJ9x70COINrfWESYHbMwmwiwnLMxJo5WHSUrEzJFvUflSxPCkpBAAmQryMD5ge9cvkYXN3e1AcdSqw91fWJSEzE5rEp0jvvpvQyMSlHYDd9lAgDexGvkKmcPVphMCwHKb799L1t5tJUpSucfiNQjhyOTa2S4Jyg3NtBC8QlS0qWlQI/dKrWBBkaWItTfB8SbMTnA/eynKfEgDKe+I8KV4ZCk/ESb2JMzaCPa1O8I2AByvPreuqGLTve4VGtyfIk5DNjoRcEwTroagCAUEJBjcnuF/KolYdWaWzkGptIkk6g2864YxRCT1jZgggqQSYkD8JvpyPlT6muUPYalYMTBk/UR411A8dAPQE+xNAMiRmTCgFBRKTpoIIN0mw1Ao9xQ7RHO3v8qZNPgN2Rpb0trYx5mu8T8B7hfa0fpWYFZUkHeVT6H01FbxDcoUO7/wC1MYkGGkIXFpN/UH7765wiUgkm/wCkH6UvwnHOoJbfSrq5ORYBVlnUKAuRr4VzhePhZLbKLKPaWUq0m+vyqHySUnFx/BbRFxtMd4ZZlUm2v/FP5zQeGUOtWeUHzJ+k0UlEJJ7ifKB//VRYNI7RjdUnuEj3q5EkcX6kfmR+YqBKoQJH2ApVEYgAkCbWmN+2f0rQSOrPOfkL/nRMcLnMq/h/tIrWGOviZnuJrbaIFtoPplrTCRJHlWMdhMKjuitPJsfOK7N/l7VvQ+o+VYwGqOXsKyu3ECT9K3WMRvYpCJKlpSLXUQPnSZ3pJh0z+1Cv5QVVRf8Axzrqsy1KUTuST7qk0Y10bi5v43qbnFBSbLOOleG/eX/sNGYbj2HVYOpB2CrfegqqJ6PoI0HpQ73R/wDdgeEih8kQ6GeisrSoWIIPIzXTZHtI9TXlyGcQwZbWoe4+/KnvCOmMKCMQnLtnGnny8fGTTJp8ALu4sAeGvy+R9q0ABfmb/KhmXkrTmSoEagg+dTFMC/OY9axjttdvAxbmIreUbcpPpc+/tW4E6fczNdHQzv8AIgfSsYhcWRltpI9Jj2rnEPfEo3gC3iRWnVyCYsAI77/rUb6YSoDSP1FEAvcJICv4JEXvJvattIVqpBSSIAI11vflrWPYxDROcEEdk6xE28NdTyrrhfSdJOR2bzDn4Y2Bge964J+VPW4qOy/kjLJTJ8S2lQgwSLqJMJHaN+e/rzpc5i0gHq2gopntKKgDfZMzF9z5UZh2wskC6ArMDurcHxGgG3nXbmESQYmCFEexroxxc1qbHSb3YMt1/KSHAgBJJKEJGWZjaeW9cIxTitXnvJxQ8tY9K3jG3UylKoChlJtAExJB01tG9YyyoABIJExmWN73gR4donwqaVzuSqv5+4q53Qqb6ROBSkLU4L2KXFgwLC8308ab8Pxrq0ynEnlCwlV+UEEnymluM4OHE5lG+aAR2dzsIG0UAhLmFVKhKCYCt+6eVF49O/R72OeDzILHNKM+n0/syzKxLjas/VtLI3DamjHIkKTI7spFYOJiIXh1o/kWCBvooaXO9dJ4q2psOKMWgi06k27rAzteaSpZcxi5IIaBkfxwLeKbXO+1rl1jjzFv9nkZsUsU3CSpodcN6Q4ZZUlLhTc/EhQGqZ7QzA+PfTlhxLiTkUhc/uqBnfTUV57whKm3UBdsrq0ZVbpWbEeceXhVxd4M2rKcsRumx9RTJT6f7IxbYTi8KkkFQ0VJt3KP5V1hMChBAFj9bH8hQZwryCA2+SP3XQHEx53076kwjzinIcQhJE9pClCT/KfWx5U8ZSumhrY5sqeQt7j6mhm1hMX1n/r9ZobG45DKFKWsJTE+UfX5iqJxjpC7iLNktM7KiVrH8A2H8RjyNqcJauMdJMOxBW4CqE9kXO3neDekb/TDEL/wcOUpP4nClv8A7WUKTYLh8GUJyk3K1dpZPPMdD4RTFPDQRKrmbkmlc/QdJy5xjGnV/DonbMR7DNNcjiWMGmIYUe9Z/NNEIwKIsBWlYBPKhrZtKOm+kONbgraS4kbpgj/iVK9qZcO6aNLOVwKbNpm4HjukeNKP7hF0yO8GPlXOJw5UP2iQ4BpNlDwWLitr9m0l7YxyFJBDiIIt2h9ayvM//EN7POJHIoCo896ym1I1MtQbA2qF7FAWqfFOAb054N0ZWB1rkSoCEEhMaxE733iuSUtK4s6Er5dFY/vN9x412HqsXGuEBdsuUiYItHdFVlOAczBCgEknKJNp+lLDLGXOzHnjceN0bKgdaWcT4Mhy+h5imuIwLjdyLX+EhQt4VCFmqxknumRkvZXeG453BOBK5U0T4jXUcjzHjXouBxaXkhaDIKZEXv8AZqt4jCocTlUJB9RyPcaU9HMavBYjqlmW1Hsna+h858jyBM2jK9mI40emp7RG0/KfpFdo1E95+Yj1PtUGGcEhQMpIkeBvPyqUkkwPu9MKaUg3Ebj0yppavMc0i23fA5elNWT3zp9PlUD7cASkgEa+n5A0G0uQle4xmUtSQEQfiUQSRFoA0219qVYZszJTA5Wv31ZMfw5xZU42kHNEAkp89DtSDD4tLaVIVCnMxk7T2iQO4Kt4V5Llqm5bVf7RyTVytj/hq0jLmISDuZ5pinD+DSGpCwTtexJ2H5VW+jjiXFoQ4mYPw7aCJnaRtPvVpxiGksrQkJT2FQAIglKtKvLLVaHSKa1S0iDFtOKSVpBOUpUkpEjmVXHaA+9a7wnFWltKbdccS4dVgHWbZQgCAIEi2p1qHBcchsNOoIT1YSlSQbkBUDs3EgAeM86l4Hii8kpXh2wlJCSuAD4yBJNGbbX1Kq7L48et0dcO4jh0pCX0OqWk6hKl5xNjb4dQINS8ScTiSr9lkaAgAgSq+pjTSwneokoTlJAukkaawNfCjDGXw1+X0rqjCK3H1Pgq2B4elL4acSFIBJTPIx6iQB51ZcYtDaMyiAEwT4aj1tU7/AFL6twOJDiDIBuPCfvag+L8OQ5IcbBIgXAtAI1/1D1oY5RdqLOjy5vIoyfNU/vXDFrfGm3PwBQB+GQVAbEDQ+A5VYGMSlYlKgRA8vp51UneibJuAUmJso8h5VJh+APNnM2+sW0VCwdOd4vzqkdS53OFai0oEqEfxfIio+K4pDSVOLMAc7aCD7UNw9t1P+K6lViRCcv7v/2qpdJcYrFP9Wm7aCCofvqN0o8LZj4AWIpk9rYQHF4hzGOBbk9XMtNnQi8OLHLkn6kqY4TAQcyrk7n7tR2BwITc3J1P3pR7eFGUrUqEiYAjMsj8KZ9J/OlbvcaMekBss3gCTyAn23rviOAxGVORpRClQT2ZSCD2spIJvFqh41xdTaClpWgghqwKt+18RI07zttVeaxDi05kKWEiVIQtZVqQAc3imTaL2qakpWkGK1Nr0EJxK2VLQptYyKi4y9nRPxR62FxRnCuIhwHY8rm3eYgHu8Kl4cw482W3FnqkIK1uGAEA/hClDMq4O8QCSLAEXC8QS2pX92wRUFkCVrWsqRrmLaSMgsI/KmcUo+jSioobovXTjdrCTRGEW26lKXGxhnl/AnOSlVzZQPabzAGCO/WKFweKKnFIWkNkKKSCT2VDVJtyi4kX1uKGpNWuDRVq0a/utZTJTRG351lHYIexw5tnItd1G5mbDWIHhPtVubcSsbHQ/Q1Sn8X1gBI+MRtfuvpyojC5mx2lqUj8KTHZjbmdrd1q8aXl/Em3u317OvyIxUUNeOuo60Cb5ZmQBYkX9TSziiBGZKhABOmkDWdqGYwZUpS1z8R/EcyRtzAGWNKC4ziyh4NLBLahCCQbqi6JNiYB9YqPzrJNtc8hWeEYabukSMYpSyELHauQZMwbEmdRrbxrnjWAQkAiAom0Xz2uAAIkeVpoVeIQFZQC4lSykkWJWPw9/Ly3maal05ShJzKIISTJKRyUJuoZpi3KrwlKFSVjxipwEDaYIoDpRw4ONEgdpN0/mPA00fw+QJOxk/CU8ud9zyjTapGhmBFejCepKRyyi1swXoJxPrGsij2kzc76T80nxURtVtw6xI5wJ+ZrzLhyuoxq0aJWbDx/IArPkKvjTkKEGeySfAAEes11J2rOcK4hiMqSoC5E+x/SoX3F4pLbjawEpSRlJMXFzI3HKuFLCgAbgpJ9xApG/wAIAc7JWkKv2VETf7vUs2J5OHTKQmopxa2ZLxDjDyVBAU2otriL9qANbi3Lv8KVs4ValnPCCorUI3VmmBysDAmmjmESlJTlkRoZvrJnznnSLDY4/wB6Qha1NtoUSFFKhMDSSJibCfe1cXxxjqhF20v0ceTSm0hlgcQ42vMAgqExY8o0kf1NStPOu5VrUYlIIiB2SI+ajTnEHDh4trUmU5VyogDKZMa3sPO3OhEpR16UtkKazzInkLd4EkU3iw3etGxRrk7dhKJi4kR4Ae16010lBR1LLK24B7RjKmNTP4jyqdagSBH4p2NimT6mRXDDSQUiBuB3kCxP03tXdLHGdWdUZuPBJgEwkbyD66nz1o3CNB1TiJjs27zaPGCKGaRKpPO8bdpP5UtxOLcZV1iASBZQHeSZHgaGVPQ9PIcbSktQqdw2IC8/WLVkUU5JKbDWBOu4Bq2YTFdYnMUkCBlCtdBc63sfQUGjpghxJQE5lmxGU+50HtR6B2QqIESfT6EVLEr3qmiuR9XdkbKbd9/KUmpUrsny+/ah2EkakkxfxvPzqVtuIHcPzj510ogxd0q4kGmFrMSBA8LW8zCfOq70ewRA7V1SSo81qus+sD/SKk6XulTrTUyMxWfBGZZB7j+zp9wjDBLY9aE30BHWHQC4lB0gqV4AaeZgedFP8OStPWKb7SExaJRdUHLpF5E7nuup6xxGIzZghJBzEpzSmRb1Gv2SlurzS2oyT8YMEmYudjudr14/kZ2stXtXXTJTdPkS4rAhlDjwXmbShwZikJzLyqCQFAAKJJ1jkL1DwbGt3QhoqdAAIOUggDNpbKoGQADEgd9SYxSjikKfcU91asoAJWAvScqiE2BsRvFTdHF4drrFLTmXBKwrIQoJzr/ZnULICTAMmDpArtjShat9nXgjpV+yyMLbWy4yyGw9+zW4jrAqCYK4UnNMTGUbQLSDVU4O0htxxSc6c70FOQJyk/DIkEIMyDoLg3o3jfD2g004hbkqUVdaBlcQ1chDYSEyRm1VE38KNTx9WVWRxx0qjKFNoARpYpSFG5mxnx2qjSlGnY08evZiPHYNx1S3UjtaSFXt8JSkTEBQka9ka0T0kdbTxE5rKU03nUAFEuZQBFuydL0a10ndQFK6puUlJVCUoUjObAiMxUAJMDTwml/BsCrGYhTgmEBKlFRCpzE9oCAJ+OBNwI2p4r6aXAGlHhcFhbcsNayhsw2Pr+lZUvmX3/TJizg7h7bah2W+1JGwEmD3T7irGh5WRC0KzZgFJ0iTFvDW2tALwRIShJyrUUyQdQTO2ojY867WP7kkBcKbmwBypSZAsIOWZNhXjebFSnS/5dL37GyKUopJizij+L69JW4hpuQVFKzE7IG5KrDQineL4ap5ptTy0pcQrrE9kgBQmOwlVzB0zeW1QFnMouEiVAEEQe8X3idaiV0nX1wbDYGVMOBRMTbKUqA3HMb91KnKUUsaVx9bCyxOUlpr/DDOB8NU4oQkJj96bWgmPCBTLivAglJUshYGUC0aGZsdZA7j3aALhvHkoczuEJQoQVAQlJmxPibeY2qwOcRYSzIUhwAEpSCFSYOl+/XvrrxRSx77P88HQ1kglGP+SuoSnIpSu0DrM31vHnSfArOZQiIV7G484NMeJ4gNt3JISmYgX5Axp43pVwIqUM6tVGTv4Cd4Aro8a22+i3kNUl2IOlzeTEtK/eOXyJg+xNXDhrhOU7KIJ0skISfvxqqf2gKhbR5Gfv0qxcJXDTRj/KSPM5PyEV6MODz5cjfCs9ocgPz/AErnEpBcEDRKv+wgVMDHvpv9/WhCqSvYxA9Ar9aIABawkqKgozbsjNoAJigXsKhXbIypkAE63Ikxtadp+VTcd4k222cyrmIA3sCT3C9VjM9ijaUN7Aakd3Id59q4p+JeTWnV8kpQuQU5xNtokWcUfhgX9tjzqBriOIIhtGQSSMyrgkzaNuQ2pzwro8hG3j+p1JpsMKhA0ArpjUVS3/JSMKKkG8Yq5c9EfnIqHErxbV+s05p/U1acbjUoHZSVHWwn5bUtVxdVxlU3Oi0hKyPO8DvpJ5pRWws2ooB4RxTiCvhbzpJjNGVO410MX0mKuHCcOqFF5aU5lTAOcJURPZJCT2tYjWb3qPhnGQhMPo6wCf2oAJCT++nUgTtJjbcsUFhwiHWSTsF5VEbDLO3h5VzvyZy4oh8knwYjhzaAVJ7W8pBIiROgN5B10NGpSC2DqlStrRYCI2vXLKHG7hQQgDQkBIEXF/AXoPF8bF22gHFqvmACUp5qCjrH570q8lxdsMc0k9yRxswSBMZtPH9RS/8AvqpgiR7/AKUxw2KAgLIzfiCZPoTGbnpWsViGpMJBVPa0mb7xc/WuTyPK+SacW0lwLPJqf0souNOfiKk3hKAfVTY/6j3q7sohHl+VVDFFJ4j2RALCZ7v2oHyirwhJyeVepCTlBN9pHVjdxsqXFAF2K8mXUwVHLA0AiTvrShDTgzhIcVJGRWZUGAVKASbqBTcbiab4thK3UJVIIKWzAkgSE5gP5YOh3tXGO4My2422444ELCm0m+aQswBBAIKSkQZk2gSK4sKSel82LhSv6vZ10e4c51rDyAElyQ31qgZhJzKSmf8ADIVNxqE33o7HcSDb3VtKCBfM4ACvaFkhPwEEkBMCARrIrlpCnHVhhJShrD9U0orkZlFCQq90WWZTI000NVJL+XEdck5gFkrC8pTlJgpBKv2gBkdkEARPKu2Nvc7m62LkOMYhYRlcskwpUE9YkwQqFDsmNjN5FNcJgkBtL2IQgZspbS2C2VygElYTFxJFo05VUnXkrUA2oLddsgFYm/w9ogBFvG8cjNm46pfUYVLRgFlITCoNk3E2kRrcedG3GLYW7aSCnUYPFjItBQZMSCkyN7m/w76xSoNDCsdXmSl11+TACAvIOwmbBMrKV8jJG5pbxV7ICsL7SVJWe2kT2RmzRr2RmsDMW7puOvNLGHS6l/8AwsyuqAcywfxAydAb7CdK0ZtrdAlFLZDXC4tlxIW8htLp+MdYPiFidd4nz1OtZVOWvGJJCcM5Ekic03M7J76yhqn9iFP0XTBIiVD4hqCdtj3bjz76ecP4ClxIcezEm4TMAAmQT36VW1rUlaSI1AM7gmCPSrzw7EhwZguRyMdk8rVzvFjWXW10UtqH0ibjPD+qAIu3MA/uzpP1qldMnyw824E9kykxqbAjx39TXofHsYmA2LkkFX8IBm52uKqPTjh4WznA+CFX0sOfnXLHFix5Xp4ZbDjag5dsB4WtpxEyDmMkEgqtJAj08IpuENmP3QrN5xH0NVVrhKgAtwAAkQLGL6SAd95rHOvQhSkZheBmtJH811abe1UcbdRZVZEluhh0lfDig2NSRmHhBB++VMeF4eABSzguDWSXHDmUdyALbaVYlAIQVHYV14oaIpHJknrlZ53/AGhrzPJQNTYeOg/7Vb+HJhKRtm9hH9KprKTicfP4UHMf9On/ACI9KvTKISiDcEH1ufc11R2RB8hqtgDy8+/0n2pDxPjaW0LXEqJIHLNBEXPK5O1M31kTfa3hFebtoOIfyAkok/7Z/wDYgeUVnd/YrB41B6lcuvX3bDuFYFeLd6xy6dp37yOXIfYuuDwaWxAFaweHSw0NBoJMC5sLmhsBjg6tSEqJUkkKAiTBN07GRf8AOklK+ScYXwE4/FBCZmKSHEtrcQhxwytUQgyEiQDJuJ39q3xTENlJuVq0M6pM8ogQaQtpKAUJJGYiSZt2gDpsOXM0OtiihXIaywhaSsuuBOgKQn4ToVA6CLyKiwuEbWhQOfNeJUBKIgK7OuoPhUnDUpQEBBICfLMeZ74tHKpGAhWcApQQSUzvrp3fU98c84S3ae5y5PFlVp7guGbWHklClQZTCjOYi4Sra4vpsYoLHtLUCsjNKyFndIBiANvy86ZofSUqSUyJ7XMwZCk6Gw0386cs4NLkZV9mcxnfuPfbep3KLtoi8U48lfWsohLdvhO5UUne+lwdOVOsMyoLWZUTlCQACbWJJ9/UU0xDjDQUoIClQIJ0BED4e7lSj/yL7qwlTiQDAASMqb8/4e+pZEnHclOKihjnWEg5V+QMx3k6V22hSSSW1G9oJNrd1K3+G4lhw9VJBsqFTBnUbfelOWP7wUhDpBJEpIMEmJIjYx5WNckscatOyTaEfSJwIxrFoKkLSbXgmUX37Y9++rxhVygVQenDKurbduFtrgzOhuknwUgH1q1dFselxpJGhTIHIcvEGU+INet47TxRa/B6GBpwOsbhWFLUFt5nHMiU/FzUTABEkAHQzfvE03imKUrEBAJVDSUgKJRBMKOVI+IXSMhBmDble8agHxFxYGD52rzXGgNuOZihQKcspkmyssmFAIX2f5YI7Jmm+P6tR0JptbcFj6OraCeqJQC8lTSFBJQjNqgKVlAMqAAIjXeZpRiOBJyltZ6opWcmda1JR8RWBnSm0xYAgxJUaWN8Rb6tTaikSQULTEggmyjM5O2o6Egi1PV8aBwyDiUNvmDlJUkLLYmCpWeVSrKMqknnEiqNS4ToaTT3K5i2SkFSlNKGYJlBTqRmHZt2YkTESCKv3Q3GB7CJZehCkKKcOtRgOWkt8yBoY2jcVRxxTCnKEYNJWLpzurcTc6EAJJMc5raXA+6F4hwobkAZY7CR8IQkJgAW0FO6S+oTXT2Zah0ZeWEsLaWgdYXXnlugoKIUMqYMqEEXMHsiYtRWJ6R4OQFtLWltXVodSoISpQIJN1ApANsx1v4VS18UeStKW8Q64ltUpzKUoGDaRNx3EelE4Pg7j5czdguHOpeSRmzEwL2T57eNLLTVG1ey2Dpeozl4eVJkgEiZAJGsX0rK3gugjOQZwpxW6rCb8pMRp5VlLsbWH8Sa1ozCQtIUklJVbskpvaxM8waJ4nhJFqR4PFKbUUAwJJBmIVob1HyINxtdF8M6dPsY4RBRYiTqVEk+cDmZ8qmxpLiFjSUmBraFcz4Wqr8Z6SuJX1bbYcUm2eYA3gBIvYxrrWYB7FvEZyG0zJCAQfCSa5o+PN7nQ80FsM+HCUpzEyACIBiQnx3PPl31KvC51SdBpR+EwtgKNbwwFdcMUYu0cssjapgeDwkVX+n3Fw23kT8SrAd/038KedI+Mt4dskkTsO/bxrzZgLxDxed+HZPdy79p8hVoqyMmOOiGAyNEq+Jy5J5Rb3M1YG3CUiBzn1MEd8EUCzKrg2tXWDXCshN4UCd4vcewp0BgvSzH5MOsgwVgNp21kEjvCcx8qE/s74eCkuR8Rt4aAflS3+0R6Ay3EDtLI7xYfM1cug+FyYdsb5RPjFaXACDpc+EoCbbqgzByiQLc1ZR50g4G6MOlWKWZdVIQABuIzcqb9PcDnAXJBTI1tFjf0qp8PcaJzPBWRJV2UmM5MQn+CJuRt30jVjRmo8h+C/bfCSTEKm8blRO0kecR4r+IOp7aUzsNPxDU+Mid4G9E4npQ9GRpYZbBsEQgRyED9e+mfQtKXFqDiA43lgzeASII3CiZv9bhuh1JzdIX4YHL2xoN5E3keMzvTRvo664AtJEEAZlFKEgRJA53kd/dpTvjXB2EupSREgnMJ7KAklSk7BQQk+fKi+F8RbAS4W8y/wDKTkV+zamISCLkCCVDWljNdos0U/i/R3FNBtQbDqcwGZtQUBJgSdpm5051cOH8NDeGWXLLyk9gzlIFo2PnSdjC4vD45DiTDLqlZklQ7X7MrOZEWGZJg6gaxNPukLobYdWj4VNKUkGd5EeRp5QUlaF0qVtopoxPXkobSHCCZQrsK5TIEEc9opNi0qbVlUlQym2ex0Bi2sesbVZf7OcBlb/vKwesJVkJGiL3HOfkLa0t6X4vrHJzFSkqEp5kEAKEcpIvzHKuf49Lo4J+O1FzQfwTjBbKFFWZBEBUXSDEpVsoC+0+dWm7gStvIhxJzJyysKBEEEEgpM8xVD6PokdSrKJnxA1TfeLidr1Z+A4tTJAdBU0m+YwFbEXHxC07Vw5YJS2/37nG1bIemroU0hK4K1kkgWGUJUk22kq+dV7ohjiy51SjqZQeZ3H+oAEfxA7qqXj3EeueUsJhMZUA6hIMie8yTSnFNzff03t716mDHox6X/rO7HHRFI9QW4lSM07a15kyhGZaHVRngFRRBScyTYrIyCJuZPcdas/RDj0kId+PnHxRfMB+9+8nukbgBdLOAOPuqfbygKHwgm/JV99LCNKLvVR0RklGyuK4WEwoKaIBbkgyCVCUgaAmxzCZA17iOlHD8qkWQVOHMQkGU/AkJsT+Eg5bn1sCvh7zZhTciQTaZju3HdTzHda0GwlOV11CXHXEpAIBEJbQR8ByAZiLkkXp9Lu7BqjXADiOjzye3kdiIWpaDaDbKdcuUASaxrhfWkCAAnshRkX5DmTbamHDQ8iShagrNnB3mZIJ3SRsaecXwDgdWlgICCUuCZOVZgkW2kTFSyqfMeSGRO7ia4fwFbfVtIIhU5iQCZiRGkDvNWHg68K24pouEKSQCSkhMwNDeNdzQGAw+NUQFuIQjfICFdwkz33tTZnhqEQcs3m958edShGa3kaKfZZWcE3lFwe/s3rVI3usUSoulM7BUQNrbWrK6NS9D6WEIxCF20PI2PpQmK4ShewrzrB8XcQIS4tA2Q4OuR5EkOI8iqmDHS19MdhtXPI7lI/0upn3ptHoZT9lswvR5tOwpkzgUJ5VST01cj/CV/8AI0f/AGoDGdMMSqQhsJ8XEk+gH51tDNqR6M68hAkkWqq9IemjbcpbOdfdVD4jiX1wXnVmdEgwPQRUuDwqEwRc/wBfpQ0+w6vRLkcxLnWPKMagcvLz1/pTBgADL4nTaPnWsMi4H3YfqKnSnteFvvyNMAPwyITff+mnn7VKyodYe6B43v5aUGw+UDOpJUib22022/WnvEMIhxfWMlCUrA7J7MHSRAMzapymoumPGDkrR55/aGol5F7ZFEf7jNeo8AR+yTbYfKvLOnKf2oEglOdMg72P5mvUOiLoWw2oboSfYVRu6aEqrQu6ciMO4f4TVF4fw4unqkEBZR1jaVf5kapkGAuJgHlXonTrCqVhylGqlIT5FQqn8b4UppOdFigSCNQRcEciIpOxKtirC4ZDQQ46R+0KglCgQUhCsp8JI7tqarwQsrDLWAe11YMEEEEAfhXfQC/ca3xrElxphxwnrFtxn2UoE5gUxFjJ/wBQpO44pACkSDvlNjv8J1i+lDlvY9LD5uKMFhzR2XDXKv8A7LlxNzP2AczqMJl1JKiYU5A3OVJM/wAVS9DFEspcUpRWswiLDqwSABN9ZuIm20VVlcYVKFrRK0DMlcFK840GYHtA/vKncVeOj3GW3Ey4ylKrSWlJEk3MIMRMkk6eBpqTB/bUvola/G51xJ4qxTLaolDbrhJkkfChInxUbdxqHpuVDDdWj4iABtdbiAkeeVXrRWFx+GU+6600tTqIaUpwjKIvAiZ1vW32esWgLEnN1qieaQAkchdQIH8NHgVXTZoqTh8PIgBCAkcgQMovytNeZOPBT+uWUqFv5ZN/evQOmWIyIQ2kmXCVHQfCPaZrz9hhSsQkIAJQL982v6mptWmQ8hXFxRYODNKQA4tSVZE2KQM0mRE6zcDlM0r6ccbWpaW0pKEan95Xa35Du96tvDOEAAKWZVryExFkiwqm9N2pfa5qn0zgfWo4cCWTVLd/wjihhUVb5OyL1y8i/lPnUqbkADepXkb85A9/pXYWF7iBIjXbXURBkaEWuKd8I4+pBhyT/EBP+9IuT/GgeKRrSfEkJv8AfL8qg6wEnu/Os0nybg9Ew+JacSCSnKdFAgg+CtDRjmFSsyVJP+hJ2jU15w3iFNqJSSCdSDBO14+PlCpHdTPBcfKYzZfMFJ81IKR/woU+g6i7tcOEyFx4Ia/+pNEYPBhElS85JmSAPK1VTDdJkndI8HVn5s/nUzvSdsboP8zzvyQxf1oOMn0BtFvUtKRJIFDYrHBKM8hKB/mLORA8z8XgJqmYnpWBOSNLFDYkH/8AY8pZHk3SfHcZdcVmEpVsskuOCdYcXOQfyBNbR7Nfovf/AJRH7mKV/Enqmge8IcWFgeIBOu9arzF7DJJJUnMd1KJJPeSdaym0x9GtjXEYMdWDNxM+0fnQ+L4cr+6hSUFalkg23mPYCnD5BaFjJgQNPxH/ANvlXCMS6xPVrEESQQFD4Rtztt3VOV1sVgle5Tm0uIUEqSQRseVOsOydZtqPkPzqTFsqdV1riiVqMAWAi5sO6imW8uXMOz5dx9KaMtSsr5HjS8eSUu1Ys4mnMSNcoyzyvr6CjMLhoSnurEcPzvFSvgFwI+IwNe7WnSGRKJ2EwP5v0rI5kndmsBhFuOobbQSSCVK0ShIIurflpc2p5i14bBjQOOD8SgCfIGyfK/eaPwyk4bA9YU9tac6iBz+DxsRbvVXm+MxCnFFajJUfSo5Mrj9KL48aluyyPdNHM1s8dyj9bVM10jbfGR0XNs05VjvDguD4yKpxSBpE865UOX351NZH2UeNdG+lHAFsHOFFxpV0rOojVK/44Mzoq55gXX+y/FZsOlO6CU+ht7Ee9K+jmID7bmFdNlJgKO3I/wCk38JG9QdA31MvqaXZSpgf/kRZaPEpuI3kV1J6o2jlcdLpnpz6JF6S8XwAWkjmKeMLCkgjQ1DiG6xkeWOEMlbbiesaJByEZcqhIzIUPhVEX3sCKEUwknsZ0i8FahAtvA7Vp5E16JxPhCHNUiqzxHgC0yUXHLSl3C6lsxd0bwzj7qQSFMNf4hKElOQAjKDAIJ1AB5GNKuiuFsBs4hpuQlMpCCvMkgWSQDIM2PPzpDwFt1ENOGEBByNhISJzCVW+JV7kzR/SF8JbQ2hamlGVlaVFKsqYsCIuSR5A1n6ZXHCMY6kDdEMyWAtWri3FqkdqSsi452E8jVowLBPbAJJ1BIEIEwTsIUVGe+q70a6TFxtDbgC3SCAXG0wogx8SQPsGnnFceUslSylKEiMqRAzRAGUcj6UdisZ7JeiudNcaypzIkuuOJCk2gNi0qgESowfi07qTdFEZVhxSSS6sISI2mJnYDtGg2A486hoKJUrNmPIEyo/fOK9G4ZwtCQiE2QIT3Wj5UGc+R2SYlISg+FeZdISpzGnKCoMpEx/DJP8AyXHlXoPSXiCW21rVogTHNWiU+JJArzvguIyKLjgJ6ySVCxuTJ75JNjzNC2k5JFMGOOTJGE3SfLCcKQct4uB7GflRzjUme72MSfetKwgUQttSVAnnF+R5HQVMlUkWI07uXpzrY80Z/kv5v9Pn47tbxfD/AMm8AUJeaU4jMMwEciqBMbkE6Uw6c8DbQEvISEkKAUBbMDMW5g1vhy22153Gi4Y7MEWM6gG02N9q543xBeJKQU5Gk9oJmSbakju2796SUZvImuDmjKKg0ytPsnl9mhHmNbd9O3GgSkTy89z8x61C4xauggIo7vuDUaTyG4+lG49jLYWv+tC4X4ik8wR6isC96CGm5j72optqDHj9+1bwbR57j6fSpVNq5f0/rWCcpw3zPzrKKSe7v0O961WMS4dcZU94MeX6UWrDNLZWSe3nSlCQYy6bbiJ9KK6NYFp91XWEhLaQTFpufOLUNxTEMKeWphsp6oFBJBTmWTAAB5XvvNc2SVvSrPT8DCpZlq45/W4vUkqcgSUoBSN5O/0rWIxqUDKQZgHly89qPw7HV2JOhk9+vrMetD4vBIdACjBkQd4i48LCqxVIh5ueWfLKf32/AuVxBawCmIuPD+t4ozANuqOdSiBbYa6AaTRDGBSiQZJgAcgJ2FEOEEW1JUdNQIt3UxyJPssPTJR/uvZ0Ab/25RHzFUBlrMQNATE/fiK9J4MEP4bqlmVISG184/Ar0EeKDVI4lw5xhxTapvobQtINj96GuTPBqWrpnXhknGvQI2gAqCosD362AHrNDBokwkSdh9KOZwxymMtgZkxt89qGWhUBOkbxUUirO+jrqg+gAbm/dlNvCu+kRy4x4SUdtCwoCSlZSlYUBuQpRtuCob046KcNBcLhsgAwo2i0qJ7kgG/jSHieJ61913ZaypI5JtlHiExXdg2jZxZt5UX3o1xgOIzGAQQl1I0SsiQoc21i6T3xVjBBFeR8Oxa2XEqSoDUdoEpym5bWBctmZtdJuOVXzgnFkuSEapEqaJBUkfvJIs62dlD56Ukq3Qid8jlxuo+rkQRU2HxCVixqQt0EErXHOHrs438SdjceHhVe4o8HE5ChzrTbLBMf6tMvznaIr0BbNRDBjWBQaGjNpUUjA8Pea6twZE9WnKlEzM/EVExJPtUPH+IP4tSWktZEi5AMgm19NByq9qwYNbZ4elN4FAOpiLov0fSynNErPxKOvgOQp1inQgQLqOg76kfxIEpRcgeQ7ydAKonSbjfWS0wqQqy3hYEbpb/g5r30HdknLgVuhN0u4qHnA2lUtIVczZxy4Mc0gSkc78xQ2NUFIQU6AwY1jlB/OpFcLSpOWBYcvDTlUDvClxKVKsNzNonU3p+FSJuzrCPONdtCkJt8JJhetssTPsOdOcHikPjMiywPgOoI1g7ikZwziBK0yOYuR3xXWHRleCwZS5dKhsob9xN7bTUMmNN2tn7O7xP6hPF/byfVF8p/+FswC5tuNfHYUQtI52iPeh+HLzGSL6K2hQIv4EGfI1JiFpgQAVADncT+lVxtuNvkj5EIwm1F2uV+GDuYa4MC8+4FR4liZA5GPMmPaKlOJzJJII5eUj1rpLfYgEnUX1sTr6jSnIiriWBzpVBhU2MjWYFVrF4ZxEFU23AMg6eBHdVzKIKpidfcH/2qJ5jO2QQN/wAre9ZiuNivhKSlMKIzWuJ3uD6UxZQDPcRQ2AKlZyu55neE6+Nj9mp1TsLK5b9qsZcEiUiNTW602VQNPb6VlYJFg8Wth3rGiJ0IVcKFjBqd/F9etS8iUSrMoJ3UAAPGw+4oI6z3zHoKLwy0gpmx+pMfOpuCvV2XhllBNRfOxLine7f1tWmxISqe4+prnFkEi1rAR35h+lQrxQQgXGgOvfP5GmEJMUe0ANT9x7VFiXimw2ifOLffKo3MWnMIgxBFYXUlCp7jM8h+tEU1huMOMv8AWN6/CpJ0UndJ8/QgVf8AAY7C41AQqCqJ6tRAWk7lJ/F4p8xXluJIzA+fnQySSSRzt986PKpgunaPTMd0URJ6t8p7lpBPhIj5VE10ZQkFbjkoAkk9hIG+ZZNh5iqlwvjGKEJS+7FzBcVA2gSbXFRcQxbriIdccc3BWtSjGbvNrT6UnxQvj+R/klXI+6R8aRk6jD/AYStwWChshH8HM76aa1/DtmCdf6UM+6AgAbGfSDTdlFo7t+6nJiDiKyFZdAP6VPgseUBJMnIqRCilSSQO0hQug84sdwaH4oqFkfegPzqNMXH3YiaIC/cG6QBwwshatMwKWnZ0ukw28dbgpP8ADT9niAkAOpJ/dcBaX5BdleINeSPgJuNZmp8Bxh9sBKVnLplPaT/tMj2oUma2j2MOuDVtflCvdM1hxCj/AJTn+015dg+k7if8tqeeUp/6FNEq6YvGwS2Y1u8fm5W0L2HU/R6O6+4kSUBA/ecWlI+dJuKcabbElSnO5H7NH/yrgKH8knuqiYnpA8TIyI55UJn/AHRm96CfxCldpSipWhKjJ9TrrW0R/INTHPGOMuv9gwG5/wANEhE/xT2nf9UD+Gl0z9+FDtOk2idh7XqbtXsfPyohGDC45aT5WP0qeZT/AKR60Kws2nUjke76Ua0kjNcXyx3RPfQCdYdvMY5jw3H0qLD4EAAjQqkbxrJEb2PrXbT5BuBaFTtcx9+VSIxpOWBYGIgd3PlPyoVZgpsAyYn8J57yfDvrlUHtCYgTvuLe9SNrJkcwfyj77qGeAmc24mO6Cd7/AHyomNPPCdNPl9g+tEJdBA3sT4aa+9AOMA5lFQPK+v1gVIpNpzG1v+VvYH3rUazWIVlPiPzH5VmGfuAd5nukj9a0pqRr+En3iPSoQcqtLyBesAmTh9QLAj0MG9dZEgAQbDNI/m9tPeuEuxAOkfQCugDp4jytWCbUtO1ZQ6jPOsrbGIssb2k/P9KkUmIO8fSK1WUFwF8g5dJN9r/n+dLeIwQIkaD0rKyiA5Soi/3r/Wpi73fc1lZRActKzdmBt8v1rXUZQPv70rKyiY7wyVROl/v5VKWyVAE2/r+VZWUDGuKt5Up8T8qY4Y2vuPyrKysAQcXH7TSJ+VRYf79Y+VZWUOg9nWOTEH70n8qiw+/3vWVlEBtxJIMbfpXeAZUorCbkCTeND9RWVlboK5OH3QO86fKp8KsCTzUPyH1rVZRATsv9o85kHum/5UQAZzK0MR5z+tZWUoQ9tvLAIsdO6P6VLiX8qZ3IETz7VZWUTHeFCVpCjJI7OwEkG539Km61WYJSBAIk/MeZFZWUnYy4NwoqMCwSM0QLbn3HvUjaOsJAscqlEnaE307gaysoNumFJWjjEIhIuDe8yZmL6C07d+9adTFoEGCPWR7zWqysmzNIixboSQTYnSBPKuMTMmLDny5GJvWVlFsySJCyYTaOyBte2vqDUL6XMoIEJzFIuL9/lasrKybpAfLDU4Zf3FZWVlLqY2lH/9k=" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">{{ $post->title }}</p>
              <p class="subtitle is-6">@johnsmith</p>
            </div>
          </div>
          <div class="content">

            {!!     $post->content             !!}
            <br>
            <a href="{{ route('posts.show', $post) }}">
              read more
            </a>
            <br>
            <time datetime="2016-1-1">{{ $post->created_at }}</time>
          </div>
        </div>
      </div>
    </a>
  </div>
  @endforeach

</div>
</div>


        </section><!-- red section -->

       <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="/" title="Home" itemprop="url"style="color: orange">FOODY</a></h1></div>
                                            <p itemprop="description"> Best choice for your online store.</p>
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">INFORMATION</h4>
                                            <ul>
                                                <li><a href="{{ route('privecy') }}"title="privecy" > {{ __('validation.attributes.privecy') }} </a> </li>

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">CUSTOMER CARE</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Returns</a></li>
                                                <li><a href="#" title="" itemprop="url">Shipping Info</a></li>
                                                <li><a href="#" title="" itemprop="url">Gift Cards</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">GET IN TOUCH</h4>
                                            <ul>
                                               <li><i class="fa fa-map-marker"></i>5Tth Floor, AH Building, 756 Damascus, syria.</li>
                                               <li><i class="fa fa-phone"></i>+9639567899876</li>
                                               <li><i class="fa fa-envelope"></i> <a href="boushraalmouhamad98@gmail.com" title="" itemprop="url">boushraalmouhamad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div>
        <!-- Bottom Bar -->

        <div class="newsletter-popup-wrapper text-center">
            <div class="newsletter-popup-inner" {{-- style="background-image: url(assets/images/newsletter-bg.jpg);" --}}>
                <a class="close-btn brd-rd50" href="#" title="Close Button" itemprop="url"><i class="fa fa-close"></i></a>



                  <a   href="{{route('getbyip')}}" style="color: orange">


                    <button class=" is-large form-button" type="submit"> {{ __('validation.attributes.by location') }} </button>
                  </a>
                <span ><i class="fa fa-check"></i> Thanks, your address has been added.</span>
            </div>
        </div><!-- Newsletter Popup Wrapper -->



    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

