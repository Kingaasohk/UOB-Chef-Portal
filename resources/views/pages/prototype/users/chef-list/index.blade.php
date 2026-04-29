<x-mylayouts.layout-prototype>
<!--Chef LIST PAGE prptotype/-->

    <!-- Hero Start -->
    <div class="container-fluid p-5 mb-5 bg-dark text-secondary">
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-1 text-secondary text-center mb-0">Chefs</h1>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->

    <div class="container-fluid p-5">
        <div class="mb-5 text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px; margin: auto;">
            <h5 class="section-title">Expert Chefs</h5>
            <h1 class="display-3 mb-0">Let's Meet The Experts</h1>
        </div>

 @foreach ($chef->chunk(3) as $row)
        <div class="row g-0">
            @foreach ($row as $data)
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded-circle rounded-bottom rounded-end">
                        <img class="img-fluid w-100" src="{{ $data->getImage() }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ $data->social_media_1 }}" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ $data->social_media_2 }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ $data->social_media_3 }}" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>

                                    </div>

                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 d-flex flex-column justify-content-center w-100 rounded-bottom text-center"
                        style="height: 100px; background: rgba(34, 36, 41, .9);">
                        <h5 class="text-light"> <a href="{{ $data->getLink() }}" class="text-decoration-underline">{{ $data->name }}</a></h5>
                        <p class="small text-uppercase text-secondary m-0" style="letter-spacing: 3px;">{{ $data->short_description }}
</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
         @endforeach
         
    </div>
    <!-- Team End -->
  <a href=""></a>







</x-mylayouts.layout-prototype>
