<!-- WAP to print Fibonacci series up to 15 terms. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fibonacci</title>
  <style>
    body { background:#f9f9f9; font-family:Arial; }
    h1 { color:purple; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Fibonacci Series</h1>
  <div class="box">
    <?php
      $n1=1; $n2=1;
      echo "<p>Series: $n1 $n2 ";
      for($i=3;$i<=15;$i++){
        $n3=$n1+$n2;
        echo "$n3 ";
        $n1=$n2; $n2=$n3;
      }
      echo "</p>";
    ?>
  </div>
</body>
</html>
