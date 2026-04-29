<x-mylayouts.layout-prototype >
 <!-- Recipe Title and Image -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    {{ $recipe->title }}
                </h1>
                <h4>{{ $recipe->category }}</h4>
                <div class="text-center">
                    <img class="recipe-image" style="width: 50%; height: auto;"
                        src="{{ $recipe->getImage() }}"
                            alt="{{ $recipe->title }}">
                            <p>{!! $recipe->full_description !!}</p>
                </div>
            </div>
        </div>




        <!-- Recipe Instructions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Instructions</h2>
                <p>{!! $recipe->instructions !!}</p>
            </div>
        </div>

        <!-- Recipe Ingredients -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Ingredients</h2>
                <p> {!! $recipe->ingredients !!}</p>
                <p></p>
                <p>{{ $recipe->total_time }} minutes</p>
                <p>Servings: {{ $recipe->servings }}</p>

            </div>
        </div>



      
        <!-- Share Recipe -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h4>Share this Recipe</h4>
                <a href="{https://twitter.com/share?text=Check out this recipe: Delicious Chocolate Cake&url=#"}
                    class="btn btn-info mx-2">Share on Twitter</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=#" class="btn btn-primary mx-2">Share on
                    Facebook</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=#&title=Delicious%20Chocolate%20Cake"
                    class="btn btn-secondary mx-2">Share on LinkedIn</a>
               <a href="https://www.youtube.com/watch?v=_GxP_qr75pw&pp=ygUEZm9vZA%3D%3D Check it out here: #"
                    class="btn btn-dark mx-2">See youtibe tutorial</a>
            </div>
        </div>
    </div>


    <!-- Footer End -->



</x-mylayouts.layout-prototype>
