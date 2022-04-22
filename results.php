<?php
  $radius = $_POST["radius"];
  $pi = pi();
  $volume = (4/3) * $pi * $radius**3
?>
<h5> Volume? I sure hope it does!</h5>
<?php echo "i'm so proud of this funky little calculator look it got the volume :) here it is i will share. it is " . round($volume, 2) . " cm<sup>3</sup> :)" ?>