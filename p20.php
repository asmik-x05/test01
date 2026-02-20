<!-- WAP to generate multiplication table in HTML table format. -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
  <style>
    body { background:#f0f0f0; font-family:Arial; }
    h1 { color:darkblue; text-align:center; }
    table { margin:20px auto; border-collapse:collapse; background:#fff; }
    td, th { border:1px solid #000; padding:8px; text-align:center; }
  </style>
</head>
<body>
  <h1>Multiplication Table of 7</h1>
  <table>
    <tr><th>Expression</th><th>Result</th></tr>
    <?php
      $n=7;
      for($i=1;$i<=10;$i++){
        echo "<tr><td>$n × $i</td><td>".($n*$i)."</td></tr>";
      }
    ?>
  </table>
</body>
</html>
