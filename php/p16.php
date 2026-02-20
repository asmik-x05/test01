<!-- WAP to print number patterns (12345 and 1,22,333,4444,55555). -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Number Patterns</title>
  <style>
    body { background:#f9f9f9; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; font-family:monospace; }
  </style>
</head>
<body>
  <h1>Number Patterns</h1>
  <div class="box">
    <?php
      echo "<p>Pattern A:<br>";
      for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){ echo $j; }
        echo "<br>";
      }
      echo "</p>";

      echo "<p>Pattern B:<br>";
      for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){ echo $i; }
        echo "<br>";
      }
      echo "</p>";
    ?>
  </div>
</body>
</html>
