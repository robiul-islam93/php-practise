<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Form Handling</title>
</head>
<body>
<div class="container">
<h1>Find Tour</h1>
<form action="form-handling.php" method= "post">
    <div class="field-group">
    <label for="name" class="field-title" >First Name:</label>
    <input type="text" name="name" id="name" placeholder= "Enter your  name">
    </div>
    <div class="field-group">
    <label for="email" class="field-title">Email :</label>
    <input type="email" name="email" id="email" placeholder= "Enter your email for contact">
    </div>
    <div class="field-group">
    <label class="field-title" for="region">Where Would you like to go ?</label>
    <select name="region" id="region">
        <option value="">--Select a Region--</option>
        <option value="Asia">Asia</option>
        <option value="Oceania">Oceania</option>
        <option value="Africa">Africa</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="Latin America">Latin America</option>
    </select>
    </div>

    <div class="field-group">
    <p class="field-title">prefared section:</p>

<input type="radio" name="season" id="Summer" value="Summer">
<label for="Summer">Summer</label>

<input type="radio" name="season" id="Winter" value="Winter">
<label for="Winter">Winter</label>

<input type="radio" name="season" id="Spring" value="Spring">
<label for="Spring">Spring</label>

<input type="radio" name="season" id="Autumn" value="Autumn">
<label for="Autumn">Autumn</label>

<input type="radio" name="season" id="Monson" value="Monson">
<label for="Monson">Monson</label>
    </div>

    


    <div class="field-group">
<p class="field-title">Your interests :</p>

<input type="checkbox" name="interests[]" id="Photography" value="Photography">
<label for="Photography">Photography</label>

<input type="checkbox" name="interests[]" id="Trekking" value="Trekking">
<label for="Trekking">Trekking</label>

<input type="checkbox" name="interests[]" id="start-gazing" value="start-gazing">
<label for="start-gazing">start-gazing</label>

<input type="checkbox" name="interests[]" id="bird-watching" value="bird-watching">
<label for="bird-watching">bird-watching</label>

<input type="checkbox" name="interests[]" id="camping" value="camping">
<label for="camping">camping</label>

</div>

<div class="field-group">

<label for="participants" class="field-title">No. of participants</label>
    <input type="number" name="participants" id="participants">
</div>

<div class="field-group">
<label for="message" class="field-title">Tell About your Requirements:</label>
    <textarea name="message" id="message"></textarea>
</div>

<div class="field-group">
<input type="hidden" name="token" value="">
<button type="submit">Send</button>

</div>
    </form>
</div>
</body>
</html>