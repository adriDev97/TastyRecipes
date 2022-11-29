    @extends('layouts.app')
    @section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class=""
                            aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3" class=""></button>
                    </div>
                </ol>
                {{-- lines botoom --}}
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active carousel-item-start"
                        style="background-image: url(/images/slide/slide-1.jpg);" data-bs-interval="2000">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="satisfy-font"><span>Tast<i class="fa-solid fa-seedling"></i>Recipes</span>
                                </h2>
                                <p>Tasty Recipe community offers you a wide variety of recipes for all tastes, together with our worldwide family of followers and their contribution.</p>
                                <div>
                                    <a class="btn-about-us" href="{{ url('aboutUs') }}">{{ __('About us') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item carousel-item-next carousel-item-start"
                        style="background-image: url(/images/slide/slide-2.jpg);" data-bs-interval="1500">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="satisfy-font">Welcome to our community</h2>
                                <p>If you join us you will have the opportunity to access a wide variety of recipes and not only that, as a member of the Tasty Recipe family you will be able to give your contribution by sharing your own recipes so other people can enjoy them</p>
                                <div>
                                    <a class="btn-about-us" href="{{ url('aboutUs') }}">{{ __('About us') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(/images/slide/slide-3.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="satisfy-font">For food or cooking lovers</h2>
                                <p>You are in the right place, if you are passionate about cooking or food, with us you will find the best combination and if you like to combine your recipes with a delicious wine that fits like a ring on a finger, we offer you the option of pairing with wine</p>
                                <div>
                                    <a class="btn-about-us" href="{{ url('aboutUs') }}">{{ __('About us') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->
    <main>
        <div class="background-wines py-5">
            <div class="container my-5">
                <div>
                    <h1 class="text-center py-5 satisfy-font">Find the best Wine <a href="#recipes">Pairing</a> for your Dish</h1>
                </div>
                <div class="row my-5">
                    <div class="col-md-6 ">
                        <paired-food></paired-food>
                    </div>
                    <div class="col-md-6">
                        <paired-wines></paired-wines>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <h1 class="text-center py-5 satisfy-font">These are some recipes that you will find <a
                        href="#recipes">with us</a> </h1>
            </div>
        </div>
        @include('recipes.list')
    </main>
    @endsection
