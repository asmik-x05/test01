<!-- WAP to find sum of numbers from 5 to 100. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sum 5 to 100</title>
  <style>
    body { background:#f0f0f0; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Sum of Numbers (5–100)</h1>
  <div class="box">
    <?php
      $sum = 0;
      for($i=5;$i<=100;$i++){
        $sum += $i;
      }
      echo "<p>Sum from 5 to 100 = $sum</p>";
    ?>
  </div>
</body>
</html>
