<!-- WAP to print prime numbers from 1 to 100. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prime Series</title>
  <style>
    body { background:#f0fff0; font-family:Arial; }
    h1 { color:darkgreen; text-align:center; }
    .box { margin:20px; padding:15px; background:#fff; border-radius:8px; font-family:monospace; }
  </style>
</head>
<body>
  <h1>Prime Numbers (1–100)</h1>
  <div class="box">
    <?php
      for($n=2;$n<=100;$n++){
        $flag=true;
        for($i=2;$i<=sqrt($n);$i++){
          if($n%$i==0){ $flag=false; break; }
        }
        if($flag) echo "$n ";
      }
    ?>
  </div>
</body>
</html>
