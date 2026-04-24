<x-mylayouts.layout-prototype :showSideBar="false" :col="12">

    <div>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://unpkg.com/bs-brain@2.0.4/components/authors/author-2/assets/css/author-2.css">

        <!-- Chef Profile Section -->
        <section class="bsb-author-2 py-3 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
                        <div class="card border-light-subtle p-4">
                            <div class="row gy-3 align-items-center">
                                <div class="col-md-4">
                                    <a href="{{ $chef->getLink() }}" class="bsb-hover-image d-block rounded overflow-hidden">
                                        <img class="img-fluid author-avatar bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="{{ $chef->getImage() }}"
                                            alt="{{ $chef->name }}'s profile picture'">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $chef->short_description }}</h6>
                                        <h3 class="card-title mb-2">
                                            <a class="card-link link-dark text-decoration-none" href="{{ $chef->getLink() }}">
                                                {{ $chef->name }}
                                            </a>
                                        </h3>
                                        <p class="card-text mb-3">
                                            I specialize in artisan breads, modern pastries, and gourmet cuisine. My passion is creating dishes that delight the senses and tell a story through flavor and presentation.
                                        </p>
                                        <ul class="bsb-social-media nav m-0">
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="{{ $chef->social_media_1 }}">
                                                    <i class="bi bi-facebook" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="{{ $chef->social_media_2 }}">
                                                    <i class="bi bi-instagram" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="{{ $chef->social_media_3 }}">
                                                    <i class="bi bi-youtube" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="{{ $chef->social_media_4 }}">
                                                    <i class="bi bi-linkedin" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Chef Blog / Recipes Section -->
        <livewire:portfolio.portfolio :chef="$chef" />

        <x-additional.slider :collection="$featured_data" id="featured-slider" title="Featured Recipes" items=3 />




</x-mylayouts.layout-prototype>
