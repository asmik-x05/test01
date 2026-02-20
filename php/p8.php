<!-- WAP to input CP and SP and check profit or loss. Also find profit or loss amount. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profit & Loss</title>
  <style>
    body { background:#f0fff0; font-family:Arial; }
    h1 { color:darkgreen; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Profit & Loss Calculator</h1>
  <div class="box">
    <?php
      $cp = 500; $sp = 650;
      if($sp > $cp){
        echo "<p>Profit = " . ($sp-$cp) . "</p>";
      } elseif($cp > $sp){
        echo "<p>Loss = " . ($cp-$sp) . "</p>";
      } else {
        echo "<p>No Profit, No Loss</p>";
      }
    ?>
  </div>
</body>
</html>
