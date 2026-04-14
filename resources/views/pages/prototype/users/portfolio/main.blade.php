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
                                    <a href="#!" class="bsb-hover-image d-block rounded overflow-hidden">
                                        <img class="img-fluid author-avatar bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="{{ asset('template_custom/img/team-3.jpg') }}"
                                            alt="Chef Josiah Emanuel">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Chef & Culinary Expert</h6>
                                        <h3 class="card-title mb-2">
                                            <a class="card-link link-dark text-decoration-none" href="#!">Josiah Emanuel</a>
                                        </h3>
                                        <p class="card-text mb-3">
                                            I specialize in artisan breads, modern pastries, and gourmet cuisine. My passion is creating dishes that delight the senses and tell a story through flavor and presentation.
                                        </p>
                                        <ul class="bsb-social-media nav m-0">
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="https://www.facebook.com/chefjosiah">
                                                    <i class="bi bi-facebook" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="https://www.instagram.com/chefjosiah">
                                                    <i class="bi bi-instagram" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="https://www.youtube.com/@chefjosiah">
                                                    <i class="bi bi-youtube" style="font-size:22px;"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-dark" href="https://www.linkedin.com/in/chefjosiah">
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
    <div>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-3/assets/css/blog-3.css">

        <section class="py-3 py-md-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <h3 class="fs-6 text-secondary mb-2 text-uppercase text-center">Latest Recipes</h3>
                        <h2 class="display-5 mb-4 mb-md-5 text-center">
                            Explore my latest culinary creations and step-by-step recipes.
                        </h2>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </div>
                </div>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0">
                    <!-- Recipe 1 -->
                    <div class="col-12 col-lg-4">
                        <article>
                            <div class="card border-0">
                                <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                    <a href="#!">
                                        <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="{{ asset('template_custom/img/menu-3.jpg') }}"
                                            alt="Artisan Bread">
                                    </a>
                                    <figcaption>
                                        <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read Recipe</h4>
                                    </figcaption>
                                </figure>
                                <div class="card-body border bg-white p-4">
                                    <div class="entry-header mb-3">
                                        <ul class="entry-meta list-unstyled d-flex mb-2">
                                            <li>
                                                <a class="link-primary text-decoration-none" href="#!">Bread</a>
                                            </li>
                                        </ul>
                                        <h2 class="card-title entry-title h4 mb-0">
                                            <a class="link-dark text-decoration-none" href="#!">Rustic Artisan Sourdough</a>
                                        </h2>
                                    </div>
                                    <p class="card-text entry-summary text-secondary">
                                        Learn how to bake a perfect crusty sourdough bread from scratch, using traditional techniques and natural fermentation.
                                    </p>
                                </div>
                                <div class="card-footer border border-top-0 bg-white p-4">
                                    <span class="fs-7 text-secondary">Published: 15 Feb 2026</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Recipe 2 -->
                    <div class="col-12 col-lg-4">
                        <article>
                            <div class="card border-0">
                                <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                    <a href="#!">
                                        <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="{{ asset('template_custom/img/menu-2.jpg') }}"
                                            alt="Pastry">
                                    </a>
                                    <figcaption>
                                        <h4 class="h6 text-white bsb-hover-fadeInUp mt-2">Read Recipe</h4>
                                    </figcaption>
                                </figure>
                                <div class="card-body border bg-white p-4">
                                    <div class="entry-header mb-3">
                                        <ul class="entry-meta list-unstyled d-flex mb-2">
                                            <li>
                                                <a class="link-primary text-decoration-none" href="#!">Pastry</a>
                                            </li>
                                        </ul>
                                        <h2 class="card-title entry-title h4 mb-0">
                                            <a class="link-dark text-decoration-none" href="#!">Chocolate Croissant Delight</a>
                                        </h2>
                                    </div>
                                    <p class="card-text entry-summary text-secondary">
                                        Master the art of flaky, buttery croissants filled with rich chocolate, perfect for breakfast or dessert.
                                    </p>
                                </div>
                                <div class="card-footer border border-top-0 bg-white p-4">
                                    <span class="fs-7 text-secondary">Published: 10 Feb 2026</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Recipe 3 -->
                    <div class="col-12 col-lg-4">
                        <article>
                            <div class="card border-0">
                                <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                                    <a href="#!">
                                        <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                            src="{{ asset('template_custom/img/menu-1.jpg') }}"
                                            alt="Gourmet Dish">
                                    </a>
                                    <figcaption>
                                        <h4 class="h6 text-white bsb-hover-fadeInLeft mt-2">Read Recipe</h4>
                                    </figcaption>
                                </figure>
                                <div class="card-body border bg-white p-4">
                                    <div class="entry-header mb-3">
                                        <ul class="entry-meta list-unstyled d-flex mb-2">
                                            <li>
                                                <a class="link-primary text-decoration-none" href="#!">Gourmet</a>
                                            </li>
                                        </ul>
                                        <h2 class="card-title entry-title h4 mb-0">
                                            <a class="link-dark text-decoration-none" href="#!">Seared Salmon with Herb Butter</a>
                                        </h2>
                                    </div>
                                    <p class="card-text entry-summary text-secondary">
                                        Impress your guests with this elegant seared salmon recipe served with a fragrant herb butter sauce.
                                    </p>
                                </div>
                                <div class="card-footer border border-top-0 bg-white p-4">
                                    <span class="fs-7 text-secondary">Published: 5 Feb 2026</span>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
    </div>
    

</x-mylayouts.layout-prototype>
