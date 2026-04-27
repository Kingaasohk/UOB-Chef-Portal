<x-mylayouts.layout-prototype >
 <!-- Recipe Title and Image -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    {{ $recipes->title }}
                </h1>
                <h4>{{ $recipes->category }}</h4>
                <div class="text-center">
                    <img class="recipe-image" style="width: 50%; height: auto;"
                        src="{{ $recipes->getImage() }}"
                            alt="{{ $recipes->title }}">
                            <p>{!! $recipes->full_description !!}</p>
                </div>
            </div>
        </div>




        <!-- Recipe Instructions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Instructions</h2>
                <p>{!! $recipes->instructions !!}</p>
            </div>
        </div>

        <!-- Recipe Ingredients -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Ingredients</h2>
                <p> {!! $recipes->ingredients !!}</p>
                <p></p>
                <p>{{ $recipes->total_time }} minutes</p>
                <p>Servings: {{ $recipes->servings }}</p>

            </div>
        </div>



        <!-- Comments Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Comments</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jenny Koshe</h5>
                        <p class="card-text">This recipe is amazing! The cake turned out so moist and fluffy. I added a
                            little extra vanilla, and it was perfect.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">I tried this recipe last weekend. The kids loved it, but I had to bake it a
                            little longer. Will try again soon!</p>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Leave a comment:</label>
                        <textarea class="form-control" id="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
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
