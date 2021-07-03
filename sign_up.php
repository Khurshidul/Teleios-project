<?php

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Web Concept</title>
    <link rel="icon" type="image/jpg" href="image/teleios-icon.jpg">
</head>
<body>

<section>
    <div class="container">
       <div class="row">
           <div class="col-md-12 mt-5 boarder boarder-primary">
               <h1 class="text-center mb-5 boarder boarder-primary"><strong>Buyer's Form</strong></h1>
               <hr styel="height: 1px; color: black;  background-color:#2874A6;">
               <div class="row">
               <div class="col-md-5 mx-auto" style="background-color:#2ECC71 ;">
               <form action="project.php" method="post">
                   <div class="row mb-3">
                       <label for="first-name" class="col-sm-3 col-form-label"><strong>First Name:</strong></label>
                       <div class="col">
                           <input
                               type="text"
                               class="form-control"
                               placeholder="first-name"
                               aria-level="first-name"
                               id="first-name"
                               name="first-name"
                               value=""
                               required>
                               <div class="valid-feedback">
                               Looks Good!
                               
                       </div>
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="last-name" class="col-sm-3 col-form-label"><strong>Last Name:</strong></label>
                       <div class="col">
                           <input
                               type="text"
                               class="form-control"
                               placeholder="last-name"
                               aria-level="last-name"
                               id="last-name"
                               name="last-name"
                               value="">
                       </div>
                       </div>
                   <div class="row mb-3">
                       
                       <label for="email" class="col-sm-3 col-form-label"><strong>Email:</strong></label>
                       <div class="col-sm-7">
                           <input
                               type="text"
                               class="form-control"
                               placeholder="enter-your-email-address"
                               id="email"
                               name="email"
                               value="">
                       </div>
                       </div>
                       <p><strong>Gender</strong></p>
                       

                   <select class="$form-select-border-width: 5px; form-select-sm mb-2" aria-label=".form-select-sm example">
  <option selected="gender">Gender</option>
  <option value="0">Male</option>
  <option value="1">Female</option>
  <option value="">Other</option>
</select>
<div class="row mb-3">

<label for="institute" class="col-sm-3 col-form-label"><strong>Institute:</strong></label>
<div class="col-sm-12">
    <input
        type="text"
        class="form-control"
        placeholder="enter-your-institute-name"
        id="institute"
        name="institute"
        value="">
<div class="row mb-5">
</div>
<p><strong>Country</strong></p>

<select class="$form-select-border-width: 5px; form-select-sm mb-2" aria-label=".form-select-sm example">
<option selected="Country">Choose</option>
<option value="0">Afghanistan</option>
<option value="1">Albania</option>
<option value="2">Algeria</option>
<option value="3">Andorra</option>
<option value="4">Angola</option>
<option value="5">Argentina</option>
<option value="6">Armenia</option>
<option value="7">Australia</option>
<option value="8">Austria</option>
<option value="9">Bahamas</option>
<option value="10">Bahrain</option>
<option value="11">Bangladesh</option>
<option value="12">Barbados</option>
<option value="13">Barbados</option>
<option value="14">Belgium</option>
<option value="15">Bhutan</option>
<option value="16">Bolivia (Plurinational State of)</option>
<option value="17">Bosnia and Herzegovina</option>
<option value="18">Brazil</option>
<option value="19">Bulgaria</option>
<option value="20">Cambodia</option>
<option value="21">Canada</option>
<option value="22">Central African Republic</option>
<option value="23">Chile</option>
<option value="24">China</option>
<option value="25">Colombia</option>
<option value="26">Cook Islands</option>
<option value="27">Costa Rica</option>
<option value="28">Croatia</option>
<option value="29">Cuba</option>
<option value="30">Democratic People's Republic of Korea</option>
<option value="31">Denmark</option>
<option value="32">Ecuador</option>
<option value="33">Egypt</option>
<option value="34">Estonia</option>
<option value="35">Finland</option>
<option value="36">France</option>
<option value="37">Gambia</option>
<option value="38">Germany</option>
<option value="39">Ghana</option>
<option value="40">Greece</option>
<option value="41">Hungary</option>
<option value="42">Iceland</option>
<option value="43">India</option>
<option value="44">Indonesia</option>
<option value="45">Iran (Islamic Republic of)</option>
<option value="46">Iraq</option>
<option value="47">Ireland</option>
<option value="48">Italy</option>
<option value="49">Japan</option>
<option value="50">Jordan</option>
<option value="">Other</option>
</select>
                  
                  
                  <div>
                   <button type="submit" class="btn btn-primary"><strong>Submit</strong></button>
                   </div>
               </form>
           </div>
       </div>

    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>

