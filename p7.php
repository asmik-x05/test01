<!-- WAP to check odd/even, divisible by 7, divisible by 5 and 10, divisible by 7 but not 13. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Number Properties</title>
  <style>
    body { background:#eef; font-family:Arial; }
    h1 { color:darkred; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Number Properties</h1>
  <div class="box">
    <?php
      $n = 35;
      echo "<p>$n is " . (($n%2==0) ? "Even" : "Odd") . "</p>";
      echo "<p>$n is " . (($n%7==0) ? "Divisible by 7" : "Not divisible by 7") . "</p>";
      echo "<p>$n is " . (($n%5==0 && $n%10==0) ? "Divisible by both 5 and 10" : "Not divisible by both 5 and 10") . "</p>";
      echo "<p>$n is " . (($n%7==0 && $n%13!=0) ? "Divisible by 7 but not by 13" : "Condition not met") . "</p>";
    ?>
  </div>
</body>
</html>
