<!-- WAP to print star patterns (a. increasing, b. decreasing). -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Star Patterns</title>
  <style>
    body { background:#f0f0f0; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; font-family:monospace; }
  </style>
</head>
<body>
  <h1>Star Patterns</h1>
  <div class="box">
    <?php
      echo "<p>Pattern A:<br>";
      for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){ echo "*"; }
        echo "<br>";
      }
      echo "</p>";

      echo "<p>Pattern B:<br>";
      for($i=5;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){ echo "*"; }
        echo "<br>";
      }
      echo "</p>";
    ?>
  </div>
</body>
</html>
