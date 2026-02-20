<!-- WAP to check whether a number is prime or not. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prime Checker</title>
  <style>
    body { background:#eef; font-family:Arial; }
    h1 { color:darkred; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; }
  </style>
</head>
<body>
  <h1>Prime Checker</h1>
  <div class="box">
    <?php
      $n=29; $flag=true;
      if($n<2){ $flag=false; }
      else {
        for($i=2;$i<=sqrt($n);$i++){
          if($n%$i==0){ $flag=false; break; }
        }
      }
      echo "<p>$n is " . ($flag ? "Prime" : "Not Prime") . "</p>";
    ?>
  </div>
</body>
</html>
