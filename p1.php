<!-- WAP to find sum and product of two numbers. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sum & Product</title>
  <style>
    body { background:#f0f0f0; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Sum & Product of Two Numbers</h1>
  <div class="box">
    <?php
      $a = 10; $b = 20;
      echo "<p>Sum = " . ($a+$b) . "</p>";
      echo "<p>Product = " . ($a*$b) . "</p>";
    ?>
  </div>
</body>
</html>
