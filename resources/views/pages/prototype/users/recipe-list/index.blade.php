<x-mylayouts.layout-prototype>

    <div class="container-fluid menu py-5 px-0">

        <div class="mb-5 text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px; margin: auto;">
            <h5 class="section-title">Our Menu</h5>
            <h1 class="display-3 mb-0">Hands Craft More Than Meals</h1>
        </div>

        <!-- Tabs -->
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5 wow fadeIn" data-wow-delay="0.2s">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Breakfast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Lunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Dinner</a>
                </li>
            </ul>

            <div class="tab-content">

                <!--  BREAKFAST -->
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">

                        @foreach ($recipes as $recipe)
                            <div class="col-lg-4 col-md-5 col-sm-6 wow fadeIn">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ $recipe->getImage() }}" alt="">
                                    <a href="{{ $recipe->getlink() }}">
                                        <div class="position-absolute bottom-0 end-0 mb-4 me-4 py-1 px-3 bg-dark rounded-pill text-primary">
                                            {{ $recipe->title }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                    <div class="tab-content"></div>
                <!--  LUNCH -->
                <div id="tab-2" class="tab-pane fade p-0">
                    <div class="row g-4">

                       @foreach ($recipes as $recipe)
                            <div class="col-lg-4 col-md-5 col-sm-6 wow fadeIn">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ $recipe->getImage() }}" alt="">
                                    <a href="{{ $recipe->getlink() }}">
                                        <div class="position-absolute bottom-0 end-0 mb-4 me-4 py-1 px-3 bg-dark rounded-pill text-primary">
                                            {{ $recipe->title }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                    <div class="tab-content"></div>
                <!--  DINNER -->
                <div id="tab-3" class="tab-pane fade p-0">
                    <div class="row g-4">

                        @foreach ($recipes as $recipe)
                            <div class="col-lg-4 col-md-5 col-sm-6 wow fadeIn">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ $recipe->getImage() }}" alt="">
                                    <a href="{{ $recipe->getlink() }}">
                                        <div class="position-absolute bottom-0 end-0 mb-4 me-4 py-1 px-3 bg-dark rounded-pill text-primary">
                                            {{ $recipe->title }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
{{ $recipes->links() }}
    </div>

</x-mylayouts.layout-prototype>
