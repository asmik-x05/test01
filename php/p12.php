<!-- WAP to print first 15 even numbers and sum of odd numbers from 1 to 100. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Even & Odd Series</title>
  <style>
    body { background:#eef; font-family:Arial; }
    h1 { color:darkred; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Even & Odd Series</h1>
  <div class="box">
    <?php
      echo "<p>First 15 Even Numbers: ";
      for($i=2;$i<=30;$i+=2){ echo "$i "; }
      echo "</p>";

      $sum=0;
      for($i=1;$i<=100;$i+=2){ $sum+=$i; }
      echo "<p>Sum of Odd Numbers (1–100) = $sum</p>";
    ?>
  </div>
</body>
</html>
