<!-- WAP to print numbers from 1 to 10. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Numbers 1 to 10</title>
  <style>
    body { background:#f9f9f9; font-family:Arial; }
    h1 { color:purple; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Numbers from 1 to 10</h1>
  <div class="box">
    <?php
      for($i=1;$i<=10;$i++){
        echo "$i ";
      }
    ?>
  </div>
</body>
</html>
