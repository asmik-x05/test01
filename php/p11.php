<!-- WAP to print series (a. 5,10,15..50 b. 1,4,9..20 terms c. 100,98..10 terms) along with sum. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Series Generator</title>
  <style>
    body { background:#f9f9f9; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Series Generator</h1>
  <div class="box">
    <?php
      // a. 5,10,15..50
      $sum1=0;
      echo "<p>Series A: ";
      for($i=5;$i<=50;$i+=5){ echo "$i "; $sum1+=$i; }
      echo "<br>Sum = $sum1</p>";

      // b. 1,4,9..20 terms
      $sum2=0;
      echo "<p>Series B: ";
      for($i=1;$i<=20;$i++){ echo ($i*$i)." "; $sum2+=($i*$i); }
      echo "<br>Sum = $sum2</p>";

      // c. 100,98..10 terms
      $sum3=0; $val=100;
      echo "<p>Series C: ";
      for($i=1;$i<=10;$i++){ echo "$val "; $sum3+=$val; $val-=2; }
      echo "<br>Sum = $sum3</p>";
    ?>
  </div>
</body>
</html>
