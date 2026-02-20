<!-- Write PHP program to calculate x^5 + 2xy + y^2 -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Algebra Expression</title>
  <style>
    h1 { color:green; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Algebra Expression</h1>
  <div class="box">
    <?php
      $x = 2; $y = 3;
      $result = pow($x,5) + 2*$x*$y + pow($y,2);
      echo "<p>Result of x^5 + 2xy + y^2 = $result</p>";
    ?>
  </div>
</body>
</html>
