<x-mylayouts.layout-prototype>

<style>

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.register-box {
    width: 320px;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px lightgray;
    background-color: white;
    text-align: center;
}

input {
    width: 90%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid gray;
}

button {
    width: 95%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: black;
    color: white;
    cursor: pointer;
}

button:hover {
    opacity: 0.8;
}

h1 {
    margin-bottom: 5px;
}

h2 {
    margin-bottom: 20px;
    font-size: 18px;
}

#message {
    margin-top: 10px;
}

</style>


<div class="container">

<div class="register-box">

<h1>Register</h1>
<h2>Create Account</h2>

<form id="registerForm">

<input type="text" id="name" placeholder="Name" required>

<input type="email" id="email" placeholder="Email" required>

<input type="password" id="password" placeholder="Password" required>

<button type="submit">Register</button>

</form>

<p id="message"></p>

</div>

</div>


<script>

document.getElementById("registerForm").addEventListener("submit", function(event) {

event.preventDefault();

let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let password = document.getElementById("password").value;

if(name === "" || email === "" || password === "")
{
document.getElementById("message").innerHTML = "All fields required";
return;
}

document.getElementById("message").innerHTML =
"Registration Successful! Welcome " + name;

});

</script>

</x-mylayouts.layout-prototype>
