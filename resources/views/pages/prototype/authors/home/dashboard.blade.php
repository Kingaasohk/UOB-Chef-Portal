<x-mylayouts.layout-prototype>

<style>

.banner {
    width: 100%;
    height: 220px;
    background-image: url('/images/food.jpg');
    background-size: cover;
    background-position: center;
}

.container {
    width: 80%;
    margin: auto;
}

.title {
    margin-top: 20px;
    font-size: 32px;
    font-weight: bold;
}

.description {
    background-color: #efe4c8;
    padding: 15px;
    border-radius: 6px;
    margin-top: 15px;
}


/* SEARCH BAR */

.search-box {
    margin-top: 20px;
    text-align: center;
}

.search-input {
    width: 50%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid gray;
}



/* MENU */

.menu-bar {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.menu-button {
    background-color: #efe4c8;
    padding: 10px 20px;
    border-radius: 5px;
}


/* RECIPES */

.section {
    margin-top: 30px;
}

.section-title {
    background-color: #d9e3ea;
    padding: 10px;
    font-weight: bold;
}

.recipe-box {
    margin-top: 15px;
    display: flex;
    gap: 15px;
}

.card {
    width: 200px;
    height: 120px;
    background-color: lightgray;
    border-radius: 6px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:bold;
}

</style>


<div class="banner"></div>


<div class="container">


<div class="title">
👨‍🍳 Recipe Dashboard
</div>


<div class="description">

Manage recipes, ingredients, and meals in one place.

</div>



<!-- SEARCH -->

<div class="search-box">

<input
type="text"
id="search"
class="search-input"
placeholder="Search recipes...">

</div>



<!-- MENU -->

<div class="menu-bar">

<div class="menu-button">My Recipes</div>

<div class="menu-button">Ingredients</div>

<div class="menu-button">Meal Planning</div>

<div class="menu-button">Shopping List</div>

</div>



<!-- RECIPES -->

<div class="section">

<div class="section-title">
My Recipes
</div>


<div class="recipe-box" id="recipes">

<div class="card">Pizza</div>

<div class="card">Burger</div>

<div class="card">Salad</div>

<div class="card">Pasta</div>

</div>

</div>

</div>



<script>


document.getElementById("search").addEventListener("keyup", function(){

let input =
this.value.toLowerCase();

let recipes =
document.querySelectorAll(".card");

recipes.forEach(function(recipe){

if(recipe.innerText.toLowerCase().includes(input))
{
recipe.style.display="flex";
}
else
{
recipe.style.display="none";
}

});

});


</script>

</x-mylayouts.layout-prototype>
