<!-- WAP to find factorial of a number. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Factorial</title>
  <style>
    body { background:#f0fff0; font-family:Arial; }
    h1 { color:darkgreen; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Factorial Finder</h1>
  <div class="box">
    <?php
      $n=6; $fact=1;
      for($i=1;$i<=$n;$i++){ $fact*=$i; }
      echo "<p>Factorial of $n = $fact</p>";
    ?>
  </div>
</body>
</html>
