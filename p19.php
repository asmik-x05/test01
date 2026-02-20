<!-- WAP to calculate greatest among four variables using ternary operator. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ternary Greatest</title>
  <style>
    body { background:#f9f9f9; font-family:Arial; }
    h1 { color:purple; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Greatest of Four Numbers</h1>
  <div class="box">
    <?php
      $a=12; $b=45; $c=33; $d=27;
      $greatest = ($a>$b ? $a : $b);
      $greatest = ($greatest>$c ? $greatest : $c);
      $greatest = ($greatest>$d ? $greatest : $d);
      echo "<p>Greatest among $a, $b, $c, $d = $greatest</p>";
    ?>
  </div>
</body>
</html>
