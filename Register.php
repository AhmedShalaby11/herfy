<!DOCTYPE html>
<html>
  <head>
    <title>7erfy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
  <body style="background-image:'http://handymansa.co.za/wp-content/uploads/2016/11/Header-Image.jpg'">

<?php
if(isset($_POST["submit"]))
{


echo "  <form action='Register.php'  class='back w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin'>
<h2 class='w3-center'>Registration</h2>

<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-user'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='first' type='text' placeholder='First Name'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-user'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='last' type='text' placeholder='Middle Name'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-user'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='last' type='text' placeholder='Last Name'>
    </div>
</div>

<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-envelope-o'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='email' type='text' placeholder='Email'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-pencil'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='message' type='password' placeholder='Password'>
    </div>
</div>

<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-phone'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='phone' type='text' placeholder='Mobile'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-gavel'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='message' type='text' placeholder='Craft'>
    </div>
</div>

<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxxlarge fa fa-map-marker'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='message' type='text' placeholder='City'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-pencil'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='message' type='text' placeholder='State'>
    </div>
</div>
<div class='w3-row w3-section'>
  <div class='w3-col' style='width:50px'><i class='w3-xxlarge fa fa-birthday-cake'></i></div>
    <div class='w3-rest'>
      <input class='w3-input w3-border' name='message' type='text' placeholder='Birthdate'>
    </div>
    <div class='w3-row w3-section'>
      <div class='w3-col' style='width:20px'><i class='w3-xxlarge fa fa-male'></i></div>
      <div class='w3-col' style='width:30px'><i class='w3-xxlarge fa fa-female'></i></div>
        <div class='w3-rest'>
        <input class='w3-radio' type='radio' name='gender' value='male' checked>
        <label class='w3-validate'>Male</label>

        <input class='w3-radio' type='radio' name='gender' value='female'>
        <label class='w3-validate'>Female</label>
        </div>
    </div>
</div>
<button name='register' class='w3-btn-block w3-section w3-blue w3-ripple w3-padding'>Submit</button>

</form>";
}

 ?>


</body>
</html>
