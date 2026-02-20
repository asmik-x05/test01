<!-- WAP to add, subtract, multiply and divide two numbers. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator</title>
  <style>
    h1 { color:darkred; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Basic Calculator</h1>
  <div class="box">
    <?php
      $a = 15; $b = 5;
      echo "<p>Addition = " . ($a+$b) . "</p>";
      echo "<p>Subtraction = " . ($a-$b) . "</p>";
      echo "<p>Multiplication = " . ($a*$b) . "</p>";
      echo "<p>Division = " . ($a/$b) . "</p>";
    ?>
  </div>
</body>
</html>
