<!-- WAP to find largest and smallest among two and three numbers. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Largest & Smallest</title>
  <style>
    body { background:#f8f8f8; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Largest & Smallest Numbers</h1>
  <div class="box">
    <?php
      $a = 12; $b = 25; $c = 7;
      echo "<p>Largest among $a and $b = " . max($a,$b) . "</p>";
      echo "<p>Smallest among $a and $b = " . min($a,$b) . "</p>";
      echo "<p>Largest among $a, $b, $c = " . max($a,$b,$c) . "</p>";
      echo "<p>Smallest among $a, $b, $c = " . min($a,$b,$c) . "</p>";
    ?>
  </div>
</body>
</html>
