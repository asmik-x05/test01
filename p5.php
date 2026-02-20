<!-- WAP to find area of rectangle and circle. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Geometry</title>
  <style>
    body { background:#f0f0f0; font-family:Arial; }
    h1 { color:purple; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Geometry Areas</h1>
  <div class="box">
    <?php
      $l = 10; $b = 5; $r = 7;
      define("PI",3.1416);
      echo "<p>Area of Rectangle = " . ($l*$b) . "</p>";
      echo "<p>Area of Circle = " . (PI*$r*$r) . "</p>";
    ?>
  </div>
</body>
</html>
