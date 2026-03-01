<x-mylayouts.layout-prototype>

<style>

/* Container */

.profile-container {

max-width:700px;
margin:50px auto;
padding:30px;

border:2px solid #ccc;
background:white;

}


/* Title */

.profile-title {

text-align:center;

font-size:28px;

font-weight:bold;

margin-bottom:25px;

}


/* Image Section */

.profile-image-section {

text-align:center;

margin-bottom:20px;

}


.profile-image {

width:250px;

height:250px;

border-radius:50%;

object-fit:cover;

border:2px solid #ddd;

}


/* Form Groups */

.profile-form-group {

margin-bottom:20px;

}


/* Labels */

.profile-label {

font-weight:bold;

display:block;

margin-bottom:5px;

}


/* Inputs */

.profile-input {

width:100%;

padding:10px;

border:1px solid #ccc;

border-radius:4px;

}


/* Textarea */

.profile-textarea {

width:100%;

padding:10px;

border:1px solid #ccc;

border-radius:4px;

}


/* Buttons */

.profile-buttons {

margin-top:20px;

}


.btn-update {

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



<div class="profile-container">



<div class="profile-title">

Edit Chef Profile

</div>



<form>



<!-- Profile Image -->

<div class="profile-image-section">

<img

class="profile-image"

src="assets{{ 'template_custom/img/team-3.jpg'}}"

alt="Profile Image">

</div>



<!-- Upload -->

<div class="profile-form-group">

<label class="profile-label">

Profile Image

</label>


<input

type="file"

class="profile-input">

</div>



<!-- Name -->

<div class="profile-form-group">

<label class="profile-label">

Name

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Bio -->

<div class="profile-form-group">

<label class="profile-label">

Bio

</label>


<textarea

rows="4"

class="profile-textarea">

</textarea>

</div>



<!-- Address -->

<div class="profile-form-group">

<label class="profile-label">

Address

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Phone -->

<div class="profile-form-group">

<label class="profile-label">

Phone

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Facebook -->

<div class="profile-form-group">

<label class="profile-label">

Facebook

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Twitter -->

<div class="profile-form-group">

<label class="profile-label">

X (Twitter)

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Instagram -->

<div class="profile-form-group">

<label class="profile-label">

Instagram

</label>


<input

type="text"

class="profile-input">

</div>



<!-- Buttons -->

<div class="profile-buttons">


<button
type="button"
class="btn-update">

Update

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
