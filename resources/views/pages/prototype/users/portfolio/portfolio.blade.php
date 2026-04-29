


<section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
                <h3 class="fs-6 text-secondary mb-2 text-uppercase">{{ $chef->name  }} Recipes</h3>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>

    @include('pages.custom.users.portfolio.filters')
{{-- Page content  --}}
        <div class="row gy-3">
            {{-- repeats each Recipe card  --}}
            @foreach ($recipe_data as $recipe)
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="card border-0 h-100">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <a href="{{ $recipe->getLink() }}" class="bsb-hover-image d-block">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                     src="{{ $recipe->getImage() }}"
                                     alt="{{ $recipe->title }}">
                            </a>
                            <figcaption>
                                <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read Recipe</h4>
                            </figcaption>
                        </figure>
                        <div class="card-body border bg-white p-4">
                            <h2 class="card-title h4 mb-2">
                                <a class="link-dark text-decoration-none" href="{{ $recipe->getLink() }}">{{ $recipe->title }}</a>
                            </h2>
                            <p class="card-text text-secondary">{{ $recipe->short_description }}</p>
                        </div>
                        <div class="card-footer border border-top-0 bg-white p-4">
                            <span class="fs-7 text-secondary">Published: {{ $recipe->created_at->format('d M Y') }}</span>
                        </div>
                    </article>
                </div>
            @endforeach

{{-- recipe pagination  --}}
           {{ $recipe_data->links() }}
        </div>
    </div>
</section>
