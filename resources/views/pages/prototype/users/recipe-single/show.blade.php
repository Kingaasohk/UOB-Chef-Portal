<x-mylayouts.layout-prototype >

    <div class="container mt-5">
        <!-- Recipe Title and Image -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    Chocolate Cake</h1>
                <div class="text-center">
                    <img class="recipe-image" style="width: 30%"
                        src="{{ asset('template_custom/img/choco.jpg') }}"
                                        alt="Chocolate Cake">
                </div>
            </div>
        </div>

        <!-- Recipe Info -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Ingredients</h2>
                <ul class="ingredients-list">
                    <li>Flour</li>
                    <li>Sugar</li>
                    <li>Baking powder</li>
                    <li>Milk</li>
                    <li>chocolate</li>
                    <li>eggs</li>
                </ul>
            </div>
        </div>

        <!-- Recipe Instructions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Instructions</h2>
                <p>
3 cups powdered sugar
▢
⅔ cup Dutch Process cocoa powder
▢
¼ teaspoon salt
▢
2 to 4 large egg whites, at room temperature
▢
1 tablespoon vanilla extract
▢

1½ cups bittersweet chocolate chips
Preheat oven to 350℉. Line two rimmed baking sheets with parchment paper (or silpat mats). If you use parchment paper, give it a light coating of nonstick spray.
In a large bowl, whisk together the powdered sugar with the cocoa powder and salt. Whisk in the egg whites (start w/ just two) and vanilla extract and beat just until the batter is moistened. You're looking for a brownie-like, thick and fudgy batter consistency. If it seems too thick, add another egg white-- then a 4th one if it still seems too thick. Then gently stir in the chocolate chips.
Spoon the batter onto the prepared baking sheets in 12 evenly spaced mounds per cookie sheet. I like to use a spring-release cookie scoop. Bake about 14 minutes, until the tops are glossy and lightly cracked. Slide the parchment paper (with the cookies) onto wire racks. Let cookies cool completely, and store in an airtight container for up to 3 days.
</p>


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
                <a href="https://twitter.com/share?text=Check out this recipe: Delicious Chocolate Cake&url=#"
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
