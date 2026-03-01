<x-mylayouts.layout-prototype>

<style>

/* Main Container */

.create-recipe-container {

max-width:700px;
margin:50px auto;
padding:30px;

border:2px solid #ccc;
background:#ffffff;

}


/* Title */

.create-recipe-title {

text-align:center;
font-size:28px;
font-weight:bold;

margin-bottom:30px;

}


/* Form Layout */

.recipe-form-group {

margin-bottom:20px;

}


.recipe-label {

font-weight:bold;

display:block;

margin-bottom:5px;

}


.recipe-input {

width:100%;
padding:10px;

border:1px solid #ccc;

border-radius:4px;

}


.recipe-textarea {

width:100%;

padding:10px;

border:1px solid #ccc;

border-radius:4px;

}


.recipe-select {

width:100%;

padding:10px;

border:1px solid #ccc;

border-radius:4px;

}



/* Toggle Boxes */

.recipe-toggle {

background:#f3f3f3;

padding:15px;

border-radius:5px;

margin-bottom:15px;

}



/* Buttons */

.recipe-buttons {

margin-top:20px;

}


.btn-create {

background:green;
color:white;

padding:10px 20px;

border:none;

border-radius:5px;

}


.btn-cancel {

background:red;
color:white;

padding:10px 20px;

border:none;

border-radius:5px;

margin-left:10px;

}

</style>



<div class="create-recipe-container">



<div class="create-recipe-title">

Create Recipe

</div>



<form>



<!-- Category -->

<div class="recipe-form-group">

<label class="recipe-label">

Category

</label>


<input

class="recipe-input"

type="text"

value="Food">

</div>



<!-- Title -->

<div class="recipe-form-group">

<label class="recipe-label">

Title

</label>


<input

class="recipe-input"

type="text">

</div>



<!-- Short Description -->

<div class="recipe-form-group">

<label class="recipe-label">

Short Description

</label>


<textarea

class="recipe-textarea"

rows="3">

</textarea>

</div>



<!-- Full Description -->

<div class="recipe-form-group">

<label class="recipe-label">

Full Description

</label>


<textarea

class="recipe-textarea"

rows="4">

</textarea>

</div>



<!-- Ingredients -->

<div class="recipe-form-group">

<label class="recipe-label">

Ingredients

</label>


<textarea

class="recipe-textarea"

rows="4">

</textarea>

</div>



<!-- Instructions -->

<div class="recipe-form-group">

<label class="recipe-label">

Instructions

</label>


<textarea

class="recipe-textarea"

rows="4">

</textarea>

</div>



<!-- Image -->

<div class="recipe-form-group">

<label class="recipe-label">

Image

</label>


<input

class="recipe-input"

type="file">

</div>



<!-- Total Time -->

<div class="recipe-form-group">

<label class="recipe-label">

Total Time

</label>


<input

class="recipe-input"

type="text"

value="1">

</div>



<!-- Time Unit -->

<div class="recipe-form-group">

<label class="recipe-label">

Time Unit

</label>


<select class="recipe-select">

<option>

Minute(s)

</option>


<option>

Hour(s)

</option>


</select>

</div>



<!-- Featured -->

<div class="recipe-toggle">

<label>

Set as Featured

</label>

<br>

<input type="checkbox">

</div>



<!-- Public -->

<div class="recipe-toggle">

<label>

Public

</label>

<br>

<input type="checkbox">

</div>



<!-- Buttons -->

<div class="recipe-buttons">


<button

type="button"

class="btn-create">

Create

</button>



<button

type="button"

class="btn-cancel">

Cancel

</button>


</div>



</form>



</div>



</x-mylayouts.layout-prototype>
