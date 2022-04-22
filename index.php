<!DOCTYPE html>
<!-- ICS2O-Unit3-03-PHP-VolumeSphere -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="PHP hour! I am tired. that's okay. it's time for the volume of a triangular pyramid.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Hey PHP people: its the volume of a sphere calculator, now right here for your viewing pleasure!</title>
 
    <!-- can you believe this??? there's a favicon! -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- PHP echo time for webpage header oh man -->
  <?php 
    echo "<h1>The sphere has volume. Now it is time that we find out what the volume is, because why not. it'll be fun.</h1>";
  ?>

  <!-- this form is magic. no really it just collects the radius. but we can pretend i think. -->
  <form action="./results.php" method="post" target="sphere-volume">
    <label for="radius">The radius please :)</label>
    <input type="number" id="radius" placeholder="Radius in cm" name="radius">
    <br>
    <br>
    <input type="submit" value="Are you ready for the volume of the sphere? because i sure am!">
    <br>
    <br>
  </form>

  <!-- Frame for the results because boy do they be appearing -->
  <iframe id="sphere-volume" name="sphere-volume">
    Wow! the volume will now be shared :) " + $volume + cm<sup>3</sup>"
  </iframe>
</body>
</html>