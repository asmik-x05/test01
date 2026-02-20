<!-- WAP to find simple interest. [SI=(P*T*R)/100] -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Interest</title>
  <style>
    h1 { color:darkgreen; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Simple Interest Calculator</h1>
  <div class="box">
    <?php
      $p = 1000; $t = 2; $r = 5;
      $si = ($p*$t*$r)/100;
      echo "<p>Principal = $p</p>";
      echo "<p>Time = $t years</p>";
      echo "<p>Rate = $r%</p>";
      echo "<p>Simple Interest = $si</p>";
    ?>
  </div>
</body>
</html>
